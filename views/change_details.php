
    <div style="background:white;">
        <div class="container">   
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/login.svg' ?>)"></div>
                    <form action ="#" method = "POST">
                        <div class="right">
                            
                            <div class="title">Change Details</div>
                            <div class="label">
                                <label for="phar_details">User Details</label>
                            </div>
                            <div class="input">
                                <input type="textarea" name="userdetails" required>
                            </div>
                            <div class="label">
                                <label for="phar_contact">Contact No</label>
                            </div>
                            <div class="input">
                                <input type="tel" name="contact" pattern="[0-9]{3}[0-9]{2}[0-9]{2}[0-9]{3}" required>
                            </div>
                            <div class="label">
                                <label for="phar_address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" name="address" required>
                            </div>
                            <div class="label">
                                <label for="phar_email">Email</label>
                            </div>
                            <div class="input">
                                <input type="email" name="email" maxlength ="50" required>
                            </div>
                            
                            <div>
                                <input type="submit" value="Confirm" class="btn">
                            </div>
                            <div>
                                <br><a href='<?php echo Router::site_url()."/User/change_password"?>'>Change password?</a>
                            </div>
                        </div>    
                    </form>
                </div>                   
            </div>
        </div> 
    </body>

</html>