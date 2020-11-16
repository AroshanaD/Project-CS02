$(document).ready(function(){
    $.ajax({
        url: '../../index.php/inventory/get_view',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_table(details);
        }
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/inventory/search',
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
    $("table").empty();

    var header = $(`<tr style=${"background-color:lightblue"}>`).append($(`<td>`).text("No"),
    $(`<td>`).text("ID"),$(`<td>`).text("Name"),
    $(`<td>`).text("Vendor"),$(`<td>`).text("Description"),
    $(`<td>`).text("Unit Price"),$(`<td>`).text("Quantity"),
    $(`<td>`).append("Update"),
    $(`<td>`).append("Delete"));
    $("table").append(header);

    for(var i=0; i<data.length; i++){
        var get_details = data[i]['id'];
        var update = "<a href=../inventory/update?id=".concat(get_details,"><button class='tb-btn'>Update</a>");
        var dele = "<a href=../inventory/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</a>");
        var row = $(`<tr id=${"inventory-table"}>`).append($(`<td>`).text(i+1),
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].name),
        $(`<td>`).text(data[i].vendor),$(`<td>`).text(data[i].description),
        $(`<td>`).text(data[i].unit_price),$(`<td>`).text(data[i].quantity),
        $(`<td>`).append(update),
        $(`<td>`).append(dele));
        $("table").append(row);
    }
}