
    <div style="background:white;">
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/lab_test.svg' ?>)"></div>
                <?php if(!empty($_POST['test'])):?>
                <?php foreach($_POST['test'] as $record):?>
                    <form method="POST">
                    <?php $_POST['id']=$record['id'] ?>
                       <div class="right">
                           <div class="title">Delete Lab Test</div>
                            <div class="label">
                                <label for="test_id">Test Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_id" value="<?php echo ($record['id']);?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="test_name">Test name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_name" value="<?php echo ($record['name']);?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="test_description">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="test_description" value="<?php echo ($record['description']);?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="test_price">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_price" value="<?php echo ($record['unit_cost']);?>" disabled required>
                            </div>
                            <div><input type="submit" value="Delete" class="btn" name="Delete"></div>
                        </div >
                    </form>
                    <?php endforeach; ?>
                <?php endif; ?>
                </div>
            </div>
        </div> 
    </body>

</html>