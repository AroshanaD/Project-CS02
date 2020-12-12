
    <script type="text/javascript" src="/project-cs02/files/js/autofill_spec.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/doctor_validate.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>

    <div style="background:white;">
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/add_doctor.svg' ?>)"></div>
                    <form method = "POST">
                       <div class="right">
                           <div class="title">ADD DOCTORS</div>
                            <div class="label">
                                <label for="id">Id</label>
                            </div>
                            <div class="input" id="id_f">
                                <input type="text" name="id" id="id" disabled required>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input" id="fname_f">
                                <input type="text" name="f_name" id="fname" required>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input" id="lname_f">
                                <input type="text" name="l_name" id="lname" required>
                            </div>
                            <div class="label">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="input">
                                <select id="gender" name="gender" required>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="qualification">Qualification</label>
                            </div>
                            <div class="input" id="text_f">
                                <input type="text" name="qualification" id="qualification" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input" id="address_f">
                                <input type="text" name="address" id="address" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input" id="contact_f">
                                <input type="text" name="contact" id="contact" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input" id="email_f">
                                <input type="text" name="email" id="email" required>
                            </div>
                            <div class="label">
                                <label for="specialization">Specialization</label>
                            </div>
                            <div class="input">
                                <select name="specialization" id="search_spec" required>
                                    <option value="Any">Any Specialization</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="fee">Fees</label>
                            </div>
                            <div class="input">
                                <input type="number" name="fee" id="fee" required>
                            </div>
                            <div><input type="submit" value="Add" class="btn"></div>
                            <div id="form-message"></div>
                        </div >
                    </form>
                </div>
        </div> 
    </body>

</html>