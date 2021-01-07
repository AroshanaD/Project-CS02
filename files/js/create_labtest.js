var selected_list = [];
var selected_list_details = [];
var total_cost = 0;
var details = [];
var p_email = "";
var p_id = "";

$(document).ready(function () {
    $.ajax({
        url: '../../index.php/labtest/get_view',
        data: {},
        type: 'post',
        success: function (data) {
            details = data;
            render_table(data);
        }
    })

    $("#search-btn").click(function () {
        $.ajax({
            url: '../../index.php/labtest/search',
            data: { id: $("#id").val(), name: $("#name").val() },
            type: 'post',
            success: function (data) {
                details = data;
                render_table(data);
            }
        })
    })

    $("#email").change(function(){
        let email = $("#email").val();
        $.ajax({
            url: '../../index.php/patientTest/search_user',
            data: { email: email},
            type: 'post',
            success: function (data) {
                console.log(data);
                $("#id").val(data[0]['NIC']);
                $("#p_name").val(data[0]['f_name'].concat(" ",data[0]['l_name']));
                $("#contact").val(data[0]['contact_no']);
                p_email = email;
                p_id = data[0]['id'];
            }
        })
    })

    $("form").submit(function (event) {
        event.preventDefault();

        var id = $("#id").val();
        var name = $("#p_name").val();
        var gender = $("#gender").val();
        var age = $("#age").val();
        var contact = $("#contact").val();
        var email = $("email").val();
        var submit = $(".btn").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#id", "#name", "#contact"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if(id_val != ""){if (id_val(id) == false) { valid = false; }}
        if (text_val("name", name) == false) { valid = false; }
        if (contact_val(contact) == false) { valid = false; }

        if (valid == true) {
            if(email == p_email){
                var pid = p_id;
            }
            else{
                var pid = null;
            }
            if (selected_list.length >= 1) {
                $.ajax({
                    url: '../../index.php/PatientTest/add_test',
                    data: {
                        pid: pid,
                        id: id,
                        name: name,
                        gender: gender,
                        age: age,
                        contact: contact,
                        cost: total_cost,
                        test_list: selected_list,
                    },
                    type: 'post',
                    success: function (data) {
                        if (data == true) {
                            render_bill(id, name, gender, age, contact);
                        }
                        //location.href = "../../index.php/PatientTest/create_test";
                    }
                })
            }
            else {
                $("#form-message").text("Please Select 1 Test Or More");
            }
        }

    })
    function render_header_test() {
        let header = $(`<tr id=${"head_row"}>`).append(
            $(`<td>`).text("Test ID"),
            $(`<td>`).text("Test Name"),
            $(`<td>`).text("Unit Price"),
            $(`<td>`).text("Remove"));
        $("#test-tb").append(header);
    }

    render_header_test();
})

function render_table(data) {

    function render_header() {
        let header = $(`<tr id=${"head_row"}>`).append(
            $(`<td>`).text("No"),
            $(`<td>`).text("Test ID"),
            $(`<td>`).text("Test Name"),
            $(`<td>`).text("Description"),
            $(`<td>`).text("Unit Price"),
            $(`<td>`).text("Select"));
        $("#select-tb").append(header);
    }

    const no_rows = 3;
    var page = 1;
    var tot_rows = data.length;

    render_page();

    $(".pagination").css("display", "flex");

    $("#next").click(function () {
        if (page * no_rows < tot_rows) {
            page = page + 1;
            render_page();
        }
    });

    $("#previous").click(function () {
        if (page > 1) {
            page = page - 1;
            render_page();
        }
    })

    function render_page() {
        let first_row = (page - 1) * no_rows;
        let last_row = (first_row + no_rows > tot_rows) ? tot_rows : first_row + no_rows;
        $("#select-tb").empty();

        render_header();

        for (let i = first_row; i < last_row; i++) {

            let select_func = 'select_func('.concat(i, ')');

            let get_details = data[i]['id'];
            let select = $(`<button class=${"tb-btn"} id=${"select"} onclick=${select_func}>`).text("Select");
            let row = $(`<tr id=${data[i].id}>`).append(
                $(`<td>`).text(i + 1),
                $(`<td>`).text(data[i].id),
                $(`<td>`).text(data[i].name),
                $(`<td>`).text(data[i].description),
                $(`<td>`).text(data[i].unit_cost),
                $(`<td>`).append(select));
            $("#select-tb").append(row);
        }
    }
}

