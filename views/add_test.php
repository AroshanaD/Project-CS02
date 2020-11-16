<script rel="text/javascript" src="/project-cs02/files/js/labtest_validate.js"></script>
<script rel="text/javascript" src="/project-cs02/files/js/validation.js"></script>
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_medical_care_movn.png'?>);background-repeat:no-repeat">   
        <div class="container">
                <div class="block">
                    <form method="POST">
                       <div class="form-box">
                           <div class="title">Add Lab Test</div>
                            <div class="label">
                                <label for="test_id" id="id_f">Test Id</label>
                            </div>
                            <div class="input">
                                <input type="number" id="id" name="test_id" disabled selected required>
                            </div>
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
                            <div class="btn-area"><input type="submit" value="Add" name="Add" class="submit-btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>