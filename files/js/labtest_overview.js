$(document).ready(function() {

    $.ajax({
        url: '../../index.php/Reports/inventory_overview',
        data: {},
        type: 'post',
        success: function(data) {
            $details = data;
            render_details($details);
        }
    })

})

function render_details(data) {
    console.log(data);

}