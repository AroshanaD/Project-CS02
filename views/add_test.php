
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_medical_care_movn.png'?>);background-repeat:no-repeat">   
        <div class="container">
                <div class="block">
                    <form method="POST">
                       <div class="form-box">
                           <div class="title">Add Lab Test</div>
                            <div class="label">
                                <label for="test_id">Test Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_id" required>
                            </div>
                            <div class="label">
                                <label for="test_name">Test name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_name" required>
                            </div>
                            <div class="label">
                                <label for="test_description">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="test_description" required>
                            </div>
                            <div class="label">
                                <label for="test_price">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="text" name="test_price" required>
                            </div>
                            <div class="btn-area"><input type="submit" value="Add" name="Add" class="submit-btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>