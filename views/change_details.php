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
                                <input type="submit" value="Confirm" class="inventory-btn">
                            </div>
                        </div>    
                    </form>
                </div>                   
            </div>
        </div> 
    </body>

</html>