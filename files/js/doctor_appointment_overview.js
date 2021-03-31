$(document).ready(function(){

    $.ajax({
        url: '../../index.php/Reports/doctor_appointment_overview',
        data: {},
        type: 'post',
        success:function(data){
            render_data(data);
        }
    })

    $("#print").click(function(){
        window.print();
    })
    $("#back").click(function(){
        location.href = '/project-cs02/index.php/user/dashboard';
    })

    function render_data(data){
        $("#app").append(
            $(`<tr id=${"report-tr"} >`).append(
                $(`<td id=${"report-td-1"}>`).append("Total no.of appointments"),
                $(`<td id=${"report-td-2"}>`).append(data['tot_apps'])
            ),
            $(`<tr id=${"report-tr"} >`).append(
                $(`<td id=${"report-td-1"}>`).append("Total no.of sessions with appointments"),
                $(`<td id=${"report-td-2"}>`).append(data['tot_sessions'])
            ),
            $(`<tr id=${"report-tr"} >`).append(
                $(`<td id=${"report-td-1"}>`).append("Total no.of online appointments"),
                $(`<td id=${"report-td-2"}>`).append(data['online_app'])
            ),
            $(`<tr id=${"report-tr"} >`).append(
                $(`<td id=${"report-td-1"}>`).append("Total income from appointments"),
                $(`<td id=${"report-td-2"}>`).append(data['tot_income'])
            ),
            $(`<tr id=${"report-tr"} >`).append(
                $(`<td id=${"report-td-1"}>`).append("Day with most no.of appointments"),
                $(`<td id=${"report-td-2"}>`).append(data['most_day'])
            ),
            $(`<tr id=${"report-tr"} >`).append(
                $(`<td id=${"report-td-1"}>`).append("Most no.of appointments in a day"),
                $(`<td id=${"report-td-2"}>`).append(data['most_day_apps'])
            ),
            $(`<tr id=${"report-tr"} >`).append(
                $(`<td id=${"report-td-1"}>`).append("Total no.of appointments for male patients"),
                $(`<td id=${"report-td-2"}>`).append(data['male_apps'])
            ),
            $(`<tr id=${"report-tr"} >`).append(
                $(`<td id=${"report-td-1"}>`).append("Total no.of appointments for female patients"),
                $(`<td id=${"report-td-2"}>`).append(data['female_apps'])
            ),
        )

        var header = $(`<tr id=${"head_row"}>`).append(
            $(`<th>`).text("Date"),
            $(`<th>`).text("# Appointments"),
            $(`<th>`).append("Total Income"));
        $("#day").append(header);

        var day_data = data['day_overview'];
        console.log(day_data);
        day_data.forEach(details => {
            var row = $(`<tr>`).append(
                $(`<td>`).text(details.Date),
                $(`<td>`).text(details.appointments),
                $(`<td>`).text(details.income));
            $("#day").append(row);
        });
    }

})