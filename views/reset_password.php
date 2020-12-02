<!DOCTYPE html>
<html>
    <head>
        <title><?php $url = explode('/',rtrim($_SERVER['REQUEST_URI'],'/'));
                if($url[3]&&$url[4]){echo ucwords($url[3]).'/'.ucwords($url[4]);}; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style.css'?>>
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/main.css'?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src=<?php echo Router::base_url().'/files/js/reset_password.js'?> type="text/javascript"></script>
        <script src=<?php echo Router::base_url().'/files/js/validation.js'?> type="text/javascript"></script>
    </head>
    <body>
        <div class="main-nav" style="background: #023047">
            <div></div>
            <div></div>
            <div style="color:#fb8500">MedCaid Hospitals</div>
            <div>
                <a href=<?php echo Router::site_url().'/main' ?>><button class="main-button">Home</button></a>
                <a href=<?php echo Router::site_url()."/register" ?>><button class="main-button">Register</button></a>
            </div>
        </div>
        <div style="background:white;">
        <div class="container"> 
                <div class="contact-box">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/login.svg' ?>)"></div>   
                    <form action=<?php echo Router::site_url().'/user/set_password' ?> method = "POST">
                        <div class="right">
                            <div class="title">CHANGE PASSWORD</div>
                            <div class="label">
                                <label for="email">Enter Email Address</label>
                            </div>
                            <div class="input" id="email">
                                <input type="email" name="email" id="email" required>
                            </div>
                            <div>
                                <input type="submit" value="Send Reset Email" class="btn">
                            </div>
                            <div id="form-message">Please use the email sent to reset your password</div>
                        </div>    
                    </form>
                </div>                   
            </div>
        </div> 
    </body>

</html>