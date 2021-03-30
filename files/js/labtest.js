$(document).ready(function(){
    $.ajax({
        url: '../../index.php/labtest/get_view',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_table(details);
        }
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/labtest/search',
            data: {name:$("#name").val()},
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
        $(`<td>`).text("ID"),$(`<td>`).text("Name"),
        $(`<td>`).text("Description"),$(`<td>`).text("Unit Cost"),
        $(`<td>`).append("Update"),
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
            var row_id = data[i]['id'].toString();
        //console.log(row_id);
            var row_id = row_id.concat("')");

            var get_details = data[i]['id'];
            var update = "<a href=../labtest/update?id=".concat(get_details,"><button class='tb-btn'>Update</button></a>");
            var dele = "<a href=../labtest/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</button></a>");
            var row = $(`<tr id=${data[i].id}>`).append(
            $(`<td>`).text(i+1),
            $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].name),
            $(`<td>`).text(data[i].description),$(`<td>`).text(data[i].unit_cost),
            $(`<td>`).append(update),
            $(`<td>`).append(dele));
            $("table").append(row);
        }
    }

}