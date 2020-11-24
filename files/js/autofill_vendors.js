$(document).ready(function(){
    $.ajax({
    url: '../../index.php/autofill/vendors',
    type: 'post',
    success:function(data){

    for (var i = 0; i < data.length; i++) {
        $("#vendors").append(`<option value=${data[i].id}>${data[i].name}</option>`);
        }
    }
    })
})