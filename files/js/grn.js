var no_items = 0;
var medicine_list = [];

$(document).ready(function () {

    $("table").append(
        $(`<tr>`).append(
            $(`<td>`).text("No"),
            $(`<td>`).text("BR No"),
            $(`<td>`).text("Medicine"),
            $(`<td>`).text("Unit"),
            $(`<td>`).text("Unit Price"),
            $(`<td>`).text("Selling Price"),
            $(`<td>`).text("Quantity"),
            $(`<td>`).text("Manufacturer"),
            $(`<td>`).text("Manufacture Date"),
            $(`<td>`).text("Expire Date"),
            $(`<td>`).text("Note")
        )
    );

    $(".add").click(function () {

        add_to_table();
    })

})

function up() {
    $(".medicine-details").css("display", "none");
}

function down() {
    $(".medicine-details").css("display", "flex");
}