
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_Profile_data_re_v81r.png'?>);background-repeat:no-repeat">
        <div class="container">   
                <div class="block">
                    <form action ="#" method = "POST">
                        <div class="form-box">
                            
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
                            
                            <div class="btn-area">
                                <input type="submit" value="Confirm" class="submit-btn">
                            </div>
                            <div>
                                <br><a href='change_password.php'>Change password?</a>
                            </div>
                        </div>    
                    </form>
                </div>                   
            </div>
        </div> 
    </body>

</html>