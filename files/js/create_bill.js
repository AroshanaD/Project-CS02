var selected_list = [];
var selected_list_details = [];
var total_cost = 0;
var no_items = 0;
var details = [];

$(document).ready(function () {
    $.ajax({
        url: '../../index.php/inventory/get_stock',
        data: {},
        type: 'post',
        success: function (data) {
            details = data;
            render_details(data);
        }
    })

    $("#search-btn").click(function () {
        $.ajax({
            url: '../../index.php/inventory/search_medicine',
            data: { name: $("#name").val() },
            type: 'post',
            success: function (data) {
                details = data;
                render_details(data);
            }
        })
    })

    $("#bill-form").submit(function (event) {
        event.preventDefault();

        var id = $("#id").val();
        var name = $("#customer_name").val();
        var age = $("#age").val();
        var contact =$("#contact").val()

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#id", "#customer_name", "#age", "#contact"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if(id != ""){
            id = $("#id").val();
            if (id_val(id) == false) { valid = false; 
            alert("Please enter a valid id");}
        }

        if(contact != ""){
            if(contact_val(contact) == false){valid = false;
            alert("Please enter a valid contact");}
        }

        if(age > 100 & age < 18){
            alert("Please enter a valid age");
        }

        /*if($("#note").val() != ""){
            note = $("#note").val();
            if (text_val("note",note) == false) { valid = false; }
        }*/

        if (text_val("name", name) == false) { valid = false; }

        if (valid == true) {
            if (selected_list.length >= 1) {
                $.ajax({
                    url: '../../index.php/inventory/add_bill',
                    data: {
                        id: id,
                        name: name,
                        age: age,
                        contact: contact,
                        no_items: no_items,
                        cost: total_cost,
                        medicine_list: selected_list_details,
                    },
                    type: 'post',
                    success: function (data) {
                        if (data == true) {
                           render_bill(id, name, age);
                        }
                        else{
                            location.href = "../../index.php/Inventory/create_test?could not create the bill";
                        }
                    }
                })
            }
            else {
                alert("Please Select 1 Medicine Or More");
            }
        }

    })
    function render_med_header() {
        var header = $(`<tr>`).append(
            $(`<td>`).text("ID"),
            $(`<td>`).text("Medicine"),
            $(`<td>`).text("Selling Price"),
            $(`<td>`).text("Quantity"),
            $(`<td>`).text("Special Note"),
            $(`<td>`).text("Sub Total"),
            $(`<td>`).text("Remove"));
        $("#test-tb").append(header);
    }
    render_med_header();
})

function render_details(data) {

    function render_header() {
        $("#full-tb").empty();
        var header = $(`<tr id=${"head_row"}>`).append(
            $(`<td>`).text("BR"),
            $(`<td>`).text("Medicine"),
            $(`<td>`).text("Unit"),
            $(`<td>`).text("Price"),
            $(`<td>`).text("Available Quantity"),
            $(`<td>`).text("Expiration Date"),
            $(`<td>`).text("Bill Quantity"),
            $(`<td>`).text("Special Note"),
            $(`<td>`).text("Select"));
        $("#full-tb").append(header);
    }

    render_header();

    const no_rows = 8;
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
        $("#full-tb").empty();
        render_header();
        for (let i = first_row; i < last_row; i++) {
            let select_func = 'select_func('.concat(i, ')');
            var get_details = data[i]['br_id'];
            let select = $(`<button class=${"tb-btn"} id=${"select"} onclick=${select_func}>`).text("Select");

            var row = $(`<tr id=${data[i].id}>`).append(
                $(`<td>`).text(data[i].br_id),
                $(`<td>`).text(data[i].drug_name),
                $(`<td>`).text((data[i].unitary_value).toString().concat(" ", data[i].unitary_unit)),
                $(`<td>`).text(data[i].selling_price),
                $(`<td>`).text(data[i].quantity),
                $(`<td>`).text(data[i].expire_date),
                $(`<td>`).append(`<input type${"number"} id=${"q".concat(i)} style=${"width:50px"} required>`),
                $(`<td>`).append(`<input type${"text"} id=${"n".concat(i)} style=${"width:100px"}>`),
                $(`<td>`).append(select));
            $("#full-tb").append(row);
        }
    }

}

