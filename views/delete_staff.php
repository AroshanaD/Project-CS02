
    <div style="background:white;">
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/add_staff.svg' ?>)"></div>
                    <form action method = "POST">
                       <div class="right">
                           <div class="title">Delete Staff Members</div>
                            <div class="label">
                                <label for="staff">Staff</label>
                            </div>
                            <div class="input">
                                <select name="staff" disabled>
                                    <option value="pharmacist">Pharmacist</option>
                                    <option value="lab_technician ">Lab technician</option>
                                    <option value="receptionist">Receptionist</option>
                                    <option value="supervisor">Supervisor</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="id">Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="id" value="<?php echo $_POST['details']['id'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="f_name" value="<?php echo $_POST['details']['f_name'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="l_name" value="<?php echo $_POST['details']['l_name'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" name="address" value="<?php echo $_POST['details']['address'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input">
                                <input type="tel" name="contact" value="<?php echo $_POST['details']['contact_no'] ?>" disabled required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input">
                                <input type="email" name="email" value="<?php echo $_POST['details']['email'] ?>" disabled required>
                            </div>
                            <div><input type="submit" name="Delete" value="Delete" class="btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>