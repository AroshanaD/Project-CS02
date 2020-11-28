$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();

        var name = $("#doctor").val();
        var specialization = $("#search_spec").val()
        var date = $("#date").val();


       $.ajax({
            url: '../../index.php/appointment/get_doctors',
            data: {name:name,specialization:specialization,date:date},
            type: 'post',
            success:function(data){
                var details = data;
                render_doctors(details);
            }
       })
    })
})

function render_doctors(details){
    $("#doctor_list").empty();
    $("#doctor_list").append(`<div class=${'title'}>`.concat('Available Doctors'));

    for(var i=0; i <details.length; i++){

        var func = "render_schedule('".concat(details[i]['id'],"')");

        var name = 'Dr.'.concat(' ',details[i]['f_name'],' ',details[i]['l_name']);
        $("#doctor_list").append(`<div id=${'list_item'}>`.concat(name,`<button id=${details[i].id} class=${'button-normal'} onclick=${func}>`.concat('Select')));
    }
}

function render_schedule(id){
    console.log(id);

}