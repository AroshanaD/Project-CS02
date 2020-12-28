$(document).ready(function () {
    $.ajax({
        url: '../../index.php/inventory/get_stock',
        data: {},
        type: 'post',
        success: function (data) {
            render_details(data);
        }
    })

    $("#search-btn").click(function () {
        $.ajax({
            url: '../../index.php/inventory/search_medicine',
            data: { name: $("#name").val() },
            type: 'post',
            success: function (data) {
                render_details(data);
            }
        })
    })
})

function render_details(data) {

    function render_header() {
        $("table").empty();
        var header = $(`<tr id=${"head_row"}>`).append(
            $(`<td>`),
            $(`<td>`).text("No"),
            $(`<td>`).text("BR"),
            $(`<td>`).text("Medicine"),
            $(`<td>`).text("Unit"),
            $(`<td>`).text("Unit Price"),
            $(`<td>`).text("Selling Price"),
            $(`<td>`).text("Quantity"),
            $(`<td>`).text("Manufacturer"),
            $(`<td>`).text("Manufacture Date"),
            $(`<td>`).text("Expiration Date"),
            $(`<td>`).text("Note"),
            $(`<td>`).text("Remove"));
        $("table").append(header);
    }

    render_header();

    const no_rows = 3;
    var page = 1;
    var tot_rows = data.length;

    render_page();

    $(".pagination").css("display", "flex");

    $("#next").click(function () {
        if (page * no_rows < tot_rows) {
            page = page + 1;
            render_page();
        }
    });

    $("#previous").click(function () {
        if (page > 1) {
            page = page - 1;
            render_page();
        }
    })

    function render_page() {
        let first_row = (page - 1) * no_rows;
        let last_row = (first_row + no_rows > tot_rows) ? tot_rows : first_row + no_rows;
        $("table").empty();
        render_header();
        for (let i = first_row; i < last_row; i++) {
            var get_details = data[i]['br_id'];
            var remove_func = 'remove('.concat(data[i].br_id, ')');
            var remove = $(`<button class=${"tb-btn"} id=${"remove"} onclick=${remove_func}>`).text("Remove");

            var row_id = data[i]['br_id'];
            console.log(row_id);
            var row_id = (row_id.toString()).concat("')");
            var func = "selectfunc(".concat(i + 1, ",", "'", row_id);

            var row = $(`<tr id=${data[i].id}>`).append(
                $(`<td>`).append($(`<input type=${"checkbox"} id=${i + 1} value=1 onchange=${func}> `)),
                $(`<td>`).text(i + 1),
                $(`<td>`).text(data[i].br_id),
                $(`<td>`).text(data[i].drug_name),
                $(`<td>`).text((data[i].unitary_value).toString().concat(" ", data[i].unitary_unit)),
                $(`<td>`).text(data[i].unitary_price),
                $(`<td>`).text(data[i].selling_price),
                $(`<td>`).text(data[i].quantity),
                $(`<td>`).text(data[i].manufacturer),
                $(`<td>`).text(data[i].manufacture_date),
                $(`<td>`).text(data[i].expire_date),
                $(`<td>`).text(data[i].note),
                $(`<td>`).append(remove));
            $("table").append(row);
        }
    }

}

function selectfunc(i, row_id) {
    //console.log(row_id);
    var idd = "#".concat(i);
    var row_id = "#".concat(row_id);
    //console.log(row_id);
    if ($(idd).is(':checked')) {
        //console.log($(idd).val());
        $(row_id).css("background-color", "red");
    }
    else {
        if (i % 2 == 0) {
            $(row_id).css("background-color", "#b8cac7");
        }
        else {
            $(row_id).css("background-color", "white");
        }
    }

}

function remove(br_id){
    if(confirm("Please confirm to remove selected item from stock")){
        location.href = '../../index.php/inventory/remove_stock_item?br_id='.concat(br_id);
    }
}