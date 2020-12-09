<script type="text/javascript" src="/project-cs02/files/js/autofill_spec.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/doctor_validate.js"></script>
<script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>


    <div style="background:white;">
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/doctor.svg' ?>)"></div>
                    <form method = "POST">
                       <div class="right">
                           <div class="title">Update Doctors</div>
                            <div class="label">
                                <label for="id">Id</label>
                            </div>
                            <div class="input">
                                <input type="text" id="id" value="<?php echo $_POST['details']['id'] ?>" name="id" disabled required>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" id="fname" value="<?php echo $_POST['details']['f_name'] ?>" name="f_name" disabled required>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" id="lname" value="<?php echo $_POST['details']['l_name'] ?>" name="l_name" disabled required>
                            </div>
                            <div class="label">
                                <label for="qualification">Qualifications</label>
                            </div>
                            <div class="input" id="text_f">
                                <input type="text" id="qualification" value="<?php echo $_POST['details']['qualification'] ?>" name="qualification" required>
                            </div>
                            <div class="label">
                                <label for="fee">Charges</label>
                            </div>
                            <div class="input">
                                <input type="number" id="fee" value="<?php echo $_POST['details']['fee'] ?>" name="fee" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input" id="address_f">
                                <input type="text" id="address" value="<?php echo $_POST['details']['address'] ?>" name="address" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input" id="contact_f">
                                <input type="num" id="contact" value="<?php echo $_POST['details']['contact_no'] ?>" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input" id="email_f">
                                <input type="email" id="email" value="<?php echo $_POST['details']['email'] ?>" name="email" required>
                            </div>
                            <div><input type="submit" name="Update" value="Update" class="btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>