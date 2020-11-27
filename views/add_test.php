<script rel="text/javascript" src="/project-cs02/files/js/labtest_validate.js"></script>
<script rel="text/javascript" src="/project-cs02/files/js/validation.js"></script>
    <div style="background:white;">   
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/lab_test.svg' ?>)"></div>
                    <form method="POST">
                       <div class="right">
                           <div class="title">Add Lab Test</div>
                            <div class="label">
                                <label for="test_name" id="name_f">Test name</label>
                            </div>
                            <div class="input">
                                <input type="text" id="name" name="test_name" required>
                            </div>
                            <div class="label">
                                <label for="test_description" id="desccription_f">Description</label>
                            </div>
                            <div class="input">
                                <input type="textarea" id="description" name="test_description" required>
                            </div>
                            <div class="label">
                                <label for="test_price" id="cost_f">Unit Price</label>
                            </div>
                            <div class="input">
                                <input type="num" id="cost" name="test_price" required>
                            </div>
                            <div><input type="submit" value="Add" name="Add" class="btn"></div>
                            <div id="form-message"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>