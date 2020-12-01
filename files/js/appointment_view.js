$(document).ready(function(){
    $.ajax({
        url: '../../index.php/Patient_Appointment/get_viewRecept',
        data: {},
        type: 'post',
        success:function(data){
            var details = data;
            render_table(details);
        }
    })

    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/Patient_Appointment/search',
            data: {id:$("#id").val(),date:$("#date").val()},
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
    $(`<td>`).text("Appointment Id"),$(`<td>`).text("Appointment date"),
    $(`<td>`).text("Appointment time"),$(`<td>`).text("Patient name"),
    $(`<td>`).text("Patient age"),$(`<td>`).text("Patient contact"),
    $(`<td>`).text("Patient Id"),
    $(`<td>`).append("View"));
    $("table").append(header);


    var View = "<a href=../patient_Appointment/view_Appoint?><button class='tb-btn'>View</button></a>";
    var header= $(`<tr>`).append($(`<td>`),
    $(`<td>`).text(1),
    $(`<td>`).text(1),$(`<td>`).text('2020-10-23'),
    $(`<td>`).text('10.00 a.m'),$(`<td>`).text('nimal perera'),
    $(`<td>`).text('46'),$(`<td>`).text('764578123'),
    $(`<td>`).text(5),
    $(`<td>`).append(View));
    $("table").append(header);

    /*for(var i=0; i<2; i++){

        
        var row_id = data[i]['id'].toString();
        //console.log(row_id);
        var row_id = row_id.concat("')");
        var func = "selectfunc(".concat(i+1,",","'",row_id);

        var get_details = data[i]['id'];
        var update = "<a href=../patientAppointment/view_Appoint?id=".concat(get_details,"><button class='tb-btn'>View</button></a>");
        var row = $(`<tr id=${data[i].id}>`).append($(`<td>`).append($(`<input type=${"checkbox"} id=${i+1} value=1 onchange=${func}> `)),
        $(`<td>`).text(i+1),
        $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].date),
        $(`<td>`).text(data[i].time),$(`<td>`).text(data[i].patient_name),
        $(`<td>`).text(data[i].patient_age),$(`<td>`).text(data[i].patient_contact),
        $(`<td>`).text(data[i].patient_id),
        $(`<td>`).append(view));
        $("table").append(row);
    }*/
}

function selectfunc(i,row_id){
    //console.log(row_id);
    var idd = "#".concat(i);
    var row_id = "#".concat(row_id);
    //console.log(row_id);
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