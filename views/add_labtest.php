
    <div  style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_science_fqhl.png'?>);background-repeat:no-repeat">
        <div class="container">
                <div class="block">
                    <form method = "POST">
                       <div class="form-box">
                           <div class="title">Create Lab Test</div>
                            <h1>Patient Details</h1>
                            <div class="label">
                                <label for="patient_id">Patient Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="patient_id" required>
                            </div>
                            <div class="label">
                                <label for="full_name">Full name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="full_name" required>
                            </div>
                            <div class="label">
                                <label for="age">Age</label>
                            </div>
                            <div class="input">
                                <input type="text" name="age" required>
                            </div>
                            <div class="label">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="input">
                                <select name="gender" required>
                                    <option value="any">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">female</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input">
                                <input type="tel" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input">
                                <input type="email" name="email" required>
                            </div>
                            <h1>Test Details</h1>
                            <div class="label">
                                <label for="test1">Test Details</label>
                            </div>
                            <div class="input">
                                <select name="test1" required>
                                    <option value="Any">Any Test</option>
                                    <option value="#">#</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="test2">Test Details</label>
                            </div>
                            <div class="input">
                                <select name="test2" required>
                                    <option value="Any">Any Test</option>
                                    <option value="#">#</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="test3">Test Details</label>
                            </div>
                            <div class="input">
                                <select name="test3" required>
                                    <option value="Any">Any Test</option>
                                    <option value="#">#</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="test4">Test Details</label>
                            </div>
                            <div class="input">
                                <select name="test4" required>
                                    <option value="Any">Any Test</option>
                                    <option value="#">#</option>
                                </select>
                            </div>
                            
                            <div class="btn-area"><input type="submit" value="Add" class="submit-btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>