function select_func(i) {

    var medicine_quantity = $("#q".concat(i)).val();
    var medicine_note = $("#n".concat(i)).val();

    var day = new Date();
    var dd = String(day.getDate()).padStart(2, '0');

    var mm = day.getMonth();
    if(mm + 3 > 11){
        padding_m = mm - 8;
        padding_y = 1;
    }
    else{
        padding_m = mm + 1; 
        padding_y = 0;
    }
    
    mm = String(padding_m).padStart(2, '0'); //January is 0!
    
    var yyyy = day.getFullYear()+padding_y;
    day = yyyy + '-' + mm + '-' + dd;

    console.log(day);
    console.log(details[i].expire_date);

    if (medicine_quantity == "") {
        alert("Please select quantity");
    }
    else {
        if (details[i].expire_date < day) {
            if(confirm("Expiry date of medicine is within 3 months. Please check before proceed")){
                return true;
            }
            else{
                return false;
            }
        }
        else {
            if (medicine_quantity > details[i].quantity) {
                alert("Stock out of quantity");
            }
            else {
                no_items = no_items + 1;
                var medicine_total = medicine_quantity * details[i].selling_price;
                total_cost = total_cost + medicine_total;
                var medicine = [details[i].br_id, details[i].drug_name, medicine_quantity, medicine_total, medicine_note];
                selected_list_details.push(medicine);
                selected_list.push(details[i].br_id);

                var remove_func = "remove_func(".concat(i, ",", medicine_quantity, ")");

                var remove = $(`<button class=${"tb-btn"} id=${"select"} onclick=${remove_func}>`).text("Remove");
                var row = $(`<tr id=${details[i].br_id}>`).append(
                    $(`<td>`).text(details[i].br_id),
                    $(`<td>`).text(details[i].drug_name),
                    $(`<td>`).text(details[i].selling_price),
                    $(`<td>`).text(medicine_quantity),
                    $(`<td>`).text(medicine_note),
                    $(`<td>`).text(medicine_total),
                    $(`<td>`).append(remove));
                $("#test-tb").append(row);

                $("#total-tr").remove();

                let tot_row = $(`<tr id=${"total-tr"}>`).append(
                    $(`<td>`),
                    $(`<td>`),
                    $(`<td>`),
                    $(`<td>`),
                    $(`<td>`).text("Total"),
                    $(`<td>`).text(total_cost),
                    $(`<td>`)
                );
                $("#test-tb").append(tot_row);
                console.log(selected_list_details);
            }
        }
    }
}

function remove_func(i, medicine_quantity) {
    no_items = no_items - 1;
    total_cost = total_cost - (details[i].selling_price * medicine_quantity);
    selected_list.splice(selected_list.indexOf(details[i].br_id), 1);
    let index = selected_list_details.findIndex(element => {
        if (element[0] == details[i].br_id) {
            return true;
        }
    });
    selected_list_details.splice(selected_list.indexOf(index), 1);
    $("#total").val(total_cost);

    $("#".concat(details[i].br_id)).remove();

    $("#total-tr").remove();

    let tot_row = $(`<tr id=${"total-tr"}>`).append(
        $(`<td>`),
        $(`<td>`),
        $(`<td>`),
        $(`<td>`),
        $(`<td>`).text("Total"),
        $(`<td>`).text(total_cost),
        $(`<td>`)
    );
    $("#test-tb").append(tot_row);
    console.log(selected_list_details);
}

function render_bill(id, name, age) {
    let current = new Date();
    let cDate = current.getFullYear() + '-' + (current.getMonth() + 1) + '-' + current.getDate();
    let cTime = current.getHours() + ":" + current.getMinutes() + ":" + current.getSeconds();
    let dateTime = cDate + ' ' + cTime;
    $(".table").remove();
    $(".form").remove();
    $(".container-8").css("grid-template-areas", "'nav nav nav' 'sidebar report report' 'sidebar report report' 'footer footer footer'")
    $(".container-8").append(`<div class=${"report"}>`);
    $(".report").append(`<div class=${"report-paper"} style=${"height:500px"}>`);
    $(".report-paper").append(`<div class=${"content"} style=${"height:400px"}>`);
    $(".content").append($(`<div>`).text("MedCaid Hospital"));
    $(".content").append($(`<div style=${"text-align:right"}>`).text("+94 (0)11 2140 010"));
    $(".content").append($(`<div style=${"text-align:right"}>`).text("+94 (0)11 2140 050"));
    $(".content").append($(`<div style=${"text-align:right"}>`).text("contactus@medcaid.com"));
    $(".content").append($(`</br>`));
    $(".content").append($(`<div class=${"heading"}>`).text("Bill Invoice"));
    $(".content").append($(`<div style=${"text-align:right"}>`).text(dateTime));
    $(".content").append($(`</br>`));
    $(".content").append($(`<table class=${"report-tb"}>`));
    $(".report-tb").append($(`<tr style=${"background-color:white"}>`).append($(`<td>`).text("Customer ID"),$(`<td>`).text(id)));
    $(".report-tb").append($(`<tr style=${"background-color:white"}>`).append($(`<td>`).text("Customer Name"),$(`<td>`).text(name)));
    $(".report-tb").append($(`<tr style=${"background-color:white"}>`).append($(`<td>`).text("Customer Age"),$(`<td>`).text(age)));
    $(".content").append($(`</br>`));
    $(".content").append($(`<table class=${"report-tb"} id=${"app"}>`));

    var header = $(`<tr>`).append(
        $(`<td>`).text("ID"),
        $(`<td>`).text("Medicine"),
        $(`<td>`).text("Quantity"),
        $(`<td>`).text("Special Note"),
        $(`<td>`).text("Sub Total"));
    $("#app").append(header);

    selected_list_details.forEach(element => {
        var row = $(`<tr id=${element[0]}>`).append(
            $(`<td>`).text(element[0]), 
            $(`<td>`).text(element[1]),
            $(`<td>`).text(element[2]),
            $(`<td>`).text(element[4]),
            $(`<td>`).text(element[3]));
        $("#app").append(row);
    });
    total = $(`<tr>`).append(
        $(`<td>`),
        $(`<td>`),
        $(`<td>`),
        $(`<td>`).text("Total"),
        $(`<td>`).text(total_cost));
    $("#app").append(total);

    $(".report").append($(`<div style=${"width:100%;text-align:center;"}>`).append($(`<button class="btn" id=${"print"}>`).text("Print")));

    $("#print").click(function(){
        window.print();
    })
}