function select_func(i) {

    var test = [details[i].id, details[i].name, details[i].unit_cost];
    selected_list_details.push(test);
    selected_list.push(details[i].id);
    total_cost = total_cost + details[i].unit_cost;
    $("#total").val(total_cost);
    //console.log(selected_list);
    //console.log(selected_list_details);

    var remove_func = "remove_func(".concat(i, ")");

    var remove = $(`<button class=${"tb-btn"} id=${"select"} onclick=${remove_func}>`).text("Remove");
    var row = $(`<tr class=${"bill-tb-tr"} id=${details[i].id}>`).append(
        $(`<td>`).text(details[i].id),
        $(`<td>`).text(details[i].name),
        $(`<td>`).text(details[i].unit_cost),
        $(`<td>`).append(remove));
    $("#test-tb").append(row);

    $("#total-tr").remove();

    let tot_row = $(`<tr id=${"total-tr"}>`).append(
        $(`<td>`),
        $(`<td>`).text("Total"),
        $(`<td>`).text(total_cost),
        $(`<td>`)
    );
    $("#test-tb").append(tot_row);

}

function remove_func(i) {
    total_cost = total_cost - details[i].unit_cost;
    selected_list.splice(selected_list.indexOf(details[i].id), 1);
    let index = selected_list_details.findIndex(element => {
        if (element[0] == details[i].id) {
            return true;
        }
    });
    selected_list_details.splice(selected_list.indexOf(index), 1);
    $("#total").val(total_cost);

    $("#".concat(details[i].id)).remove();
    $("#total-tr").remove();

    let tot_row = $(`<tr id=${"total-tr"}>`).append(
        $(`<td>`),
        $(`<td>`).text("Total"),
        $(`<td>`).text(total_cost),
        $(`<td>`)
    );
    $("#test-tb").append(tot_row);
}

function render_bill(id, name, gender, age, contact) {
    $(".table").remove();
    $(".form").remove();
    $(".container-l").css("grid-template-areas", "'nav nav nav' 'sidebar receipt receipt' 'sidebar receipt receipt' 'footer footer footer'")
    $(".container-l").append(`<div class=${"receipt"}>`);
    $(".receipt").append(`<div class=${"receipt-t"}>`);
    $(".receipt-t").text("Lab Test");
    $(".receipt").append($(`<div class=${"receipt-l"}>`).text("Patient ID"));
    $(".receipt").append($(`<div class=${"receipt-f"}>`).text(id));
    $(".receipt").append($(`<div class=${"receipt-l"}>`).text("Patient Name"));
    $(".receipt").append($(`<div class=${"receipt-f"}>`).text(name));
    $(".receipt").append($(`<div class=${"receipt-l"}>`).text("Patient Gender"));
    $(".receipt").append($(`<div class=${"receipt-f"}>`).text(gender));
    $(".receipt").append($(`<div class=${"receipt-l"}>`).text("Patient Age"));
    $(".receipt").append($(`<div class=${"receipt-f"}>`).text(age));
    $(".receipt").append($(`<div class=${"receipt-l"}>`).text("Patient Contact"));
    $(".receipt").append($(`<div class=${"receipt-f"}>`).text(contact));
    $(".receipt").append($(`<table id=${"small-tb"}>`));

    selected_list_details.forEach(element => {
        var row = $(`<tr id=${element[0]}>`).append(
            $(`<td>`).text(element[0]), $(`<td>`).text(element[1]),
            $(`<td>`).text(element[2]));
        $("#small-tb").append(row);
    });
    row = $(`<tr>`).append(
        $(`<td>`), $(`<td>`).text("Total"),
        $(`<td>`).text(total_cost));
    $("#small-tb").append(row);

    $(".receipt").append($(`<div class=${"receipt-t"}>`).append($(`<button id=${"print"}>`).text("Print")));
}