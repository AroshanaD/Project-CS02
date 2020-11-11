
    <div style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_team_ih79.png'?>);">
        <div class="container">
                <div class="block">
                    <form method = "POST">
                       <div class="form-box">
                           <div class="title">Update Staff Members</div>
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
                                <input type="text" name="address" value="<?php echo $_POST['details']['address'] ?>" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input">
                                <input type="tel" name="contact" value="<?php echo $_POST['details']['contact_no'] ?>" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input">
                                <input type="email" name="email" value="<?php echo $_POST['details']['email'] ?>" required>
                            </div>
                            <div class="btn-area"><input type="submit" name="Update" value="Update" class="submit-btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>