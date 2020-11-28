
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
                                <input type="text" value="<?php echo $_POST['details']['id'] ?>" name="id" required>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['f_name'] ?>" name="f_name" required>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['l_name'] ?>" name="l_name" required>
                            </div>
                            <div class="label">
                                <label for="qualification">Qualifications</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['qualification'] ?>" name="qualification" required>
                            </div>
                            <div class="label">
                                <label for="fee">Charges</label>
                            </div>
                            <div class="input">
                                <input type="number" value="<?php echo $_POST['details']['fee'] ?>" name="fee" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['address'] ?>" name="address" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['contact_no'] ?>" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['email'] ?>" name="email" required>
                            </div>
                            <div><input type="submit" name="Update" value="Update" class="btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>