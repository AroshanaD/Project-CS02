var doctors;
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
        $.ajax({
            url: '../../index.php/appointment/doctor_schedule',
            data: { id: doctor_id },
            type: 'post',

            success: function (data) {
                render_details(data);
            }
        })
    })
})

function render_details(details) {

    $("table").empty();

    var head = $(`<tr id=${"head_row"}>`).append(
        $(`<td>`).text("Weekday"),
        $(`<td>`).text("Time"));
    $("table").append(head);


    for (var j = 0; j < 7; j++) {
        for (var i = 0; i < details.length; i++) {
            if (week[j] == details[i].date) {
                var row = $(`<tr>`).append(
                    $(`<td>`).text(details[i].date),
                    $(`<td>`).text(details[i].time));
                $("table").append(row);
                break;
            }
        }
    }
}