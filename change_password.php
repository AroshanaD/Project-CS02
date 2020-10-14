<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <!--link rel="stylesheet" href="pharmasist.css"-->
    </head>

    <body>
    <div class="container-small">Hospital Management System</div>
        <div class="container">
            <div class="form-container">
                    
                <div class="register">
                    <div class="form-name">Change Details</div>
                    <div class = "btn-area">
                        <button type = "button" id = "change-button" class = "toggle-button" onclick="location.href='change_details.php';">Change Details </button>
                        <button type = "button" id = "password-button" class = "toggle-button" onclick="location.href='change_password.php';">Change Password</button>
                    </div>
                    <form action ="#" method = "POST">
                        <div class="form-box">
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
                                <input type="submit" value="Confirm" class="inventory-btn">
                            </div>
                        </div>    
                    </form>
                </div>                   
            </div>
        </div> 
    </body>

</html>