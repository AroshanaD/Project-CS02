$(document).ready(function(){

    $("form").submit(function(event){
        event.preventDefault();

        var category = $("#category").val();
        var id = $("#id").val();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var gender = $("#gender").val();
        var birthday = $("#birthday").val();
        var contact = $("#contact").val();
        var address = $("#address").val();
        var email = $("#email").val();
        var submit = $(".submit-btn").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#id","#fname","#lname","#gender","#birthday","#contact","#address","#email"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if(sid_val(id) == false){valid = false;}
        if(name_val("fname",fname) == false){valid = false;}
        if(name_val("lname",lname) == false){valid = false;}
        if(contact_val(contact) == false){valid = false;}
        if(address_val(address) == false){valid = false;}
        if(email_val(email) == false){valid = false;}
        if(bday_val(birthday) == false){valid = false;}

        console.log(id);

        if(valid == true){
            $.ajax({
                url: '../../index.php/staff/validate',
                data: {category : category,
                    id : id,
                    fname : fname,
                    lname : lname,
                    gender : gender,
                    birthday : birthday,
                    contact : contact,
                    address : address,
                    email : email,
                    submit : submit},
                type: 'post',
                success:function(data){
                    if(data['success'] == 1){
                        id_list.forEach(element => {
                            $(element).val("");
                        });
                        $("#form-message").text("Successful");
                    }
                    else{
                        var valid_error = false;
                        if(data['id'] == 1){
                            id_generate();
                            valid_error = true;
                        }
                        if(data['contact'] == 1){
                            $("#contact").addClass("input-error");
                            $("<div class='error-message'>Contact Number Already Exist</div>").insertAfter("#contact_f");
                            valid_error = true;
                        }
                        if(data['email'] == 1){
                            $("#email").addClass("input-error");
                            $("<div class='error-message'>Email Already Exist</div>").insertAfter("#email_f");
                            valid_error = true;
                        }
                    }
                }
            })
        }
    })

    $("#category").change(function(){
        id_generate();
     })
})

function id_generate(){
    var category= $("#category").val();
        var prefix_cat = "";
         switch(category){
            case 'pharmacist':
                 prefix_cat = 'P';
             break;
             case 'receptionist':
                 prefix_cat = 'R';
             break;
             case 'lab_technician':
                 prefix_cat = 'L';
             break;
             case 'supervisor':
                 prefix_cat = 'S';
             break;
         }
         var id = prefix_cat.concat(Math.floor(Math.random() * (1000000000 - 100000000)));
         $("#id").val(id);
}