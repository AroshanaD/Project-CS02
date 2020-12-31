$(document).ready(function () {

    $("form").submit(function (event) {
        event.preventDefault();

        if ($("#id")) {
            var id = $("#id").val();
        }

        var name = $("#name").val();
        var description = $("#description").val();
        var cost = $("#cost").val();
        var submit = $(".btn").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#name", "#description", "#cost"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if (text_val("name", name) == false) { valid = false; }
        if (text_val("description", description) == false) { valid = false; }

        if (valid == true) {
            if (submit == "Add") {
                $.ajax({
                    url: '../../index.php/labtest/add_test',
                    data: { name: name, description: description, cost: cost },
                    type: 'post',
                    success: function (data) {
                        if (data == true) {
                            id_list.forEach(element => {
                                $(element).val("");
                            });
                            $("#form-message").text("Successfully Added Test");
                        }
                        else {
                            $("#form-message").text("Lab Test Already Available");
                        }
                    }
                })
            }
            else {
                if (submit == "Update") {
                    $.ajax({
                        url: '../../index.php/labtest/update_test',
                        data: { id: id, description: description, cost: cost },
                        type: 'post',
                        success: function (data) {
                            if (data == true) {
                               location.href = '../../index.php/labtest/view?successfully updated test'
                            }
                            else {
                                location.href = '../../index.php/labtest/view?could not update test'
                            }
                        }
                    })
                }
            }
        }
    })
})