$(document).ready(function() {

    $.ajax({
        url: '../../index.php/Reports/inventory_overview',
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
        )
    )
}