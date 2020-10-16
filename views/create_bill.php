<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container-small">Hospital Management System</div>
        <div class="container">
            <div class="box-container">
                <div class="form-name">create bill</div>
                <div class="box-0">   
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
                <button type="button"  class="submit-btn" id="addMedicine-button" >Add Medicine</button>  </br>
                </div>
            
                <table class=reg-table>        
                    <tr>
                        <th>ID</th>
                        <th>Medicine</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit Price</th>
                        <th>Sub Total</th>
                        <th>Note</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>            
                    </tr>
                        
                </table><br>
                <button type="button"  class="submit-btn" id="confirm-button" >Confirm</button>
           </div>
        </div>
    </body>
</html>