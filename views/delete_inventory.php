
    <div style="background:white;">
        <div class="container">
            <div class="contact-box">
            <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/inventory.svg' ?>)"></div>
                    <form  method = "POST">
                        <?php $_POST['id']=$_POST['medicine']['id'] ?>
                        <div class="right">
                            <div class="title">Delete Medicine</div>
                            <div class="label">
                                <label for="med_id">Medicine Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_id" value="<?php echo $_POST['medicine']['id'];?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_name">Medicine name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_name" value="<?php echo ucwords($_POST['medicine']['name']);?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_vendor">Vendor</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_vendor" value="<?php echo ucwords($_POST['medicine']['vendor']);?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_description">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="med_description" value="<?php echo $_POST['medicine']['description'];?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_price">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_price" value="<?php echo $_POST['medicine']['unit_price'];?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_quantity">Quantity</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_quantity" value="<?php echo $_POST['medicine']['quantity'];?>" disabled>
                            </div>
                            
                            <div>
                                <input type="submit" value="Delete" class="btn" name="deleteMedicine">
                            </div>
                        </div>    
                    </form>
            </div>
        </div> 
    </body>

</html>