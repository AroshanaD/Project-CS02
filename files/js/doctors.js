$(document).ready(function(){
    $("#search_spec").change(function(){
        $.ajax({
            url: '../../index.php/doctors/doctors',
            data: {specialization:$("#search_spec").val()},
            type: 'post',
            success:function(data){
                var details = data;
                render_details(details);
            }
        })
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/doctors/search',
            data: {id:$("#id").val(),name:$("#name").val()},
            type: 'post',
            success:function(data){
                var details = data;
                render_details(details);
            }
        })
    })
})

function render_details(details){

    $("tbody").empty();

    for(var i=0; i<details.length; i++){
        var get_details = details[i]['id'];
        var update = "<a href=../doctors/update?id=".concat(get_details,"><button class='tb-btn'>Update</a>");
        var dele = "<a href=../doctors/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</a>");

        var row = $(`<tr id=${"doctor-table"}>`).append($(`<td>`).text(i+1),
        $(`<td>`).text(details[i].id),$(`<td>`).text(details[i].f_name.concat(" ",details[i].l_name)),
        $(`<td>`).text(details[i].specialization),$(`<td>`).text(details[i].fee),
        $(`<td>`).text(details[i].address),$(`<td>`).text(details[i].email),
        $(`<td>`).text(details[i].contact_no),
        $(`<td>`).append(update),
        $(`<td>`).append(dele));
        $("tbody").append(row);
    }

}
