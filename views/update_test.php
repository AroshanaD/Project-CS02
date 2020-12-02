
    <div style="background:white;">
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/lab_test.svg' ?>)"></div>
                    <form method="post" action="<?php echo Router::site_url().'/labtest/update_test?id='.$_POST['test']['id'] ?>">
                       <div class="right">
                           <div class="title">Update Lab Test</div>
                            <div class="label">
                                <label for="test_id">Test Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_id" value="<?php echo $_POST['test']['id'];?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="test_name">Test name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_name" value="<?php echo $_POST['test']['name'];?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="test_description">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="test_description" value="<?php echo $_POST['test']['description'];?>" required>
                            </div>
                            <div class="label">
                                <label for="test_price">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_price" value="<?php echo $_POST['test']['unit_cost'];?>" required>
                            </div>
                            <div><input type="submit" value="update" class="btn" name="update"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>