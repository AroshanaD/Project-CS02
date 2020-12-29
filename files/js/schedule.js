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

function render_table(data){
    $("table").empty();

    var header = $(`<tr id=${"head_row"}>`).append($(`<td>`),
    $(`<td>`).text("No"),
    $(`<td>`).text("ID"),$(`<td>`).text("Doctor Name"),
    $(`<td>`).text("Specialization"),
    $(`<td>`).text("Date"),$(`<td>`).text("Time"),
    $(`<td>`).text("Update"),
    $(`<td>`).append("Delete"));
    $("table").append(header);


    for(var i=0; i<data.length; i++){

        var row_id = data[i]['id'].toString();
        //console.log(row_id);
        var row_id = row_id.concat("')");
        var func = "selectfunc(".concat(i+1,",","'",row_id);

        var get_details = data[i]['id'];
        var update = "<a href=../schedules/update?id=".concat(get_details,"><button class='tb-btn'>Update</button></a>");
        var dele = "<a href=../schedules/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</button></a>");
        var row = $(`<tr id=${data[i].id}>`).append($(`<td>`).append($(`<input type=${"checkbox"} id=${i+1} value=1 onchange=${func}> `)),
        $(`<td>`).text(i+1),
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].first_name.concat(" ",data[i].last_name)),
        $(`<td>`).text(data[i].specialization),
        $(`<td>`).text(data[i].date),$(`<td>`).text(data[i].time),
        $(`<td>`).append(update),
        $(`<td>`).append(dele));
        $("table").append(row);
    }
}

function selectfunc(i,row_id){
    console.log(row_id);
    var idd = "#".concat(i);
    var row_id = "#".concat(row_id);
    console.log(row_id);
    if($(idd).is(':checked')){
        console.log($(idd).val());
        $(row_id).css("background-color","red");
    }
    else{
        if(i%2==0){
            $(row_id).css("background-color","#69f0ae");
        }
        else{
            $(row_id).css("background-color","white");
        }
    }
    
}