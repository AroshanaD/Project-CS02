$(document).ready(function(){
    $.ajax({
        url: '../../index.php/inventory/get_medicine',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_table(details);
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
    $("table").empty();

    var header = $(`<tr id=${"head_row"}>`).append($(`<td>`),
    $(`<td>`).text("No"),
    $(`<td>`).text("ID"),$(`<td>`).text("Name"),
    $(`<td>`).text("Vendor"),$(`<td>`).text("Description"),
    $(`<td>`).text("Unit Price"),$(`<td>`).text("Quantity"),
    $(`<td>`).append("Update"),
    $(`<td>`).append("Delete"));
    $("table").append(header);

    for(var i=0; i<data.length; i++){
        var get_details = data[i]['id'];
        var update = "<a href=../inventory/update?update=medicine&id=".concat(get_details,"><button class='tb-btn'>Update</button></a>");
        var dele = "<a href=../inventory/delete?delete=medicine&id=".concat(get_details,"><button class='tb-btn'>Delete</button></a>");

        var row_id = data[i]['id'];
        var row_id = (row_id.toString()).concat("')");
        var func = "selectfunc(".concat(i+1,",","'",row_id);
        
        var row = $(`<tr id=${data[i].id}>`).append($(`<td>`).append($(`<input type=${"checkbox"} id=${i+1} value=1 onchange=${func}> `)),
        $(`<td>`).text(i+1),
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].name),
        $(`<td id=${data[i].v_id}>`).text(data[i].v_name),$(`<td>`).text(data[i].description),
        $(`<td>`).text(data[i].unit_price),$(`<td>`).text(data[i].quantity),
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