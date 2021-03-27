$(document).ready(function(){

    $("form").submit(function(event){
        event.preventDefault();

        $("#id").focus(function(){
            $("#form-message").empty();
            $("#id").removeClass("input-error");
            $("#password").removeClass("input-error");
        })
        $("#password").focus(function(){
            $("#form-message").empty();
            $("#id").removeClass("input-error");
            $("#password").removeClass("input-error");
        })
        var id = $("#id").val();
        var password = $("#password").val();

        $.ajax({
            url: '../../index.php/user/verify_login',
            data: {id:id, password:password},
            type: 'post',
            success:function(data){

                if(data == 0){
                    location.href = "../../index.php/user/dashboard";
                }
                else{
                    if(data == 1){
                        $("#password").val("");
                        alert("Incorrect Password");
                        //$("#form-message").text("Incorrect Password");
                        $("#password").addClass("input-error");
                    }
                    else{
                        $("#id").val("");
                        $("#password").val("");
                        alert("Incorrect User ID")
                        //$("#form-message").text("Incorrect User ID");
                        $("#id").addClass("input-error");
                    }
                }

            }
        })
    })

})