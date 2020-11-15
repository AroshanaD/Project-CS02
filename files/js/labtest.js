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
            data: {id:$("#id").val(),name:$("#name").val()},
            type: 'post',
            success:function(data){
                var details = data;
                render_table(details);
            }
        })
    })
})

function render_table(data){
    $("tbody").empty();
    for(var i=0; i<data.length; i++){
        var get_details = data[i]['id'];
        var update = "<a href=../labtest/update?id=".concat(get_details,"><button class='tb-btn'>Update</a>");
        var dele = "<a href=../labtest/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</a>");
        var row = $(`<tr id=${"test-table"}>`).append($(`<td>`).text(i+1),
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].name),
        $(`<td>`).text(data[i].description),$(`<td>`).text(data[i].unit_cost),
        $(`<td>`).append(update),
        $(`<td>`).append(dele));
        $("tbody").append(row);
    }
}