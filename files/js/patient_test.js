$(document).ready(function () {
    $.ajax({
        url: '../../index.php/patientTest/get_tests',
        data: {},
        type: 'post',
        success: function (data) {
            var details = data;
            render_table(details);
        }
    })

    $("#search-btn").click(function () {
        $.ajax({
            url: '../../index.php/patientTest/search',
            data: { id: $("#id").val(), name: $("#name").val(), date: $("#date").val(), availability:$("#available").val()},
            type: 'post',
            success: function (data) {
                var details = data;
                render_table(details);
            }
        })
    })
})

function render_table(details) {
    $("table").empty();

    function render_header() {
        var header = $(`<tr id=${"head_row"}>`).append(
            $(`<td>`).text("ID"),
            $(`<td>`).text("Patient Name"),
            $(`<td>`).text("Date"),
            $(`<td>`).text("Time"),
            $(`<td>`).text("Cost"),
            $(`<td>`).text("Availability"),
            $(`<td>`).text("Change Availability"));
        $("table").append(header);
    }

    render_header();

    const no_rows = 10;
    var page = 1;
    var tot_rows = details.length;

    render_page();

    $(".pagination").css("display", "flex");

    $("#next").click(function () {
        if (page * no_rows < tot_rows) {
            page = page + 1;
            render_page();
        }
    });

    $("#previous").click(function () {
        if (page > 1) {
            page = page - 1;
            render_page();
        }
    })

    function render_page() {
        let first_row = (page - 1) * no_rows;
        let last_row = (first_row + no_rows > tot_rows) ? tot_rows : first_row + no_rows;
        $("table").empty();
        render_header();
        for (let i = first_row; i < last_row; i++) {
            let get_details = details[i]['id'];
            let row_id = details[i].id;
            let update = "<a href=../patientTest/update?id=".concat(get_details, "><button class='tb-btn'>Update</button></a>");

            if(details[i].availability == 0){
                var availability = "Not Available";
            }
            else{
                var availability = "Available";
            }

            let row = $(`<tr id=${row_id}>`).append(
                $(`<td>`).text(details[i].id),
                $(`<td>`).text(details[i].patient_name),
                $(`<td>`).text(details[i].date),
                $(`<td>`).text(details[i].time),
                $(`<td>`).text(details[i].cost),
                $(`<td>`).text(availability),
                $(`<td>`).append(update));
            $("table").append(row);
        }
    }

}