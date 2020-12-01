$(document).ready(function(){
    $.ajax({
        url: '../../index.php/appointment/available_dates',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_details(details);
        }
    })

})

function render_details(details){

    $("table").empty();

    var head = $(`<tr id=${"head_row"}>`).append(
    $(`<td>`).text("Weekday"),
    $(`<td>`).text("Time"));
    $("table").append(head);

    var week = ['Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'];

    week.forEach(element => {
        var weekday = $(`<tr id=${element}>`).append(
            $(`<td>`).text(element),
            $(`<td>`).text("18:00"));
            $("table").append(weekday);
    });

    /**for(var i=0; i<details.length; i++){
        var select = "<a href='../appointment/fill_form?date=".concat(i,"'><button class='tb-btn'>Select</button><a>");

        var row = $(`<tr id=${details[i].id}>`).append(
        $(`<td id=${"calendar-avatar"}>`).append(),
        $(`<td id=${"td-large"}>`).text(details[i].date),
        $(`<td id=${"td-large"}>`).text(details[i].time),
        $(`<td id=${"td-large"}>`).text(details[i].seat_no),
        $(`<td id=${"td-large"}>`).append(select));
        $("table").append(row);
    }**/

}
