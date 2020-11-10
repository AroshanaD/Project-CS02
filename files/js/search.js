$(document).ready(function(){
    $("#search-btn").click(function(){
        $.ajax({
            url: '../../index.php/inventory/search',
            data: {id:$("#id").val(),name:$("#name").val()},
            type: 'get',
            success:function(data){

                $(".reg-table").remove();
                $(".container-t").append(`<table class='reg-table'>`);
                $(".reg-table").append(`<tr>`);
                $("tr").append(`<th>Medicine Id</th>`);
                $("tr").append(`<th>Name</th>`);
                $("tr").append(`<th>Vendor</th>`);
                $("tr").append(`<th>Description </th>`);
                $("tr").append(`<th>Unit Price</th>`);
                $("tr").append(`<th>Quantity</th>`);
                $("tr").append(`<th>Update</th>`);
                $("tr").append(`<th>Delete</th>`);
                $("tr").append(`</tr>`);

                for(var i=0; i<data.length; i++){
                    $(".reg-table").append(`<tr>`);
                    $("tr").append(`<td id=${data[i].id}> ${data[i].id}</td>`);
                    $("tr").append(`<td id=${data[i].name}> ${data[i].name}</td>`);
                    $("tr").append(`<td id=${data[i].vendor}> ${data[i].vendor}</td>`);
                    $("tr").append(`<td id=${data[i].description}> ${data[i].description}</td>`);
                    $("tr").append(`<td id=${data[i].unit_price}> ${data[i].unit_price}</td>`);
                    $("tr").append(`<td id=${data[i].quantity}> ${data[i].quantity}</td>`);
                    $("tr").append(`<td><a href=<?php echo Router::site_url().'/inventory/update'? style='color:black'><button type = 't-btn'>Update</a></td>`);
                    $("tr").append(`<td><a href=<?php echo Router::site_url().'/inventory/delete'? style='color:black'><button type = 't-btn'>Delete</a></td>`);
                    $(".reg-table").append(`</tr>`);
                }
            }
        })
    })
})