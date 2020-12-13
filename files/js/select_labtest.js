var selected_list = [];
var selected_list_details = [];
var total_cost = 0;

$(document).ready(function(){
    $.ajax({
        url: '../../index.php/labtest/get_view',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_table(details);
        }
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/labtest/search',
            data: {id:$("#id").val(),name:$("#name").val()},
            type: 'post',
            success:function(data){
                var details = data;
                render_table(details);
            }
        })
    })

    $("form").submit(function(event){
        event.preventDefault();

        var id = $("#id").val();
        var name = $("#name").val();
        var gender = $("#gender").val();
        var age = $("#age").val();
        var contact = $("#contact").val();
        var submit = $(".btn").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#id","#name","#contact"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if(id_val(id) == false){valid = false;}
        if(text_val("name",name) == false){valid = false;}
        if(contact_val(contact) == false){valid = false;}

        if(valid == true){
            if(selected_list.length >= 1){
                $.ajax({
                    url: '../../index.php/PatientTest/add_test',
                    data: {
                    id : id,
                    name : name,
                    gender : gender,
                    age : age,
                    contact : contact,
                    cost : total_cost,
                    test_list : selected_list,
                    },
                    type: 'post',
                    success:function(data){
                        if(data == true){  
                            render_bill(id,name,gender,age,contact);
                        }
                        //location.href = "../../index.php/PatientTest/create_test";
                    }
                })
            }
            else{
                $("#form-message").text("Please Select 1 Test Or More");
            }
        }

    })
})

function render_table(data){
    $("#select-tb").empty();

    var header = $(`<tr id=${"head_row"}>`).append(
    $(`<td>`).text("No"),
    $(`<td>`).text("ID"),$(`<td>`).text("Name"),
    $(`<td>`).text("Description"),$(`<td>`).text("Unit Cost"),
    $(`<td>`).append("Select"));
    $("#select-tb").append(header);

    for(var i=0; i<data.length; i++){
        
        var select_func = 'select_func('.concat(data[i].id,',', "'".concat(data[i].name,"'"),',', data[i].unit_cost,')');

        var get_details = data[i]['id'];
        var select = $(`<button class=${"tb-btn"} id=${"select"} onclick=${select_func}>`).text("Select");
        var row = $(`<tr id=${data[i].id}>`).append(
        $(`<td>`).text(i+1),
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].name),
        $(`<td>`).text(data[i].description),$(`<td>`).text(data[i].unit_cost),
        $(`<td>`).append(select));
        $("#select-tb").append(row);
    }
}

function select_func(id,name,cost){

    var test = [id,name,cost];
    selected_list_details.push(test);
    selected_list.push(id);
    total_cost = total_cost + cost;
    //console.log(selected_list);
    //console.log(selected_list_details);

    var remove_func = "remove_func(".concat(id,',',cost,")");

    var remove = $(`<button class=${"tb-btn"} id=${"select"} onclick=${remove_func}>`).text("Remove");
    var row = $(`<tr id=${id}>`).append(
    $(`<td>`).text(id),$(`<td>`).text(name),
    $(`<td>`).text(cost),
    $(`<td>`).append(remove));
    $("#test-tb").append(row);

}

function remove_func(id,cost){
    total_cost = total_cost - cost;
    selected_list.splice(selected_list.indexOf(id),1);
    let index = selected_list_details.findIndex( element => {
        if (element[0] == id) {
          return true;
        }
    });
    selected_list_details.splice(selected_list.indexOf(index),1);
    //console.log(selected_list_details);

    $("#".concat(id)).remove();
    //console.log(selected_list);
}

function render_bill(id,name,gender,age,contact){
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
            $(`<td>`).text(element[0]),$(`<td>`).text(element[1]),
            $(`<td>`).text(element[2]));
        $("#small-tb").append(row);
    });
    row = $(`<tr>`).append(
        $(`<td>`),$(`<td>`).text("Total"),
        $(`<td>`).text(total_cost));
    $("#small-tb").append(row);

    $(".receipt").append($(`<div class=${"receipt-t"}>`).append($(`<button id=${"print"}>`).text("Print")));
}