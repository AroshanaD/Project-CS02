<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Create Bills</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="pharmasist.css">
        <style>
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
            }
        </style>
    </head>

    <body>
        
       
        <div class=box-1>
            <input type="text" class=input name="custName" placeholder="Customer Name" required>
            <input type="text" class=input name="custAge" placeholder="Customer Age" required></br>
            <input type="text" class=input name="orderDate" placeholder="Order Date" required>
            <input type="text" class=input name="orderTime" placeholder="Order Time" required></br>
       
            <select name="medicine" id="select-medicine" class=input>
            <option value ="Any">Any medicine</option> 
            </select>
            <select name="quantity" id="select-quantity" class=input>
            <option value ="Any">Any quantity</option> 
            </select><br>
            <button type="button"  class="button1" id="addMedicine-button" >Add Medicine</button>   
        </div></br>
        

        <div class=box-0>
            <table style="width:100%">
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>QUANTITY</th>
                    <th>UNIT PRICE</th>
                    <th>TOTAL</th>
                    <th>NOTE</th>
                </tr>
            </table></br>

            <button type="button" class="button1" id="confirm-button">Confirm</button>
        </div>


    </body>
</html>