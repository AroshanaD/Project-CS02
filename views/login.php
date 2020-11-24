<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/main.css" ?>>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    </head>
    <body style="background-image: url(<?php echo Router::base_url().'/files/icons/undraw_authentication_fsn5.png'?>);background-repeat:no-repeat">
    <div class="main-nav" style="background:#98B5FF">
            <div></div>
            <div></div>
           <div>MedCaid Hospitals</div>
           <div>
                <a href=<?php echo Router::site_url().'/main' ?>><button class="main-button">Home</button></a>
                <a href=<?php echo Router::site_url()."/register" ?>><button class="main-button">Register</button></a>
                <a href=<?php echo Router::site_url()."/user/dashboard" ?>><button class="main-button">Dashboard</button></a>
           </div>
       </div>
        <div class="container">
            <div class="block">
                    <form method="post">
                        <div class="form-box">
                            <div class="title">Login</div>
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
                            <p><a href=<?php echo Router::site_url().'/register'?>>Not already an user</a></p>
                        
                            <div class="btn-area">
                                <button type="submit" name="login-submit" class = "submit-btn" >Login</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>