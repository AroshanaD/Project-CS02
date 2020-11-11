
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_team_ih79.png'?>);background-repeat:no-repeat">
        <div class="container">
                <div class="block">
                    <form method = "POST">
                       <div class="form-box">
                           <div class="title">Delete Doctors</div>
                           <div class="label">
                                <label for="id">Id</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['id'] ?>" name="id" disabled>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['f_name'] ?>" name="f_name" disabled>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['l_name'] ?>" name="l_name" disabled>
                            </div>
                            <div class="label">
                                <label for="qualification">Qualifications</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['qualification'] ?>" name="qualification" disabled>
                            </div>
                            <div class="label">
                                <label for="fee">Charges</label>
                            </div>
                            <div class="input">
                                <input type="number" value="<?php echo $_POST['details']['fee'] ?>" name="fee" disabled>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['address'] ?>" name="address" disabled>
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
                            <div class="btn-area"><input type="submit" name="Delete" value="Delete" class="submit-btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>