$(document).ready(function() {

    $.ajax({
        url: '../../index.php/Reports/labtest_overview',
        data: {},
        type: 'post',
        success: function(data) {
            $details = data;
            render_details($details);
        }
    })

})

function render_details(data) {
    console.log(data);

    $("#app").append(
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no.of Patients"),
            $(`<td id=${"report-td-2"}>`).append(data['patient_count'])
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total number of Lab Tests"),
            $(`<td id=${"report-td-2"}>`).text(data['test_count'])
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no.of tests for male patients"),
            $(`<td id=${"report-td-2"}>`).append(data['male_test'])
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no.of tests for female patients"),
            $(`<td id=${"report-td-2"}>`).append(data['female_test'])
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total income from Lab Tests"),
            $(`<td id=${"report-td-2"}>`).append(data['tot_income'])
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total number of different Lab Tests"),
            $(`<td id=${"report-td-2"}>`).append(data['diff_test'])
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Most number of Lab Tests"),
            $(`<td id=${"report-td-2"}>`).append(data['most_lab'])
        )
    )
}