<script rel="text/javascript" src="/project-cs02/files/js/staff_validate.js"></script>
<script rel="text/javascript" src="/project-cs02/files/js/validation.js"></script>
    <div style="background:white;">
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/add_staff.svg' ?>)"></div>
                    <form method = "POST">
                       <div class="right">
                           <div class="title">Update Vendor</div>
                            
                            <div class="label">
                                <label for="id">Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="id" id="id" value="<?php echo $_POST['details']['id'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="f_name">Name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="f_name" id="fname" value="<?php echo $_POST['details']['name'] ?>" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input" id="address_f">
                                <input type="text" name="address" id="address" value="<?php echo $_POST['details']['address'] ?>" >
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input" id="contact_f">
                                <input type="tel" name="contact" id="contact" value="<?php echo $_POST['details']['contact_no'] ?>" >
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input" id="email_f">
                                <input type="email" name="email" id="email" value="<?php echo $_POST['details']['email'] ?>" >
                            </div>
                            <div><input type="submit" name="Update" value="Update" class="btn"></div>
                            <div id="form-message"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>