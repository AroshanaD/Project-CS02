
    <div style="background:white;">
        <div class="container">    
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/change_password.svg' ?>)"></div>
                    <form action ="#" method = "POST">
                        <div class="right">
                            <div class="title">CHANGE PASSWORD</div>
                            <div class="label">
                                <label for="phar_oldpw">Enter Old Password</label>
                            </div>
                            <div class="input">
                                <input type="password" name="old-password" minlength="8" maxlength="12" required>
                            </div>
                            <div class="label">
                                <label for="phar_newpw">Enter New Password</label>
                            </div>
                            <div class="input">
                                <input type="password" name="new-password" minlength="8" maxlength="12" required>
                            </div>
                            <div class="label">
                                <label for="phar_repw">Re-Enter password </label>
                            </div>
                            <div class="input">
                            <input type="password" name="re-password" minlength="8" maxlength="12" required>
                            </div>
                            
                            <div>
                                <input type="submit" value="Confirm" class="btn">
                            </div>
                            <div>
                                <br><a href='<?php echo Router::site_url()."/User/change_details"?>'>Change Details?</a>
                            </div>
                        </div>    
                    </form>
                </div>                   
            </div>
        </div> 
    </body>

</html>