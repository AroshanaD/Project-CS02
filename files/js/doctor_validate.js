$(document).ready(function(){

    if($(".btn").val() == 'Add'){
        id_generate();
    }

    $("form").submit(function(event){
        event.preventDefault();

        var id = $("#id").val();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        if($("#gender")){
            var gender = $("#gender").val();
        }
        var qualification = $("#qualification").val();
        var contact = $("#contact").val();
        var address = $("#address").val();
        var email = $("#email").val();
        if($("#search_spec")){
            var specialization = $("#search_spec").val();
        }
        var fee = $("#fee").val();
        var submit = $(".btn").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#id","#fname","#lname","#qualification","#contact","#address","#email","#specialization","#fee"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if(sid_val(id) == false){valid = false;}
        if(name_val("fname",fname) == false){valid = false;}
        if(name_val("lname",lname) == false){valid = false;}
        if(contact_val(contact) == false){valid = false;}
        if(address_val(address) == false){valid = false;}
        if(email_val(email) == false){valid = false;}
        if(text_val(qualification) == false){valid = false;}

        //console.log(id);

        if(valid == true){
            $.ajax({
                url: '../../index.php/doctors/validate',
                data: {
                    id : id,
                    fname : fname,
                    lname : lname,
                    gender : gender,
                    qualification : qualification,
                    contact : contact,
                    address : address,
                    email : email,
                    specialization : specialization,
                    fee : fee,
                    submit : submit},
                type: 'post',
                success:function(data){
                    if(data['success'] == 1){
                        id_list.forEach(element => {
                            $(element).val("");
                            id_generate();
                        });
                        if(submit == 'Add'){
                            $("#form-message").text("Successfully Added User! Email Sent To User");
                        }
                        if(submit == 'Update'){
                            location.href = "../../index.php/doctors/view";
                        }
                    }
                    else{
                        if(data['validation_success'] == 1){
                            $("#form-message").text("Couldn't Send Email. Please Verify Email Again");
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
                }
            })
        }
    })

})

function id_generate(){
    var category= $("#category").val();
    var prefix_cat = "D";
         
    var id = prefix_cat.concat(Math.floor(Math.random() * (999999999 - 100000000)));
    $("#id").val(id);
}