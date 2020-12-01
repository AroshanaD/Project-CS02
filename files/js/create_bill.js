$(document).ready(function(){
    $.ajax({
        url: '../../index.php/inventory/get_medicine',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_table(details);
            $("#selec-tb").empty();

            var header = $(`<tr id=${"head_row"}>`).append(
            $(`<td>`).text("ID"),
            $(`<td>`).text("Name"),
            $(`<td>`).text("Vendor"),
            $(`<td>`).text("Quantity"),
            $(`<td>`).text("Unit Price"),
            $(`<td>`).text("Cost"),
            $(`<td>`).text("Note"),
            $(`<td>`).append("Add"),
            $(`<td>`).append("Remove"))
            $("#selec-tb").append(header);
        }
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/inventory/search_medicine',
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
    $("#full-tb").empty();

    var header = $(`<tr id=${"head_row"}>`).append(
    $(`<td>`).text("ID"),
    $(`<td>`).text("Name"),
    $(`<td>`).text("Vendor"),
    $(`<td>`).text("Available Quantity"),
    $(`<td>`).text("Add Quantity"),
    $(`<td>`).append("Add"))
    $("#full-tb").append(header);

    for(var i=0; i<data.length; i++){    
        var add = "<button class='tb-btn'>Add</button>";
        var quantity = "<input style='width:50px' type'number' name='quantity'>"
        var row = $(`<tr id=${data[i].id}>`).append(
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].name),
        $(`<td id=${data[i].v_id}>`).text(data[i].v_name),
        $(`<td>`).text(data[i].quantity),
        $(`<td>`).append(quantity),
        $(`<td>`).append(add));
        $("#full-tb").append(row);
    }
}