<script type="text/javascript" src="/project-cs02/files/js/autofill_vendors.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/medicine_validate.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>

    <div style="background:white;">
        <div class="container">
            <div class="contact-box">
            <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/inventory.svg' ?>)"></div>
                    <form method="post">
                        <div class="right">
                            <div class="title">Update Inventory</div>
                            <div class="label">
                                <label for="med_id">Medicine Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_id" id="id" value="<?php echo $_POST['medicine']['id'];?>" disabled selected>
                            </div>
                            <div class="label">
                                <label for="med_name">Medicine name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_name" id="name" value="<?php echo ucwords($_POST['medicine']['name']);?>" >
                            </div>
                            <div class="label">
                                <label for="med_description">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="med_description" id="description" value="<?php echo $_POST['medicine']['description'];?>" required>
                            </div>
                            <div class="label">
                                <label for="vendors">Vendor</label>
                            </div>
                            <div class="input">
                                <select name="vendors" id="vendors" required>
                                    <option value="<?php echo $_POST['medicine']['vendor'];?>"><?php echo $_POST['medicine']['vendor_name'];?></option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="med_price">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_price" id="price" value="<?php echo $_POST['medicine']['unit_price'];?>" required>
                            </div>
                            <div class="label">
                                <label for="med_quantity">Quantity</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_quantity" id="quantity" value="<?php echo $_POST['medicine']['quantity'];?>" required>
                            </div>
                            
                            <div class="btn-area">
                                <input type="submit" value="Update" class="btn" name="Update">
                            </div>
                            <div id="form-message"></div>
                        </div>    
                    </form>                                   
            </div>
        </div> 
    </body>

</html>