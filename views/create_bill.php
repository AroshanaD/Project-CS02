
    <div style="background-color: white, url(<?php echo Router::base_url().'/files/icons/undraw_Payments_re_77x0.png'?>);background-repeat:no-repeat">
        <div class="container">
            <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/lab_test.svg' ?>)"></div>
                    <form> 
                        <div class="right">
                            <div class="title">CREATE BILL</div>
                            <div class="input"><input type="text"  name="custName" placeholder="Customer Name" required></div></br>
                            <div class="input"><input type="text"  name="custAge" placeholder="Customer Age" required></div></br>
                            <div class="input"><input type="text"  name="orderDate" placeholder="Order Date" required></div></br>
                            <div class="input"><input type="text"  name="orderTime" placeholder="Order Time" required></div></br>
                            <div class="input"><select name="medicine" id="select-medicine" >
                            <option value ="Any">Any medicine</option> 
                            </select></div></br>
                            <div class="input"><select name="quantity" id="select-quantity" >
                            <option value ="Any">Any quantity</option> 
                            </select></div></br>
                            <div><button type="button"  class="btn" id="addMedicine-button" >Add Medicine</button></div>
                        </div>
                    </form>
            </div>

            <div class="container-t">
                <div class="table">
                    <table>

                        <tr>
                            <td>ID</td>
                            <td>Medicine</td>
                            <td>Description</td>
                            <td>Quantity</td>
                            <td>Unit Price</td>
                            <td>Sub Total</td>
                            <td>Note</td>
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
                    </table>
                </div>
                <button type="button"  class="table-btn" id="confirm-button" >Confirm</button>
            </div>
        </div>
    </body>
</html>