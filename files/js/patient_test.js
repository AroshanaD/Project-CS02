$(document).ready(function(){
    $.ajax({
        url: '../../index.php/patientTest/get_view',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_table(details);
        }
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/patientTest/search',
            data: {id:$("#id").val(),name:$("#name").val()},
            type: 'post',
            success:function(data){
                var details = data;
                render_table(details);
            }
        })
    })
})

function render_table(data){
    $("table").empty();

    var header = $(`<tr id=${"head_row"}>`).append($(`<td>`),
    $(`<td>`).text("No"),
    $(`<td>`).text("ID"),
    $(`<td>`).text("Patient Name"),
    $(`<td>`).text("Date"),
    $(`<td>`).text("Availability"),
    $(`<td>`).text("Change availability"),
    $(`<td>`).text("View"));
    $("table").append(header);

    var View = "<a href=../patientTest/View_available><button class='tb-btn'>View</button></a>";
    var header = $(`<tr>`).append($(`<td>`),
    $(`<td>`).text(1),
    $(`<td>`).text(1),$(`<td>`).text("Nimal perera"),
    $(`<td>`).text("ECG"),$(`<td>`).text("2020-11-29"),
    $(`<td>`).text("Unavailabile"),
    $(`<td>`).append(View));
    $("table").append(header);
}

function selectfunc(i,row_id){
    console.log(row_id);
    var idd = "#".concat(i);
    var row_id = "#".concat(row_id);
    console.log(row_id);
    if($(idd).is(':checked')){
        console.log($(idd).val());
        $(row_id).css("background-color","red");
    }
    else{
        if(i%2==0){
            $(row_id).css("background-color","#69f0ae");
        }
        else{
            $(row_id).css("background-color","white");
        }
    }
    
}