$(document).ready(function(){
    $("#staff").change(function(){
        $.ajax({
            url: '../../index.php/staff/category',
            data: {staff:$("#staff").val()},
            type: 'post',
            success:function(data){

                $("tbody").empty();

                for(var i=0; i<data.length; i++){
                    $("tbody").append(`<tr id=${i}>`);
                    $("id=$['i']").append(`<td id=${i}> ${i}</td>`);
                    $("id=$[i]").append(`<td id=${data[i].id}> ${data[i].id}</td>`);
                    var name = data[i]['f_name'].concat(' ',data[i]['l_name']);
                    $("id=$[i]").append(`<td id=${name})> ${name} </td>`);
                    $("id=$[i]").append(`<td id=${data[i].address}> ${data[i].address}</td>`);
                    $("id=$[i]").append(`<td id=${data[i].contact_no}> ${data[i].contact_no}</td>`);
                    $("id=$[i]").append(`<td id=${data[i].email}> ${data[i].email}</td>`);
                    $("id=$[i]").append(`<td><a href=<?php echo Router::site_url().'/staff/update'? style='color:black'><button type = 't-btn'>Update</a></td>`);
                    $("id=$[i]").append(`<td><a href=<?php echo Router::site_url().'/staff/delete'? style='color:black'><button type = 't-btn'>Delete</a></td>`);
                    $("id=$[i]").append(`</tr>`);
                }
            }
        })
    })
})