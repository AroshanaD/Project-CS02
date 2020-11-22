$(document).ready(function(){
    
    $("form").submit(function(event){
        event.preventDefault();

        var name = $("#name").val();
        var description = $("#description").val();
        var cost = $("#cost").val();
        var submit = $(".submit-btn").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#name","#description","#cost"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if(text_val("name",name) == false){valid = false;}
        if(text_val("description",description) == false){valid = false;}

        //console.log(id);

        if(valid == true){
            $(this).unbind('submit').submit();
        }
    })
})