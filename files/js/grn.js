var no_items = 0;
var medicine_list = [];
var total_worth = 0

$(document).ready(function () {

    $("#no_items").val(0);
    $("#grn_value").val(0);

    $("#form-1").submit(function (event) {
        event.preventDefault();

        var grn = $("#grn").val();
        var vendor = $("#vendors").val();
        var note = $("#note").val();

        let valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        let id_list = ["#note"];

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if (text_val("note", note) == false) { valid = false; }

        if (valid == true) {
            if (medicine_list.length >= 1) {
                console.log("in");
                $.ajax({
                    url: '../../index.php/inventory/add_new_grn',
                    data: {
                        grn: grn,
                        vendor: vendor,
                        no_items: no_items,
                        grn_value: total_worth,
                        note: note,
                        medicine_list: medicine_list
                    },
                    type: 'post',
                    success: function (data) {
                        if(data == true){
                            //location.href = "../../index.php/inventory/add_grn?grn added successfully";
                        }
                        else{
                            //location.href = "../../index.php/inventory/add_grn?couldnot add successfully";
                        }
                    }
                })
            }
            else {
                $("#form-message").text("Please add 1 or more medicines");
            }
        }
    })

    $("table").append(
        $(`<tr id=${"head_row"}>`).append(
            $(`<td>`).text("BR No"),
            $(`<td>`).text("Medicine"),
            $(`<td>`).text("Unit"),
            $(`<td>`).text("Unit Price"),
            $(`<td>`).text("Selling Price"),
            $(`<td>`).text("Quantity"),
            $(`<td>`).text("Manufacturer"),
            $(`<td>`).text("Manufacture Date"),
            $(`<td>`).text("Expiration Date"),
            $(`<td>`).text("Note"),
            $(`<td>`).text("Update"),
            $(`<td>`).text("Remove")
        )
    );

    $(".medicine-details").submit(function (event) {
        event.preventDefault();

        no_items = no_items + 1;
        let br = $("#br").val();
        let medicine = $("#medicine").val();
        let unit_price = $("#unit_price").val();
        let selling_price = $("#selling_price").val();
        let quantity = $("#quantity").val();
        let manufacturer = $("#manufacturer").val();
        let manufacture_date = $("#manufacture_date").val();
        let expire_date = $("#expire_date").val();
        let note = $("#note_m").val();
        let unit_value = $("#unit_value").val();
        let unit = $("#unit").val();

        var id_list = ["#br", "#medicine", "#unit_price", "#selling_price", "#quantity", "#manufacturer",
            "#manufacture_date", "#expire_date", "#note_m", "#unit_value", "#unit"];

        var valid = true;
        $(".error-message").remove();
        $("#form-message").empty();

        id_list.forEach(element => {
            $(element).removeClass("input-error");
        });

        if (text_val("medicine", medicine) == false) { valid = false; }
        if (text_val("manufacturer", manufacturer) == false) { valid = false; }
        if (text_val("unit", unit) == false) { valid = false; }
        if (text_val("note", note) == false) { valid = false; }
        if (manufacture_val(manufacture_date) == false) { valid = false; }
        if (expire_val(expire_date) == false) { valid = false; }

        if (valid == true) {

            var medicine_item = [br, medicine, unit_value, unit, unit_price, selling_price,
                quantity, manufacturer, manufacture_date, expire_date, note];

            medicine_list.push(medicine_item);

            total_worth = total_worth + (quantity * unit_price);

            $("#no_items").val(no_items);
            $("#grn_value").val(total_worth);

            id_list.forEach(element => {
                $(element).val("");
            });

            add_to_table(medicine_item);
        }
    })

})

function add_to_table(medicine_item) {
    let update_func = 'update('.concat(medicine_item[0], ')');
    let remove_func = 'remove('.concat(medicine_item[0], ')');
    let update = $(`<button class=${"tb-btn"} id=${"update"} onclick=${update_func}>`).text("Update");
    let remove = $(`<button class=${"tb-btn"} id=${"remove"} onclick=${remove_func}>`).text("Remove");

    let unitary_item = medicine_item[2].toString().concat(" ", medicine_item[3]);

    $("table").append(
        $(`<tr id=${medicine_item[0]}>`).append(
            $(`<td>`).text(medicine_item[0]),
            $(`<td>`).text(medicine_item[1]),
            $(`<td>`).text(unitary_item),
            $(`<td>`).text(medicine_item[4]),
            $(`<td>`).text(medicine_item[5]),
            $(`<td>`).text(medicine_item[6]),
            $(`<td>`).text(medicine_item[7]),
            $(`<td>`).text(medicine_item[8]),
            $(`<td>`).text(medicine_item[9]),
            $(`<td>`).text(medicine_item[10]),
            $(`<td>`).append(update),
            $(`<td>`).append(remove)
        )
    );
}

function update(br) {

    let index = medicine_list.findIndex(element => {
        if (element[0] == br) {
            return true;
        }
    });

    let medicine = medicine_list[index];
    $("#br").val(medicine[0]);
    $("#medicine").val(medicine[1]);
    $("#unit_value").val(medicine[2]);
    $("#unit").val(medicine[3]);
    $("#unit_price").val(medicine[4]);
    $("#selling_price").val(medicine[5]);
    $("#quantity").val(medicine[6]);
    $("#manufacturer").val(medicine[7]);
    $("#manufacture_date").val(medicine[8]);
    $("#expire_date").val(medicine[9]);
    $("#note_m").val(medicine[10]);

    remove(br);
}

function remove(br) {
    let index = medicine_list.findIndex(element => {
        if (element[0] == br) {
            return true;
        }
    });
    console.log(index);
    total_worth = total_worth - (medicine_list[index][4] * medicine_list[index][6]);
    no_items = no_items - 1;
    $("#no_items").val(no_items);
    $("#grn_value").val(total_worth);
    medicine_list.splice(index, 1);
    console.log(medicine_list);
    let id = "#".concat(br);
    $(id).remove();
}

function up() {
    $(".medicine-details").css("display", "none");
}

function down() {
    $(".medicine-details").css("display", "flex");
}