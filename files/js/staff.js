$(document).ready(function(){
    $("#staff").change(function(){
        $.ajax({
            url: '../../index.php/staff/category',
            data: {staff:$("#staff").val()},
            type: 'post',
            success:function(data){
                var details = data;
                render_table(details);
            }
        })
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/staff/search',
            data: {staff:$("#staff").val(),id:$("#id").val(),name:$("#name").val()},
            type: 'post',
            success:function(data){
                var details = data;
                render_table(details);
            }
        })
    })

})

function render_table(data) {
    var category = $("#staff").val();

    function render_header(){

        var header = $(`<tr id=${"head_row"}>`).append(
        $(`<td>`).text("No"),
        $(`<td>`).text("ID"),$(`<td>`).text("Name"),
        $(`<td>`).text("Address"),$(`<td>`).text("Contact"),
        $(`<td>`).text("Email"),
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
            var get_details = data[i]['id'].concat("&category=",category);
            var name = data[i]['f_name'].concat(' ',data[i]['l_name']);
            var update = "<a href=../staff/update?id=".concat(get_details,"><button class='tb-btn'>Update</button></a>");
            var dele = "<a href=../staff/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</button></a>");
        
            var row = $(`<tr id=${data[i].id}>`).append(
            $(`<td>`).text(i+1),
            $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].f_name.concat(" ",data[i].l_name)),
            $(`<td>`).text(data[i].address),$(`<td>`).text(data[i].contact_no),
            $(`<td>`).text(data[i].email),
            $(`<td>`).append(update),
            $(`<td>`).append(dele));
            $("table").append(row);
        }
    }

}