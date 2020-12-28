$(document).ready(function () {

    $("form").submit(function (event) {
        event.preventDefault();

        if ($("#id")) {
            var id = $("#id").val();
        }

        var name = $("#name").val();
        var address = $("#address").val();
        var contact = $("#contact").val();
        var email = $("#email").val();
        var submit = $(".btn").val();

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        var id_list = ["#name", "#address", "#contact", "#email"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if (text_val("name", name) == false) { valid = false; }
        if (address != '') {
            if (address_val(address) == false) { valid = false; }
        }
        if (contact != '') {
            if (contact_val(contact) == false) { valid = false; }
        }
        if (email != '') {
            if (email_val(email) == false) { valid = false; }
        }

        if (valid == true) {
            if (submit == "Add") {
                $.ajax({
                    url: '../../index.php/inventory/add_new_vendor',
                    data: { name: name, address: address, contact: contact, email: email },
                    type: 'post',
                    success: function (data) {
                        if (data == true) {
                            id_list.forEach(element => {
                                $(element).val("");
                            });
                            $("#form-message").text("Successfully Added Vendor");
                        }
                        else {
                            $("#form-message").text("Something Went Wrong");
                        }
                    }
                })
            }
            else {
                if (submit == "Update") {
                    $.ajax({
                        url: '../../index.php/inventory/update_vendor_details',
                        data: { id: id, name: name, address: address, contact: contact, email: email },
                        type: 'post',
                        success: function (data) {
                            if (data == true) {
                                location.href = '../../index.php/inventory/view_vendor?successfully updated vendor';
                            }
                            else {
                                location.href = '../../index.php/inventory/view_vendor?could not update vendor';
                            }
                        }
                    })
                }
            }
        }
    })
})