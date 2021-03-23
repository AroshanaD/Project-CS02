$(document).ready(function(){
    $.ajax({
        url: '../../index.php/Patient_Appointment/get_doctor_appointmentView',
        data: {},
        type: 'post',
        success:function(data){
           var details = data;
            render_details(details);
        }
    })

    $("#search-btn").click(function(){
        var date= new Date($("#date").val());
        var dd = String(date.getDate()).padStart(2, '0');
        var mm = String(date.getMonth() + 1).padStart(2, '0'); //January is 0!
        var yyyy = date.getFullYear();
        date= yyyy + '-' + mm + '-' + dd;

        $.ajax({
            url: '../../index.php/Patient_Appointment/doctor_search',
            data: {date:date},
            type: 'post',
            success:function(data){
                var details = data;
                render_details(details);
            }
        })
    })
})

function render_details(data){

    function render_header(){
        $("table").empty();
        var header = $(`<tr id=${"head_row"}>`).append($(`<td>`),
            $(`<td>`).text("No"),
            $(`<td>`).text("Appointment No"),$(`<td>`).text("Appointment date"),
            $(`<td>`).text("Appointment time"),$(`<td>`).text("Patient name"),
            $(`<td>`).text("Patient birthday"),$(`<td>`).text("Patient contact"),
            $(`<td>`).text("Doctor_name"),
            $(`<td>`).append("View"));
            $("table").append(header);
    }

    render_header();

    const no_rows= 10;
    var page = 1;
    var tot_rows = data.length;

    render_page();

    $(".pagination").css("display","flex");

    $("#next").click(function(){
        if (page * no_rows < tot_rows){
            page = page + 1 ;
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
            var row_id = data[i]['Seat_no'].toString();
            var row_id = row_id.concat("')");
            var func = "selectfunc(".concat(i+1,",","'",row_id);
            var getDetails=data[i]['appointment_Id'];

            var View = "<a href=../patient_Appointment/view_Appoint?id=".concat(getDetails,"><button class='tb-btn'>View</button></a>");
            var row = $(`<tr id=${data[i].Seat_no}>>`).append($(`<td>`).append($(`<input type=${"checkbox"} id=${i+1} value=1 onchange=${func}> `)),
            $(`<td>`).text(i+1),
            $(`<td>`).text(data[i].Seat_no),$(`<td>`).text(data[i].Date),
            $(`<td>`).text(data[i].time),$(`<td>`).text(data[i].f_name.concat(" ",data[i].l_name)),
            $(`<td>`).text(data[i].birthday),$(`<td>`).text(data[i].contact_no),
            $(`<td>`).text(data[i].doctor_fname.concat(" ",data[i].doctor_lname)),
            $(`<td>`).append(View));
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