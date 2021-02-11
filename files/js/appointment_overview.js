$(document).ready(function(){

    $.ajax({
        url: '../../index.php/Reports/appointment_overview',
        data: {},
        type: 'post',
        success:function(data){
            
        }
    })

    $("#app").append(
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no.of appointments"),
            $(`<td id=${"report-td-2"}>`).append("672538")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no.of doctors with appointments"),
            $(`<td id=${"report-td-2"}>`).append("100")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no.of online appointments"),
            $(`<td id=${"report-td-2"}>`).append("372538")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total income from appointments"),
            $(`<td id=${"report-td-2"}>`).append("972538000")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Day with most no.of appointments"),
            $(`<td id=${"report-td-2"}>`).append("06/03")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Most no.of appointments in a day"),
            $(`<td id=${"report-td-2"}>`).append("72538")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Doctor with most no.of appointments"),
            $(`<td id=${"report-td-2"}>`).append("Dr. K. Seevali")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Most no.of appointments for a doctor"),
            $(`<td id=${"report-td-2"}>`).append("938")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Category with most no.of appointments"),
            $(`<td id=${"report-td-2"}>`).append("Cardiologist")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Most no.of appointments for a category"),
            $(`<td id=${"report-td-2"}>`).append("2538")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no.of appointments for male patients"),
            $(`<td id=${"report-td-2"}>`).append("342538")
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no.of appointments for female patients"),
            $(`<td id=${"report-td-2"}>`).append("292538")
        ),
    )

})