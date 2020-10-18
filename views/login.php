<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
    </head>
    <body>
        <div class="container-small">Hospital Management System</div>
        <div class="container">
            <div class="form-container">
                <div class="form-name">Login</div>
                    <form action=<?php echo Router::site_url()."/login/authenticate" ?> method="post">
                        <div class="form-box">
                            <div class="label">
                                <label for="userid">User ID</label>
                            </div>
                            <div class="input">
                                <input type="text" name="userid" required>
                            </div>
                            <div class="label">
                                <label for="password">Password</label>
                            </div>
                            <div class="input">
                                <input type="password" name="password" required>
                            </div>
                            <p><a href="#">Forget password?</a></p>
                            <p><a href="#">Not already an user</a></p>
                        </div>
                        <div class="btn-area">
                            <button name="login-submit" class = "submit-btn" >Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>