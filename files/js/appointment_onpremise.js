var doctors;
var patient_id;
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
        $("#form-message").empty();
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
        $("#form-message").empty();
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

    $("#contact").change(function(){
        var contact = $("#contact").val();
        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();
        $("#contact").removeClass("input-error");
        if(contact_val(contact) == false){valid = false;}

        if(valid == true){
            $.ajax({
                url: '../../index.php/appointment/serach_patient',
                data: {contact:contact},
                type:'post',
                success:function(data){
                    if(data != false){
                        patient_id = data.id;
                        $("#email").val(data.email);
                        $("#f_name").val(data.f_name);
                        $("#l_name").val(data.l_name);
                        $("#birthday").val(data.birthday);
                        $("#address").val(data.address);
                        $("#gender").val(data.gender);
                        
                    }
                }
            })
        }
        else if(valid == false){
            $("#form-message").text('enter valid contact no(EX : 76xxxxxxx)');
            $("#email").val("");
            $("#f_name").val("");
            $("#l_name").val("");
            $("#birthday").val("");
            $("#address").val("");
            $("#gender").val("");
        }
    })

    $("form").submit(function(event){
        event.preventDefault();

        var id=patient_id;
        var fname=$("#f_name").val();
        var lname=$("#l_name").val();
        var birthday=$("#birthday").val();
        var contact=$("#contact").val();
        var email=$("#email").val();
        var address=$("#address").val();
        var gender =$("#gender").val();
        var date=$("#date").val();
        var seatno =$("#appoint_no").val();
        var schedule_id=details[index].id;
        var doctor_id= $("#doctor").val();

        /*var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#f_name","#l_name","#gender","#birthday","#contact","#address","#email"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });
        if(name_val("fname",fname) == false){valid = false;}
        if(name_val("lname",lname) == false){valid = false;}
        if(contact_val(contact) == false){valid = false;}
        if(address_val(address) == false){valid = false;}
        if(email_val(email) == false){valid = false;}
        if(bday_val(birthday) == false){valid = false;}
        console.log(valid);*/

            $.ajax({
                url: '../../index.php/appointment/make_appointment',
                data: {id:id,f_name:fname,l_name:lname,birthday:birthday, contact:contact,email:email,address:address,gender:gender,date:date, seatno: seatno, schedule_id: schedule_id,doctor_id:doctor_id},
                type: 'post',
                success: function (data) {
                    if(data!=false){
                        var id=data;
                        location.href = "../../index.php/appointment/receipt?id=".concat(id) ;
                    }
                    else{
                        $("#form-message").text("Appointment is not Successfull");
                    }
                }
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
                            if(data.CurrentSeat_no==null){
                                status=0; // avaiable and no seat book yet
                            }
                            else if(data.CurrentSeat_no>0 && data.CurrentSeat_no<max){
                                status=1; // available and some of seats are booked
                            }
                            else{
                                status=2; // seat are not available
                            }
                        if(status==0){
                            alert('Seats Available');
                            $("#seat").val(1);
                            var scheduleId= details[index].id;
                            for (var i=0;i<doctors.length;i++){
                                if($("#doctor").val()==doctors[i].id){
                                    $("#appoint_no").val(1);
                                    $("#d_charges").val(doctors[i].fee);
                                    $("#total").val(doctors[i].fee + 250);
                                    $("schedule_id").val(scheduleId);
                                    break;
                                }
                            } 

                        }

                        else if(status==1){
                            alert('Seats available!');
                            $("#seat").val(data.CurrentSeat_no + 1);
                            var scheduleId= details[index].id;
                            for (var i=0;i<doctors.length;i++){
                                if($("#doctor").val()==doctors[i].id){
                                    $("#appoint_no").val(data.CurrentSeat_no + 1);
                                    $("#d_charges").val(doctors[i].fee);
                                    $("#total").val(doctors[i].fee + 250);
                                    $("schedule_id").val(scheduleId);
                                    break;
                                }
                            }        

                        }

                        else{
                            alert('Seats not available. Please select another date.');
                            $("#seat").val("reach maximum");
                            $("#appoint_no").val("");
                            $("#d_charges").val("");
                            $("#total").val("");
                            $("#date").val("");
                        }
                    }
                });
            }
            else{
                $("#form-message").text("!No schedule available schedule on " + day);
                $("#seat").val("");
                $("#appoint_no").val("");
                $("#d_charges").val("");
                $("#total").val("");
                $("#date").val("");
            }
    })
})

function render_details(details) {

    $("table").empty();

    $("table").append($(`<tr id=${"app_day"}>`));
    $("#app_day").append($(`<td>`),
    $(`<td>`).text("Sunday"),$(`<td>`).text("Monday"),
    $(`<td>`).text("Tuesday"),$(`<td>`).text("Wednesday"),
    $(`<td>`).text("Thursday"),$(`<td>`).text("Friday"),
    $(`<td>`).text("Saturday"));

    $("table").append($(`<tr id=${"app_avail"} style=${"background-color:white"}>`));
    $("#app_avail").append($(`<td>`).text("Time"));

    for (var j=0;j<7;j++){
        for(var i=0;i<details.length;i++){
            if(week[j]==details[i].date){
                $("#app_avail").append($(`<td>`).text(details[i].time));
                break;
            }
            else if(i==details.length-1){
                $("#app_avail").append($(`<td style=${"text-align:center"}>`).text("-"));
            }
        }
    }
}

