
    <script type="text/javascript" src="/project-cs02/files/js/autofill_spec.js"></script>

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
                            <div class="input">
                                <input type="text" name="id" required>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="f_name" required>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="l_name" required>
                            </div>
                            <div class="label">
                                <label for="qualifi">Qualification</label>
                            </div>
                            <div class="input">
                                <input type="text" name="qualifi" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" name="address" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input">
                                <input type="text" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input">
                                <input type="text" name="email" required>
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
                                <input type="text" name="fee" required>
                            </div>
                            <div><input type="submit" value="Add" class="btn"></div>
                        </div >
                    </form>
                </div>
        </div> 
    </body>

</html>