var doctors;
var index;
var details=[];
var week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];

$(document).ready(function () {
    var specialization = null;
    $.ajax({
        url: '../../index.php/appointment/doctors',
        data: { specialization: specialization },
        type: 'post',
        success: function (data) {
            doctors = data;
            //console.log(doctors);
            $("#doctor").append(`<option value=${""} placeholder=${"Select Doctor"}</option>`);
            for (var i = 0; i < data.length; i++) {
                $("#doctor").append(`<option value=${data[i].id}>${data[i].f_name.concat(' ', data[i].l_name)}</option>`);
            }
        }
    })

    $("#search_spec").change(function () {
        var specialization_id = $("#search_spec").val();
        $("#doctor").empty();
        $("#date").val("");
        $("#seat").val("");
        $("#doctor").append(`<option value=${""} placeholder=${"Select Doctor"}</option>`);
        for (var i = 0; i < doctors.length; i++) {
            //console.log(doctors[i].specialization_id);
            if (doctors[i].specialization_id == specialization_id) {
                $("#doctor").append(`<option value=${doctors[i].id}>${doctors[i].f_name.concat(' ', doctors[i].l_name)}</option>`);
            }
        }
    })

    $("#doctor").change(function () {
        var doctor_id = $("#doctor").val();
        $("#date").val("");
        $("#seat").val("");
        $.ajax({
            url: '../../index.php/appointment/doctor_schedule',
            data: { id: doctor_id },
            type: 'post',

            success: function (data) {
                details = data;
                render_details(details);
            }
        })
    })

    $("form").submit(function(event){
        event.preventDefault();

        var nic=$("#id").val();
        var name=$("#name").val();
        var age=$("#age").val();
        var contact=$("#contact").val();
        var email=$("#email").val();
        var date=$("#date").val();
        var schedule_id=details[index].id;
    
        $.ajax({
            url: '../../index.php/appointment/make_appointment',
            data: { nic:nic,name:name,age:age,contact:contact,email:email,date:date,schedule_id:schedule_id},
            type: 'post',
        })
    
    })

    $("#date").change(function () {
        var date= new Date($("#date").val());
           var dd = String(date.getDate()).padStart(2, '0');
           var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
           var yyyy = date.getFullYear();
           var n = date.getDay();
           var day = week[n];
           date= yyyy + '-' + mm + '-' + dd;

           index=details.findIndex(x => x.date===day);
            if(index != -1){
                $.ajax({
                    url: '../../index.php/appointment/available_appointment',
                    data: {date:date,scheduleId:details[index].id},
                    type: 'post',
                    
                    success:function(data){
                        var max=data.max_patient;
                        var status;
                            if(data.Seat_no==null){
                                status=0; // avaiable and no seat book yet
                            }
                            else if(data.Seat_no>0 && data.Seat_no<max){
                                status=1; // available and some of seats are booked
                            }
                            else{
                                status=2; // seat are not available
                            }
                        if(status==0){
                            $("#form-message").text('seats are available');
                            $("#seat").val(1);
                            
                            for (var i=0;i<doctors.length;i++){
                                if($("#doctor").val()==doctors[i].id){
                                    $("#appoint_no").val(1);
                                    $("#d_charges").val(doctors[i].fee);
                                    $("#total").val(doctors[i].fee + 250);
                                    break;
                                }
                            }        

                        }
                        else if(status==1){
                            $("#form-message").text('seats are available');
                            $("#seat").val(data.Seat_no + 1);
                            
                            for (var i=0;i<doctors.length;i++){
                                if($("#doctor").val()==doctors[i].id){
                                    $("#appoint_no").val(data.Seat_no + 1);
                                    $("#d_charges").val(doctors[i].fee);
                                    $("#total").val(doctors[i].fee + 250);
                                    break;
                                }
                            }        

                        }

                        else{
                            $("#form-message").text('no of seats are not available. please select another date.');
                            $("#seat").val("reach maximum");
                            $("#appoint_no").val("");
                            $("#d_charges").val("");
                            $("#total").val("");
                        }
                    }
                });
            }
            else{
                $("#form-message").text("doctor doesn't have a schedule on " + day);
                $("#seat").val("");
                $("#appoint_no").val("");
                $("#d_charges").val("");
                $("#total").val("");
            }
    })
})

function render_details(details) {

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
}

