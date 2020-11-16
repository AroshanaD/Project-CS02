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

    $("table").empty();
    var header = $(`<tr style=${"background-color:lightblue"}>`).append($(`<td>`).text("No"),
    $(`<td>`).text("ID"),$(`<td>`).text("Name"),
    $(`<td>`).text("Specialization"),$(`<td>`).text("Charges"),
    $(`<td>`).text("Address"),$(`<td>`).text("Email"),
    $(`<td>`).text("Contact"),
    $(`<td>`).append("Update"),
    $(`<td>`).append("Delete"));
    $("table").append(header);


    for(var i=0; i<details.length; i++){
        var get_details = details[i]['id'];
        var update = "<a href=../doctors/update?id=".concat(get_details,"><button class='tb-btn'>Update</a>");
        var dele = "<a href=../doctors/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</a>");

        var row = $(`<tr>`).append($(`<td>`).text(i+1),
        $(`<td>`).text(details[i].id),$(`<td>`).text(details[i].f_name.concat(" ",details[i].l_name)),
        $(`<td>`).text(details[i].specialization),$(`<td>`).text(details[i].fee),
        $(`<td>`).text(details[i].address),$(`<td>`).text(details[i].email),
        $(`<td>`).text(details[i].contact_no),
        $(`<td>`).append(update),
        $(`<td>`).append(dele));
        $("table").append(row);
    }

}
