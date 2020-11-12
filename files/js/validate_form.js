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

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#id","#fname","#lname","#gender","#birthday",
                            "#contact","#address","#email","#password",
                            "#repassword"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if(id_val(id) == false){valid = false;}
        if(name_val("fname",fname) == false){valid = false;}
        if(name_val("lname",lname) == false){valid = false;}
        if(contact_val(contact) == false){valid = false;}
        if(address_val(address) == false){valid = false;}
        if(email_val(email) == false){valid = false;}
        if(password_val(password) == false){valid = false;}
        if(bday_val(birthday) == false){valid = false;}

        if(password != repassword){
            $("#password").addClass("input-error");
            $("#repassword").addClass("input-error");
            $("<div class='error-message'>Passwords Mismatch</div>").insertAfter("#rpassword_f");
            valid = false;
        }

        console.log(valid);

        if(valid == true){
            $.ajax({
                url: '../index.php/register/validate',
                data: {id : id,
                    fname : fname,
                    lname : lname,
                    gender : gender,
                    birthday : birthday,
                    contact : contact,
                    address : address,
                    email : email,
                    password : password,
                    repassword : repassword,},
                type: 'post',
                success:function(data){
                    if(data['success'] == 1){
                        $("#form-message").text("Successfully Registered!   Please Use Link Sent To Email To Confirm Registration")
                    }
                    else{
                        if(data['id'] == 1){
                            $("#id").addClass("input-error");
                            $("<div class='error-message'>Id Already TAken</div>").insertAfter("#id_f");
                        }
                        if(data['contact'] == 1){
                            $("#contact").addClass("input-error");
                            $("<div class='error-message'>Contact Number Already Exist</div>").insertAfter("#contact_f");
                        }
                        if(data['email'] == 1){
                            $("#email").addClass("input-error");
                            $("<div class='error-message'>Email Already Exist</div>").insertAfter("#email_f");
                        }  
                    }
                }
            })
        }
    })
})