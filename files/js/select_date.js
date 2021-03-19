var details=[];
var week = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

$(document).ready(function(){
    $.ajax({
        url: '../../index.php/appointment/available_dates',
        data: {},
        type: 'post',
        
        success:function(data){
            details = data;
            render_details(details);
        }
    })

    $("#selectdate-form").submit(function(event){
        event.preventDefault();

        $("#date").focus(function(){
            $("#form-message").empty();
            $("#date").removeClass("input-error");
        })

           var date= new Date($("#date").val());
           var dd = String(date.getDate()).padStart(2, '0');
           var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
           var yyyy = date.getFullYear();
           var n = date.getDay();
           var day = week[n];
           date= yyyy + '-' + mm + '-' + dd;

            var index=details.findIndex(x => x.date===day);
            if(index != -1){
                $.ajax({
                    url: '../../index.php/appointment/available_appointment',
                    data: {date:date,scheduleId:details[index].id},
                    type: 'post',
                    
                    success:function(data){
                        var max=data.max_patient;
                        var status;
                            if(data.CurrentSeat_no==null){
                                status=0; // avaiable and no seat book yet
                            }
                            else if(data.CurrentSeat_no>0 && data.CurrentSeat_no<max){
                                status=1; // available and some of seats are booked
                            }
                            else{
                                status=2; // seat are not available
                            }
                        if(status==0 || status==1){
                            location.href = "../../index.php/appointment/fill_form";
                        }
                        else{
                            $("#form-message").text('! Seats are not available. please select another date.');
                        }
                    }
                })
            }
            else{
                $("#form-message").text("Not available");

            }

    })

})

function render_details(details){

    $("table").empty();

    var head = $(`<tr id=${"head_row"}>`).append(
    $(`<td>`).text("Weekday"),
    $(`<td>`).text("Time"));
    $("table").append(head);


    for (var j=0;j<7;j++){
        for(var i=0;i<details.length;i++){
            if(week[j]==details[i].date){
                var row = $(`<tr>`).append(
                $(`<td>`).text(details[i].date),
                $(`<td>`).text(details[i].time));
                $("table").append(row);
                break;
            }
            else if(i==details.length-1){
                var row = $(`<tr>`).append(
                $(`<td>`).text(week[j]),
                $(`<td>`).text("Not available"));
                $("table").append(row);
            }
        }
    }
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


