$(document).ready(function(){
    $.ajax({
        url: '../../index.php/appointment/available_doctors',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            if(data == null){
                $(".container-t").empty();
                $(".container-t").append(`<div id=${"table-message"}>`.concat("No Doctors Available"));
            }
            else{
                render_details(details);
            }
        }
    })

})

function render_details(details){

    $("table").empty();

    for(var i=0; i<details.length; i++){
        var func = "get_dates('".concat(details[i].id,"')");
        var select = "<a><button class='tb-btn' onclick=".concat(func,">Select</button><a>");

        var row = $(`<tr id=${details[i].id}>`).append(
        $(`<td id=${"doctor-avatar"}>`).append(),
        $(`<td id=${"td-large"}>`).text("Dr. ".concat(details[i].f_name," ",details[i].l_name)),
        $(`<td id=${"td-large"}>`).text(details[i].specialization),
        $(`<td id=${"td-large"}>`).text("Rs. ".concat(details[i].fee)),
        $(`<td id=${"td-large"}>`).text(details[i].qualification),
        $(`<td id=${"td-large"}>`).append(select));
        $("table").append(row);
    }

}

function get_dates(doctor){
    $.ajax({
        url: '../../index.php/appointment/available_dates',
        data: {id: doctor},
        type: 'post',
        success:function(data){
            console.log("in");
            console.log(data);
            if(data.length == 0){
                $("table").remove();
                $(".container-t").append(`<div id=${"table-message"}>`.concat("No Available Dates"));
            }
            else{
                render_dates(data);
            }
        }
    })
        
}

function render_dates(details){
    console.log(details);

    $("table").remove();
}
