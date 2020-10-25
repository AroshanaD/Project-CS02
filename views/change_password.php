<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>

    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(icons/undraw_authentication_fsn5.png);">
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