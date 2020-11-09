$(document).ready(function(){
    $.ajax({
    url: '../autofill/specializations',
    type: 'post',
    success:function(data){

    for (var i = 0; i < data.length; i++) {
        $("#search_spec").append(`<option value=${data[i].name}>${data[i].name}</option>`);
        }
    }
    })
})