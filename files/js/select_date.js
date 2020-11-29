$(document).ready(function(){
    $.ajax({
        url: '../../index.php/appointment/available_dates',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            if(data.length == 0){
                $(".table").empty();
                $(".container-t").append(`<div id=${"table-message"}>`.concat("No Dates Available"));
            }
            else{
                render_details(details);
            }
        }
    })

})

function render_details(details){

    $("table").empty();

    var head = $(`<tr id=${"head_row"}>`).append(
    $(`<td>`).append(),
    $(`<td>`).text("Date"),
    $(`<td>`).text("Time"),
    $(`<td>`).text("Seat No."),
    $(`<td>`).append("Book"));
    $("table").append(head);

    for(var i=0; i<details.length; i++){
        var select = "<a href='../appointment/fill_form?date=".concat(i,"'><button class='tb-btn'>Select</button><a>");

        var row = $(`<tr id=${details[i].id}>`).append(
        $(`<td id=${"calendar-avatar"}>`).append(),
        $(`<td id=${"td-large"}>`).text(details[i].date),
        $(`<td id=${"td-large"}>`).text(details[i].time),
        $(`<td id=${"td-large"}>`).text(details[i].seat_no),
        $(`<td id=${"td-large"}>`).append(select));
        $("table").append(row);
    }

}
