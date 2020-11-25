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
    <body style="background:white;">
    <div class="main-nav" style="background: #a48df5">
            <div></div>
            <div></div>
           <div style="color:white">MedCaid Hospitals</div>
           <div>
                <a href=<?php echo Router::site_url().'/main' ?>><button class="main-button">Home</button></a>
                <a href=<?php echo Router::site_url()."/register" ?>><button class="main-button">Register</button></a>
                <a href=<?php echo Router::site_url()."/user/dashboard" ?>><button class="main-button">Dashboard</button></a>
           </div>
       </div>
        <div class="container">
            <div class="contact-box">
            <div class="left"></div>
                    <form method="post">
                        <div class="right">
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
                            </div></br>
                            <div><a href="#">Forget password?</a></div>
                            <div><a href=<?php echo Router::site_url().'/register'?>>Not already an user</a></div></br>
                            <div>
                                <button type="submit" name="login-submit" class = "btn" >LOGIN</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div>
    </body>
</html>