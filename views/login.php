<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="/project-cs02/files/js/jquery-3.5.1.js"></script>
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/main.css" ?>>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
        <script rel="text/javascript" src="/project-cs02/files/js/login.js"></script>
    </head>
    <body style="background:white;">
        <div class="main-nav" style="background: #023047">
            <div></div>
            <div></div>
            <div style="color:#fb8500">MedCaid Hospitals</div>
            <div>
                <a href=<?php echo Router::site_url().'/main' ?>><button class="main-button">Home</button></a>
                <a href=<?php echo Router::site_url()."/register" ?>><button class="main-button">Register</button></a>
                <a href=<?php echo Router::site_url()."/user/dashboard" ?>><button class="main-button">Dashboard</button></a>
            </div>
        </div>
        <div class="container">
            <div class="contact-box">
            <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/login.svg' ?>)"></div>
                    <form method="post">
                        <div class="right">
                            <div class="title">Login</div>
                            <div class="label">
                                <label for="userid">USER ID</label>
                            </div>
                            <div class="input">
                                <input type="text" name="userid" id="id" required>
                            </div>
                            <div class="label">
                                <label for="password">PASSWORD</label>
                            </div>
                            <div class="input">
                                <input type="password" name="password" id="password" required>
                            </div></br>
                            <div style="text-align:left"><a href="<?php echo Router::site_url().'/user/reset_password'?>" id="login-ref">Forget password?</a>
                            <a href=<?php echo Router::site_url().'/register'?> id="login-ref">Not already an user</a></div></br>
                            <div>
                                <button type="submit" name="login-submit" class = "btn" >LOGIN</button>
                            </div>
                            <div id="form-message"></div>
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>