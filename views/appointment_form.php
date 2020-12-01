
        <div class="container">
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/fill_form.svg' ?>)"></div>
                <div class="right">
                    <form method='post' action=<?php echo Router::site_url().'/appointment/receipt' ?>>
                        <div class="form-box">
                            <div class="title">Appointment Form</div>
                            <div class="label">
                                <label for="id">NIC</label>
                            </div>
                            <div class="input">
                                <input type="text" name="id" value="<?php echo $_SESSION['id'] ?>" required disabled>
                            </div>
                            <div class="label">
                                <label for="name">Name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="name" value="<?php echo $_SESSION['f_name']." ".$_SESSION['l_name'] ?>" required disabled>
                            </div>
                            <div class="label">
                                <label for="age">Age</label>
                            </div>
                            <div class="input">
                                <input type="number" name="age" value="<?php $age = date('Y') - date('Y',strtotime($_SESSION['birthday'])); echo $age; ?>" 
                                required disabled>
                            </div>
                            <div class="label">
                                <label for="contact">Contact</label>
                            </div>
                            <div class="input">
                                <input type="tel" name="contact" value="<?php echo $_SESSION['contact_no'] ?>" required disabled>
                            </div>
                            <div class="label">
                                <label for="email">Email</label>
                            </div>
                            <div class="input">
                                <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" required disabled>
                            </div>
                            <div class="label">
                                <label for="payment">Payment Method</label>
                            </div>
                            <div class="radio-btn">
                                <label for="method1">Method 1</label>
                                <input type="radio" id="method1" name="method" value="method1">
                                <label for="method2">Method 2</label>
                                <input type="radio" id="method2" name="method" value="method2">
                            </div>
                            <div class="label">
                                <label for="doc_charges">Doctor Charges</label>
                            </div>
                            <div class="input">
                                <input style="background-color:#d0cde1" type="float" id="d_charges" name="d_charges" value="<?php echo $_SESSION['appointment']['doctor_fee'] ?>" disabled>
                            </div>
                            <div class="label">
                                <label for="tax">Tax</label>
                            </div>
                            <div class="input">
                                <input style="background-color:#d0cde1" type="float" id="tax" name="tax" value=250 required disabled>
                            </div>
                            <div class="label">
                                <label for="total">Total Amount</label>
                            </div>
                            <div class="input">
                                <input style="background-color:#d0cde1" type="float" id="total" name="total" value="<?php echo ($_SESSION['appointment']['doctor_fee'] + 250) ?>" required disabled>
                            </div>
                            <div class="label">
                                <label for="payment">Acknowledge & Proceed</label>
                                <input type="checkbox" id="agree" name="agree" value="agree" required>
                            </div>
                            <div class="btn-area"><input type="submit" value="Proceed" class="btn"></div>
                        </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
    </body>
</html>