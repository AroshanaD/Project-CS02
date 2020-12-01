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
        $.ajax({
            url: '../../index.php/schedules/search',
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

    var header = $(`<tr id=${"head_row"}>`).append($(`<td>`),
    $(`<td>`).text("No"),
    $(`<td>`).text("ID"),$(`<td>`).text("Doctor"),
    $(`<td>`).text("Date"),$(`<td>`).text("Time"),
    $(`<td>`).text("Update"),
    $(`<td>`).append("Delete"));
    $("table").append(header);

    var Update= "<a href=../schedules/update><button class='tb-btn'>Update</button></a>";
    var Del= "<a href=../schedules/delete><button class='tb-btn'>Delete</button></a>";
    var header = $(`<tr>`).append($(`<td>`),
    $(`<td>`).text(1),
    $(`<td>`).text(1),$(`<td>`).text("Nimal perera"),
    $(`<td>`).text("2020-10-23"),$(`<td>`).text("10:00"),
    $(`<td>`).append(Update),
    $(`<td>`).append(Del));
    $("table").append(header);


    /*for(var i=0; i<data.length; i++){

        var row_id = toString(data[i]['id']);
        var row_id = row_id.concat("')");
        var func = "selectfunc(".concat(i+1,",","'",row_id);

        var get_details = data[i]['id'];
        var update = "<a href=../labtest/update?id=".concat(get_details,"><button class='tb-btn'>Update</button></a>");
        var dele = "<a href=../labtest/delete?id=".concat(get_details,"><button class='tb-btn'>Delete</button></a>");
        var row = $(`<tr id=${data[i].id}>`).append($(`<td>`).append($(`<input type=${"checkbox"} id=${i+1} value=1 onchange=${func}> `)),
        $(`<td>`).text(i+1),
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].name),
        $(`<td>`).text(data[i].description),$(`<td>`).text(data[i].unit_cost),
        $(`<td>`).append(update),
        $(`<td>`).append(dele));
        $("tbody").append(row);
    }*/
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