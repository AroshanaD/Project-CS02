$(document).ready(function(){
    
    $("form").submit(function(event){
        event.preventDefault();

        var name = $("#name").val();
        var address = $("#address").val();
        var contact = $("#contact").val();
        var email = $("#email").val();
        var submit = $(".btn").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#name","#address","#contact","#email"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if(text_val("name",name) == false){valid = false;}
        if(address != ''){
            if(address_val(address) == false){valid = false;}
        }
        if(contact != ''){
            if(contact_val(contact) == false){valid = false;}
        }
        if(email != ''){
            if(email_val(email) == false){valid = false;}
        }

        if(valid == true){
            //console.log("jfna");
            $.ajax({
                url: '../../index.php/inventory/add_new_vendor',
                data: {name:name, address:address, contact:contact, email:email},
                type: 'post',
                success:function(data){
                    if(data == true){
                        id_list.forEach(element => {
                            $(element).val("");
                        });
                        $("#form-message").text("Successfully Added Vendor");
                    }
                    else{
                        $("#form-message").text("Something Went Wrong");
                    }
                }
            })
        }
    })
})