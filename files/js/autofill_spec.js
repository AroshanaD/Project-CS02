$(document).ready(function(){
    $.ajax({
    url: '../../index.php/autofill/specializations',
    type: 'post',
    success:function(data){

    for (var i = 0; i < data.length; i++) {
        $("#search_spec").append(`<option value=${data[i].id}>${data[i].name}</option>`);
        }
    }
    })
})