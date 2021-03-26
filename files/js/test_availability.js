var details = [];

$(document).ready(function(){
    $.ajax({
        url: '../../index.php/patientTest/test_details',
        data: {id: $("#t_id").val()},
        type: "post",
        success: function(data){
            details = data;
            render_table(data);
        }
    })
})

function render_table(data){

    for(i=0; i<data.length; i++){
        var availability = data[i].availability == 1 ? "Yes" : "No";

        var row = $(`<div class=${"test-details-div"}>`).append(
            $(`<div class=${"details-title"}>`).text("Test ".concat(i+1)),
            $(`<div class=${"details-field"}>`).text("Test Name"),
            $(`<div class=${"details-field"}>`).text(data[i].name),
            $(`<div class=${"details-field"}>`).text("Description"),
            $(`<div class=${"details-field"}>`).text(data[i].description));
        $(".test-details").append(row);
    }
}