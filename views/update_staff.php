<script rel="text/javascript" src="/project-cs02/files/js/staff_validate.js"></script>
<script rel="text/javascript" src="/project-cs02/files/js/validation.js"></script>
    <div style="background:white;">
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/add_staff.svg' ?>)"></div>
                    <form method = "POST">
                       <div class="right">
                           <div class="title">Update Staff Members</div>
                            <div class="label">
                                <label for="staff">Staff</label>
                            </div>
                            <div class="input">
                                <input type="text" name="category" id="category" value="<?php echo $_POST['details']['category'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="id">Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="id" id="id" value="<?php echo $_POST['details']['id'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="f_name" id="fname" value="<?php echo $_POST['details']['f_name'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="l_name" id="lname" value="<?php echo $_POST['details']['l_name'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="input">
                                <input type="text" id="gender" name="gender" value="<?php echo $_POST['details']['gender'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="birthday">Birthday</label>
                            </div>
                            <div class="input" id="bday_f">
                                <input type="date" id="birthday" name="birthday" value="<?php echo $_POST['details']['birthday'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input" id="address_f">
                                <input type="text" name="address" id="address" value="<?php echo $_POST['details']['address'] ?>" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input" id="contact_f">
                                <input type="tel" name="contact" id="contact" value="<?php echo $_POST['details']['contact_no'] ?>" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input" id="email_f">
                                <input type="email" name="email" id="email" value="<?php echo $_POST['details']['email'] ?>" required>
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