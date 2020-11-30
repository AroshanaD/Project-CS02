$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();

        var password = $("#password").val();
        var repassword = $("#rpassword").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        $("#password").removeClass("input-error");
        $("#rpassword").removeClass("input-error");

        if(password_val(password) == false){valid = false;}
        if(password != repassword){
            $("#password").addClass("input-error");
            $("#rpassword").addClass("input-error");
            $("<div class='error-message'>Passwords Mismatch</div>").insertAfter("#rpassword_f");
            valid = false;
        }

        if(valid == true){
            $(this).unbind('submit').submit();
        }
    })
})