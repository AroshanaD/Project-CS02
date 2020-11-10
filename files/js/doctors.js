$(document).ready(function(){
    $("#staff").change(function(){
        $.ajax({
            url: '../../index.php/staff/doctors',
            data: {staff:$("#staff").val()},
            type: 'post',
            success:function(data){
                var details = data;
                render_details(details);
            }
        })
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/staff/search',
            data: {staff:$("#staff").val(),id:$("#id").val(),name:$("#name").val()},
            type: 'post',
            success:function(data){
                render_details(data);
            }
        })
    })
})

function render_details(data){

    $("tbody").empty();
    var category = $("#staff").val();

    for(var i=0; i<data.length; i++){
        var get_details = data[i]['id'].concat("&category=",category);
        var name = data[i]['f_name'].concat(' ',data[i]['l_name']);
        var update = "<a href=../staff/update?id=".concat(get_details,"><button class='tb-btn'>Update</a>");
        var dele = "<a href=../staff/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</a>");

        var row = $(`<tr id=${data[i].id}>`).append($(`<td>`).text(i+1),
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].f_name.concat(" ",data[i].l_name)),
        $(`<td>`).text(data[i].address),$(`<td>`).text(data[i].contact_no),
        $(`<td>`).text(data[i].email),
        $(`<td>`).append(update),
        $(`<td>`).append(dele));
        $("tbody").append(row);
    }

}
