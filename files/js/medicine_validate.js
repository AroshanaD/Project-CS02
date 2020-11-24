$(document).ready(function(){
    
    $("form").submit(function(event){
        event.preventDefault();

        var name = $("#name").val();
        var description = $("#description").val();
        var vendor = $("#vendors").val();
        var cost = $("#cost").val();
        var quantity = $("#quantity").val();
        var submit = $(".submit-btn").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#name","#description","#vendors","#cost","#quantity"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if(text_val("name",name) == false){valid = false;}
        if(text_val("description",description) == false){valid = false;}

        if(valid == true){
            //console.log("jfna");
            $.ajax({
                url: '../../index.php/inventory/add_medicine',
                data: {name:name, description:description, vendor:vendor, cost:cost, quantity:quantity},
                type: 'post',
                success:function(data){
                    if(data == true){
                        id_list.forEach(element => {
                            $(element).val("");
                        });
                        $("#form-message").text("Successfully Added Medicine");
                    }
                    else{
                        $("#form-message").text("Something Went Wrong");
                    }
                }
            })
        }
    })
})