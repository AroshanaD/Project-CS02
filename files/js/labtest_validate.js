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

        if(valid == true){
            //console.log("jfna");
            $.ajax({
                url: '../../index.php/labtest/add_test',
                data: {name:name, description:description, cost:cost},
                type: 'post',
                success:function(data){
                    if(data == true){
                        id_list.forEach(element => {
                            $(element).val("");
                        });
                        $("#form-message").text("Successfully Added Test");
                    }
                    else{
                        $("#form-message").text("Something Went Wrong");
                    }
                }
            })
        }
    })
})