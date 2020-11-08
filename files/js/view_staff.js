$(document).ready(function(){
    $("#staff").change(function(){
        $.ajax({
            url: '../../index.php/staff/category',
            data: {staff:$("#staff").val()},
            type: 'post',
            success:function(data){

                $("tbody").empty();

                for(var i=0; i<data.length; i++){
                    var name = data[i]['f_name'].concat(' ',data[i]['l_name']);
                    var update = "<a href=../staff/update?id=".concat(data[i].id,"><button class='tb-btn'>Update</a>");
                    var dele = "<a href=../staff/delete?id=".concat(data[i].id,"><button class='tb-btn'>Delete</a>");

                    var row = $(`<tr id=${data[i].id}>`).append($(`<td>`).text(i+1),
                    $(`<td>`).text(data[i].id),$(`<td>`).text(data[i].f_name.concat(" ",data[i].l_name)),
                    $(`<td>`).text(data[i].address),$(`<td>`).text(data[i].contact_no),
                    $(`<td>`).text(data[i].email),
                    $(`<td>`).append(update),
                    $(`<td>`).append(dele));
                    $("tbody").append(row);
                    /**$("id=$[]").append(`<td id=${i}> ${i}`);
                    $("id=$[i]").append(`<td id=${data[i].id}> ${data[i].id}`);
                    $("id=$[i]").append(`<td id=${name})> ${name} `);
                    $("id=$[i]").append(`<td id=${data[i].address}> ${data[i].address}`);
                    $("id=$[i]").append(`<td id=${data[i].contact_no}> ${data[i].contact_no}`);
                    $("id=$[i]").append(`<td id=${data[i].email}> ${data[i].email}`);
                    $("id=$[i]").append(`<td><a href=<?php echo Router::site_url().'/staff/update'? style='color:black'><button type = 't-btn'>Update</a>`);
                    $("id=$[i]").append(`<td><a href=<?php echo Router::site_url().'/staff/delete'? style='color:black'><button type = 't-btn'>Delete</a></td>`);
                    $("id=$[i]").append(`</tr>`);**/
                }
            }
        })
    })
})