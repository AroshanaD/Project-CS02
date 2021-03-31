var details=[];
var week = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

$(function() {
    var dtToday = new Date();

    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();

    if (month < 10)
        month = '0' + month.toString();
    if (day < 10)
        day = '0' + day.toString();

    var minDate = year + '-' + month + '-' + day;
    $('#date').attr('min', minDate);
});

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

    $("#back").click(function(){
        location.href = '/project-cs02/index.php/appointment/search_doctor'
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

    $("table").append($(`<tr id=${"app_day"} style=${"background-color:var(--databoard-color)"}>`));
    $("#app_day").append($(`<td id=${"large-td"}>`),
    $(`<td id=${"large-td"}>`).text("Sunday"),$(`<td id=${"large-td"}>`).text("Monday"),
    $(`<td id=${"large-td"}>`).text("Tuesday"),$(`<td id=${"large-td"}>`).text("Wednesday"),
    $(`<td id=${"large-td"}>`).text("Thursday"),$(`<td id=${"large-td"}>`).text("Friday"),
    $(`<td id=${"large-td"}>`).text("Saturday"));

    $("table").append($(`<tr id=${"app_avail"} style=${"background-color:white"}>`));
    $("#app_avail").append($(`<td id=${"large-td"}>`).text("Time"));

    for (var j=0;j<7;j++){
        for(var i=0;i<details.length;i++){
            if(week[j]==details[i].date){
                $("#app_avail").append($(`<td id=${"large-td"} style=${"background-color:aliceblue"} >`).text(details[i].time));
                break;
            }
            else if(i==details.length-1){
                $("#app_avail").append($(`<td id=${"large-td"} style=${"text-align:center"}>`).text("-"));
            }
        }
    }
}


