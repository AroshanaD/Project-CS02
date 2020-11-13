<!DOCTYPE html>
<html>
    <head>
        <title><?php $url = explode('/',rtrim($_SERVER['REQUEST_URI'],'/'));
                if($url[3]&&$url[4]){echo ucwords($url[3]).'/'.ucwords($url[4]);}; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style.css'?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src=<?php echo Router::base_url().'/files/js/reset_password.js'?> type="text/javascript"></script>
        <script src=<?php echo Router::base_url().'/files/js/validation.js'?> type="text/javascript"></script>
    </head>
    <body>
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_authentication_fsn5.png'?>);background-repeat:no-repeat">
        <div class="container">    
                <div class="block">
                    <form action=<?php echo Router::site_url().'/user/set_password' ?> method = "POST">
                        <div class="form-box">
                            <div class="title">CHANGE PASSWORD</div>
                            <div class="label">
                                <label for="phar_newpw">Enter New Password</label>
                            </div>
                            <div class="input" id="password_f">
                                <input type="password" name="password" id="password" required>
                            </div>
                            <div class="label">
                                <label for="phar_repw">Re-Enter password </label>
                            </div>
                            <div class="input" id = "rpassword_f">
                                <input type="password" name="re-password" id = "rpassword" required>
                            </div>
                            <div class="btn-area">
                                <input type="submit" value="Confirm" class="submit-btn">
                            </div>
                            <div id="form-message"></div>
                        </div>    
                    </form>
                </div>                   
            </div>
        </div> 
    </body>

</html>