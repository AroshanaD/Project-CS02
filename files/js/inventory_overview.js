$(document).ready(function(){

    $.ajax({
        url: '../../index.php/Reports/inventory_overview',
        data: {},
        type: 'post',
        success:function(data){
            $details = data;
            render_details($details);
        }
    })

})

function render_details(data){
    console.log(data);
    
    $("#app").append(
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no of medicine"),
            $(`<td id=${"report-td-2"}>`).text(data['drug_count'])
            /*SELECT COUNT(drug_name) FROM stock; */ 
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Number of various tablet"),
            $(`<td id=${"report-td-2"}>`).text(data['tablet_count'])
            /*SELECT COUNT(drug_name) FROM stock where unitary_unit='tablet'*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Number of various sirup "),
            $(`<td id=${"report-td-2"}>`).append(data['sirup_count'])
            /*SELECT COUNT(drug_name) FROM stock where unitary_unit='sirup'*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total expense for drugs"),
            $(`<td id=${"report-td-2"}>`).append(data['expense'])
            /*SELECT SUM(unitary_value*unitary_price*quantity) AS 'expense' FROM stock; */

        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Expected income from drugs"),
            $(`<td id=${"report-td-2"}>`).append(data['income'])
            /*SELECT SUM(unitary_value*selling_price*quantity) AS 'expense' FROM stock*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Expected profit from drugs"),
            $(`<td id=${"report-td-2"}>`).append(data['income']-data['expense'])
            /*SELECT SUM(unitary_value*selling_price*quantity) AS 'expense' FROM stock*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("drug which has most quatity"),
            $(`<td id=${"report-td-2"}>`).append(data['most_drug'])
            /* SELECT drug_name FROM `stock` WHERE quantity = (SELECT MAX(quantity) FROM stock);*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("manufacturer of most of the drugs"),
            $(`<td id=${"report-td-2"}>`).append(data['most_manufacture'])
            /*SELECT manufacturer FROM `stock` WHERE quantity = (SELECT MAX(quantity) FROM stock);*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no of drugs which are expired"),
            $(`<td id=${"report-td-2"}>`).append(data['count_expire'])
            /*SELECT COUNT(drug_name) FROM `stock` WHERE expire_date < NOW(); */
        ),

    )
}
