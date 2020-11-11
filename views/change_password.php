
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_authentication_fsn5.png'?>);background-repeat:no-repeat">
        <div class="container">    
                <div class="block">
                    <form action ="#" method = "POST">
                        <div class="form-box">
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
                            
                            <div class="btn-area">
                                <input type="submit" value="Confirm" class="submit-btn">
                            </div>
                            <div>
                                <br><a href='change_details.php'>Change Details?</a>
                            </div>
                        </div>    
                    </form>
                </div>                   
            </div>
        </div> 
    </body>

</html>