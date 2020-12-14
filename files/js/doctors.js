$(document).ready(function () {

    $.ajax({
        url: '../../index.php/doctors/category',
        data: { specialization: "" },
        type: 'post',
        success: function (data) {
            var details = data;
            render_details(details);
        }
    })

    $("#search_spec").change(function () {
        $.ajax({
            url: '../../index.php/doctors/category',
            data: { specialization: $("#search_spec").val() },
            type: 'post',
            success: function (data) {
                var details = data;
                render_details(details);
            }
        })
    })

    $("#search-btn").click(function () {
        $.ajax({
            url: '../../index.php/doctors/search',
            data: { $specialization: $("#search_spec"), id: $("#id").val(), name: $("#name").val() },
            type: 'post',
            success: function (data) {
                var details = data;
                render_details(details);
            }
        })
    })
})

function render_details(details) {

    function render_header() {
        $("table").empty();
        var header = $(`<tr id=${"head_row"}>`).append(
            $(`<th>`).text("ID"),
            $(`<th>`).text("Name"),
            $(`<th>`).text("Specialization"),
            $(`<th>`).text("Charges"),
            $(`<th>`).append("Update"),
            $(`<th>`).append("Delete"));
        $("table").append(header);
    }

    render_header();

    const no_rows = 3;
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
            let update = "<a href=../doctors/update?id=".concat(get_details, "><button class='tb-btn'>Update</button></a>");
            let dele = "<a href=../doctors/delete?id=".concat(get_details, "><button class='tb-btn'>Delete</button></a>");

            let row_id = details[i].id;

            let row = $(`<tr id=${row_id}>`).append(
                $(`<td>`).text(details[i].id),
                $(`<td>`).text(details[i].f_name.concat(" ", details[i].l_name)),
                $(`<td>`).text(details[i].specialization),
                $(`<td>`).text(details[i].fee),
                $(`<td>`).append(update),
                $(`<td>`).append(dele));
            $("table").append(row);
        }
    }

}