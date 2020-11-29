$(document).ready(function(){
    $.ajax({
        url: '../../index.php/appointment/available_doctors',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            if(data.length == 0){
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
        var select = "<a href='../appointment/select_dates?doctor=".concat(i,"'><button class='tb-btn'>Select</button><a>");

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
