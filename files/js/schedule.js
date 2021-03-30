$(document).ready(function(){
    $.ajax({
        url: '../../index.php/schedules/get_view',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_table(details);
        }
    })

    $("#search-btn").click(function(){
        var id = $("#id").val();
        var name = $("#name").val();
        var specialization = $("#special").val();

        $.ajax({
            url: '../../index.php/schedules/search',
            data: {id:id,name:name,specialization:specialization},
            type: 'post',
            success:function(data){
                var details = data;
                render_table(details);
            }
        })
    })
})

function render_table(data) {

    function render_header(){
        var header = $(`<tr id=${"head_row"}>`).append(
        $(`<td>`).text("No"),
        $(`<td>`).text("ID"),$(`<td>`).text("Doctor Name"),
        $(`<td>`).text("Specialization"),
        $(`<td>`).text("Date"),$(`<td>`).text("Time"),
        $(`<td>`).text("Update"),
        $(`<td>`).append("Delete"));
        $("table").append(header);
    }

    render_header();

    const no_rows = 10;
    var page = 1;
    var tot_rows = data.length;

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
            var get_details = data[i]['id'];
            var update = "<a href=../schedules/update?id=".concat(get_details,"><button class='tb-btn'>Update</button></a>");
            var dele = "<a href=../schedules/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</button></a>");
            var row = $(`<tr id=${data[i].id}>`).append($(`<td>`).text(i+1),
            $(`<td>`).text(data[i].id),
            $(`<td>`).text(data[i].first_name.concat(" ",data[i].last_name)),
            $(`<td>`).text(data[i].specialization),
            $(`<td>`).text(data[i].date),$(`<td>`).text(data[i].time),
            $(`<td>`).append(update),
            $(`<td>`).append(dele));
            $("table").append(row);
        }
    }

}