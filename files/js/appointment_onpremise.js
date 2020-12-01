$(document).ready(function(){
    $(document).ready(function(){
        var specialization = null;
        $.ajax({
        url: '../../index.php/appointment/doctors',
        data:{specialization: specialization},
        type: 'post',
        success:function(data){
    
            for (var i = 0; i < data.length; i++) {
                $("#doctor").append(`<option value=${data[i].id}>${data[i].f_name.concat(' ',data[i].l_name)}</option>`);
            }
        }
        })
    })
})
