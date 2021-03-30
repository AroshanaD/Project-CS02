$(document).ready(function(){

    $("#finish").click(function(){
        location.href = '/project-cs02/index.php/patient_Appointment/patient_appointmentView'
    })

    $("#invoice").click(function(){
        $.ajax({
            url: '../../index.php/appointment/invoice',
            data: {},
            type:'post',
            success:function(data){
                render_bill(data);
                $("#print").click(function(){
                    window.print();
                })
            }
        })
    })
        

    function render_bill(data) {
        let current = new Date();
        let cDate = current.getFullYear() + '-' + (current.getMonth() + 1) + '-' + current.getDate();
        let cTime = current.getHours() + ":" + current.getMinutes() + ":" + current.getSeconds();
        let dateTime = cDate + ' ' + cTime;
        $(".form").remove();
        $(".container-2").css("grid-template-areas", "'nav nav nav' 'sidebar report report' 'sidebar report report' 'footer footer footer'")
        $(".container-2").append(`<div class=${"report"}>`);
        $(".report").append(`<div class=${"report-paper"} style=${"height:500px"}>`);
        $(".report-paper").append(`<div class=${"content"} style=${"height:400px"}>`);
        $(".content").append($(`<div>`).text("MedCaid Hospital"));
        $(".content").append($(`<div style=${"text-align:right"}>`).text("+94 (0)11 2140 010"));
        $(".content").append($(`<div style=${"text-align:right"}>`).text("+94 (0)11 2140 050"));
        $(".content").append($(`<div style=${"text-align:right"}>`).text("contactus@medcaid.com"));
        $(".content").append($(`</br>`));
        $(".content").append($(`<div class=${"heading"}>`).text("Bill Invoice"));
        $(".content").append($(`<div style=${"text-align:right"}>`).text(dateTime));
        $(".content").append($(`</br>`));
        $(".content").append($(`<table class=${"report-tb"}>`));
        $(".report-tb").append($(`<tr style=${"background-color:white"}>`).append($(`<td>`).text("Patient name"),$(`<td>`).text(data.f_name.concat(" ",data.l_name))));
        $(".report-tb").append($(`<tr style=${"background-color:white"}>`).append($(`<td>`).text("Contact no"),$(`<td>`).text(data.contact_no)));
        $(".report-tb").append($(`<tr style=${"background-color:white"}>`).append($(`<td>`).text("Apoointment no"),$(`<td>`).text(data.Seat_no)));
        $(".report-tb").append($(`<tr style=${"background-color:white"}>`).append($(`<td>`).text("Doctor name"),$(`<td>`).text(data.doctor_fname.concat(" ",data.doctor_lname))));
        $(".report-tb").append($(`<tr style=${"background-color:white"}>`).append($(`<td>`).text("Specilization"),$(`<td>`).text(data.specialization)));
        $(".report-tb").append($(`<tr style=${"background-color:white"}>`).append($(`<td>`).text("fee"),$(`<td>`).text(data.fee)));
        $(".content").append($(`</br>`));
        $(".content").append($(`<table class=${"report-tb"} id=${"app"}>`));

        $(".report").append($(`<div style=${"width:100%;text-align:center;"}>`).append($(`<button class="btn" id=${"print"}>`).text("Print")));

    }

})