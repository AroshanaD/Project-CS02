$(document).ready(function(){
    $.ajax({
        url: '../../index.php/inventory/get_vendor',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_table(details);
        }
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/inventory/search_vendor',
            data: {name:$("#name").val()},
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
    $(`<td>`).text("ID"),$(`<td>`).text("Name"),
    $(`<td>`).text("Address"),$(`<td>`).text("Contact"),
    $(`<td>`).text("Email"),
    $(`<td>`).append("Update"),
    $(`<td>`).append("Delete"));
    $("table").append(header);

    for(var i=0; i<data.length; i++){
        var get_details = data[i]['id'];
        var update = "<a href=../inventory/update_vendor?id=".concat(get_details,"><button class='tb-btn'>Update</button></a>");
        var dele = "<a href=../inventory/delete_vendor?id=".concat(get_details,"><button class='tb-btn'>Delete</button></a>");

        var row_id = data[i]['id'];
        var row_id = row_id.concat("')");
        var func = "selectfunc(".concat(i+1,",","'",row_id);
        
        var row = $(`<tr id=${data[i].id}>`).append($(`<td>`).append($(`<input type=${"checkbox"} id=${i+1} value=1 onchange=${func}> `)),
        $(`<td>`).text(i+1),
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].name),
        $(`<td>`).text(data[i].address),$(`<td>`).text(data[i].contact),
        $(`<td>`).text(data[i].email),
        $(`<td>`).append(update),
        $(`<td>`).append(dele));
        $("table").append(row);
    }
}

function selectfunc(i,row_id){
    //console.log(row_id);
    var idd = "#".concat(i);
    var row_id = "#".concat(row_id);
    //console.log(row_id);
    if($(idd).is(':checked')){
        //console.log($(idd).val());
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