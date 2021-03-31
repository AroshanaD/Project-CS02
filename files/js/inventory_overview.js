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



$("#print").click(function(){
    window.print();
})
$("#back").click(function(){
    location.href = '/project-cs02/index.php/user/dashboard';
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
            $(`<td id=${"report-td-1"}>`).append("Number of various Syrup "),
            $(`<td id=${"report-td-2"}>`).append(data['Syrup_count'])
            /*SELECT COUNT(drug_name) FROM stock where unitary_unit='sirup'*/
        ),

        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-1"}>`).append("Total number of vendors with orders"),
            $(`<td id=${"report-td-2"}>`).append(data['count_vendor'])
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
            $(`<td id=${"report-td-2"}>`).append((data['income']-data['expense']).toFixed(2))
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

        

    )/*
    $('#day').append(
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-3"} style="font-weight:bold;border: 1px black solid">`).append("br_id"),
            $(`<td id=${"report-td-4"} style="font-weight:bold; border: 1px black solid">`).append("drug name"),
            $(`<td id=${"report-td-5"} style="font-weight:bold;border: 1px black solid">`).append("Selling price"),
            $(`<td id=${"report-td-6"} style="font-weight:bold;border: 1px black solid">`).append("quantity"),
            $(`<td id=${"report-td-7"} style="font-weight:bold;border: 1px black solid">`).append("expected profit"),    
        ),
    )
for(i=0;i<data['drug_details'].length;i++){
    $('#day').append(
        $(`<tr id=${"report-tr"} >`).append(
            $(`<td id=${"report-td-3"} style="border: 1px black solid">`).append(data['drug_details'][i]['br_id']),
            $(`<td id=${"report-td-4"} style="border: 1px black solid">`).append(data['drug_details'][i]['drug_name']),
            $(`<td id=${"report-td-5"} style="border: 1px black solid">`).append(data['drug_details'][i]['selling_price']),
            $(`<td id=${"report-td-6"} style="border: 1px black solid">`).append(data['drug_details'][i]['quantity']),
            $(`<td id=${"report-td-7"} style="border: 1px black solid">`).append((data['drug_details'][i]['drugIncome']-data['drug_details'][i]['drugExpense']).toFixed(2)),    
        ),
    )
}*/
    var header = $(`<tr id=${"head_row"}>`).append(
        $(`<th>`).text("br_id"),
        $(`<th>`).text("drug_name"),
        $(`<th>`).text("Selling price"),
        $(`<th>`).text("quantity"),
        $(`<th>`).append("profit"));
    $("#manu").append(header);

    for(i=0;i<data['drug_details'].length;i++){
        var row = $(`<tr>`).append(
            $(`<td>`).text(data['drug_details'][i]['br_id']),
            $(`<td>`).text(data['drug_details'][i]['drug_name']),
            $(`<td>`).text(data['drug_details'][i]['selling_price']),
            $(`<td>`).text(data['drug_details'][i]['quantity']),
            $(`<td>`).text((data['drug_details'][i]['drugIncome']-data['drug_details'][i]['drugExpense']).toFixed(2)));
        $("#manu").append(row);
    }

    if(data['expire_drug_details'].length !=0){
        var header = $(`<tr id=${"head_row"}>`).append(
            $(`<th>`).text("br_id"),
            $(`<th>`).text("drug_name"),
            $(`<th>`).text("Selling price"),
            $(`<th>`).text("quantity"));
        $("#expire").append(header);
    
        for(i=0;i<data['expire_drug_details'].length;i++){
            var row = $(`<tr>`).append(
                $(`<td>`).text(data['expire_drug_details'][i]['br_id']),
                $(`<td>`).text(data['expire_drug_details'][i]['drug_name']),
                $(`<td>`).text(data['expire_drug_details'][i]['selling_price']),
                $(`<td>`).text(data['expire_drug_details'][i]['quantity']));
            $("#expire").append(row);
        }
    }
    else{
        var row = $(`<tr>`).append(
            $(`<td>`).text("Note: No drugs which are expired."));
            $("#expire").append(row);
    }
    
}
})