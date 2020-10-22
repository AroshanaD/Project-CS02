$(document).ready(function(){
    $("form").submit(function(event){
        event.preventDefault();

        var id = $("#id").val();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var gender = $("#gender").val();
        var birthday = $("#birthday").val();
        var contact = $("#contact").val();
        var address = $("#address").val();
        var email = $("#email").val();
        var password = $("#password").val();
        var repassword = $("#repassword").val();
        var submit = $(".submit-btn").val();

        $("#form-message").load("../validation/register_val.php",{
            id : id,
            fname : fname,
            lname : lname,
            gender : gender,
            birthday : birthday,
            contact : contact,
            address : address,
            email : email,
            password : password,
            repassword : repassword,
            submit : submit
        },function(data){
            console.log(data);
            $.post("register/register_user");
        })
    })
})