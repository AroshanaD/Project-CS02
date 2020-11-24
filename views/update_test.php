
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_medical_care_movn.png'?>);background-repeat:no-repeat">
        <div class="container">
                <div class="block">
                <?php if(!empty($_POST['test'])):?>
                <?php foreach($_POST['test'] as $record):?>
                    <form method="post">
                       <div class="form-box">
                           <div class="title">Update Lab Test</div>
                            <div class="label">
                                <label for="test_id">Test Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_id" value="<?php echo $record['id'];?>" required>
                            </div>
                            <div class="label">
                                <label for="test_name">Test name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_name" value="<?php echo $record['name'];?>" required>
                            </div>
                            <div class="label">
                                <label for="test_description">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="test_description" value="<?php echo $record['description'];?>" required>
                            </div>
                            <div class="label">
                                <label for="test_price">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_price" value="<?php echo $record['unit_cost'];?>" required>
                            </div>
                            <div class="btn-area"><input type="submit" value="Update" class="submit-btn" name="Update"></div>
                        </div >
                    </form>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
        </div> 
    </body>

</html>