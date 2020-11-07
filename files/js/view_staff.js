$(document).ready(function(){
    $("#category").change(function(){
        $.ajax({
            url: '../../index.php/staff/category',
            data: {category:$("category").val()},
            type: 'get',
            success:function(data){

                for(var i=0; i<data.length; i++){
                    $(".reg-table").append(`<tr>`);
                    $("tr").append(`<td id=${data[i].id}> ${data[i].id}</td>`);
                    $("tr").append(`<td id=${data[i].f_name}> ${data[i].f_name}</td>`);
                    $("tr").append(`<td id=${data[i].l_name}> ${data[i].l_name}</td>`);
                    $("tr").append(`<td id=${data[i].address}> ${data[i].address}</td>`);
                    $("tr").append(`<td id=${data[i].contact_no}> ${data[i].contact_no}</td>`);
                    $("tr").append(`<td id=${data[i].email}> ${data[i].email}</td>`);
                    $("tr").append(`<td><a href=<?php echo Router::site_url().'/staff/update'? style='color:black'><button type = 't-btn'>Update</a></td>`);
                    $("tr").append(`<td><a href=<?php echo Router::site_url().'/staff/delete'? style='color:black'><button type = 't-btn'>Delete</a></td>`);
                    $(".reg-table").append(`</tr>`);
                }
            }
        })
    })
})