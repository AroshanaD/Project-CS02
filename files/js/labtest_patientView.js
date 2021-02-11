$(document).ready(function () {
    $.ajax({
        url: '../../index.php/patientTest/getpatient_Result',
        data: {},
        type: 'post',
        success: function (data) {
            var details = data;
            render_table(details);
        }
    })

    $("#search-btn").click(function () {

        $.ajax({
            url: '../../index.php/patientTest/patient_Searchresult',
            data: {date: $("#date").val(), availability:$("#available").val()},
            type: 'post',
            success: function (data) {
                var details = data;
                render_table(details);
            }
        })
    })
})

function render_table(details) {
    $("table").empty();

    function render_header() {
        var header = $(`<tr id=${"head_row"}>`).append($(`<td>`),
            $(`<td>`).text("No"),
            $(`<td>`).text("Patient Name"),
            $(`<td>`).text("Date"),
            $(`<td>`).text("Time"),
            $(`<td>`).text("Cost"),
            $(`<td>`).text("Availability"),
            $(`<td>`).text("View Details"));
        $("table").append(header);
    }

    render_header();

    const no_rows = 10;
    var page = 1;
    var tot_rows = details.length;

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
            let get_details = details[i]['id'];
            
            var row_id = details[i]['patient_name'].toString();
            var row_id = row_id.concat("')");
            var func = "selectfunc(".concat(i+1,",","'",row_id);

            let update = "<a href=../patientTest/View_available?id=".concat(get_details, "><button class='tb-btn'>View</button></a>");

            if(details[i].availability == 0){
                var availability = "Not Available";
            }
            else{
                var availability = "Available";
            }

            let row = $(`<tr id=${details[i].patient_name}>>`).append($(`<td>`).append($(`<input type=${"checkbox"} id=${i+1} value=1 onchange=${func}> `)),
            $(`<td>`).text(i+1),
                $(`<td>`).text(details[i].patient_name),
                $(`<td>`).text(details[i].date),
                $(`<td>`).text(details[i].time),
                $(`<td>`).text(details[i].cost),
                $(`<td>`).text(availability),
                $(`<td>`).append(update));
            $("table").append(row);
        }
    }

}

function selectfunc(i,row_id){
    //console.log(row_id);
    var idd = "#".concat(i);
    var row_id = "#".concat(row_id);
    //console.log(row_id);
    if($(idd).is(':checked')){
        console.log($(idd).val());
        $(row_id).css("background-color","red");
    }
    else{
        if(i%2==0){
            $(row_id).css("background-color","#69f0ae");
        }
        else{
            $(row_id).css("background-color","white");
        }
    }
    
}