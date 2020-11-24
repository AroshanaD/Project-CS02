<script type="text/javascript" src="/project-cs02/files/js/autofill_vendors.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/medicine_validate.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>

    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
        <div class="container">
            <div class="block">
            <?php if(!empty($_POST['medicine'])):?>
                <?php foreach($_POST['medicine'] as $record):?>
                    <form method="post">
                        <div class="form-box">
                            <div class="title">Update Inventory</div>
                            <div class="label">
                                <label for="med_id">Medicine Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_id" id="id" value="<?php echo $record['id'];?>" disabled selected>
                            </div>
                            <div class="label">
                                <label for="med_name">Medicine name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_name" id="name" value="<?php echo ucwords($record['name']);?>" >
                            </div>
                            <div class="label">
                                <label for="med_description">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="med_description" id="description" value="<?php echo $record['description'];?>" required>
                            </div>
                            <div class="label">
                                <label for="vendors">Vendor</label>
                            </div>
                            <div class="input">
                                <select name="vendors" id="vendors" required>
                                    <option value="<?php echo $record['vendor'];?>"><?php echo $record['vendor_name'];?></option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="med_price">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_price" id="price" value="<?php echo $record['unit_price'];?>" required>
                            </div>
                            <div class="label">
                                <label for="med_quantity">Quantity</label>
                            </div>
                            <div class="input">
                                <input type="text" name="med_quantity" id="quantity" value="<?php echo $record['quantity'];?>" required>
                            </div>
                            
                            <div class="btn-area">
                                <input type="submit" value="Update" class="submit-btn" name="Update">
                            </div>
                            <div id="form-message"></div>
                        </div>    
                    </form>
                    <?php endforeach; ?>
                <?php endif; ?>
                                   
            </div>
        </div> 
    </body>

</html>