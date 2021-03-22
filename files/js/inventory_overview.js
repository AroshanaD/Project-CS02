$(document).ready(function(){

    $.ajax({
        url: '../../index.php/Reports/inventory_overview',
        data: {},
        type: 'post',
        success:function(data){
           /* $details = data;
            render_details($details);*/
        }
    })

})

/*function render_details(data){
    
    var x = data.toString();
    console.log(x);*/
    $("#app").append(
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no of medicine"),
            $(`<td id=${"report-td-2"}>`).append("1000")
            /*SELECT COUNT(drug_name) FROM stock; */ 
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Number of various tablet"),
            $(`<td id=${"report-td-2"}>`).append("100")
            /*SELECT COUNT(drug_name) FROM stock where unitary_unit='tablet'*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Number of various sirup "),
            $(`<td id=${"report-td-2"}>`).append("372538")
            /*SELECT COUNT(drug_name) FROM stock where unitary_unit='sirup'*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total expense for drugs"),
            $(`<td id=${"report-td-2"}>`).append("97253")
            /*SELECT SUM(unitary_value*unitary_price*quantity) AS 'expense' FROM stock; */

        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Expected income from drugs"),
            $(`<td id=${"report-td-2"}>`).append("120000")
            /*SELECT SUM(unitary_value*selling_price*quantity) AS 'expense' FROM stock*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("drug which has most quatity"),
            $(`<td id=${"report-td-2"}>`).append("Amoxicillin")
            /* SELECT drug_name FROM `stock` WHERE quantity = (SELECT MAX(quantity) FROM stock);*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("manufacture of most of the drugs"),
            $(`<td id=${"report-td-2"}>`).append("Medac Pharma, Inc")
            /*SELECT manufacturer FROM `stock` WHERE quantity = (SELECT MAX(quantity) FROM stock);*/
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total no of drugs which are expired"),
            $(`<td id=${"report-td-2"}>`).append("938")
            /*SELECT COUNT(drug_name) FROM `stock` WHERE expire_date < NOW(); */
        ),
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("drugs which are expired"),
            $(`<td id=${"report-td-2"}>`).append("Cardiologist")
            /*SELECT drug_name FROM `stock` WHERE expire_date < NOW(); */
        ),

    )
/*}*/
