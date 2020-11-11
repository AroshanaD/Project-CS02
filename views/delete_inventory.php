
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
        <div class="container">
            <div class="block">
                <?php if(!empty($_POST['medicine'])):?>
                    <?php foreach($_POST['medicine'] as $record):?>
                    <form  method = "POST">
                        <?php $_POST['id']=$record['id'] ?>
                        <div class="form-box">
                            <div class="title">Delete Inventory</div>
                            <div class="label">
                                <label for="med_id">Medicine Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_id" value="<?php echo $record['id'];?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_name">Medicine name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_name" value="<?php echo ucwords($record['name']);?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_vendor">Vendor</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_vendor" value="<?php echo ucwords($record['vendor']);?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_description">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="med_description" value="<?php echo $record['description'];?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_price">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_price" value="<?php echo $record['unit_price'];?>" disabled>
                            </div>
                            <div class="label">
                                <label for="med_quantity">Quantity</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_quantity" value="<?php echo $record['quantity'];?>" disabled>
                            </div>
                            
                            <div class="btn-area">
                                <input type="submit" value="Delete" class="submit-btn" name="deleteMedicine">
                            </div>
                        </div>    
                    </form>
                    <?php endforeach; ?>
                <?php endif; ?>               
            </div>
        </div> 
    </body>

</html>