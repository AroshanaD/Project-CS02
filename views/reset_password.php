<!DOCTYPE html>
<html>

<head>
    <title><?php $url = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
            if ($url[3] && $url[4]) {
                echo ucwords($url[3]) . '/' . ucwords($url[4]);
            }; ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css' ?>>
    <link rel="stylesheet" href=<?php echo Router::base_url().'/files/main.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script src=<?php echo Router::base_url().'/files/js/reset_password.js' ?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url().'/files/js/validation.js' ?> type="text/javascript"></script>
</head>

<body>
    <div class="container-3">
        <div class="nav">
            <a href=<?php echo Router::site_url() . '/main' ?>><button class="main-button">Home</button></a>
            <a href=<?php echo Router::site_url() . "/register" ?>><button class="main-button">Register</button></a>
            <a href=<?php echo Router::site_url() . "/user/dashboard" ?>><button class="main-button">Dashboard</button></a>
        </div>
        <form class="form" method="post" action=<?php echo Router::site_url().'/set_password' ?>>
        <div class="topic">Reset Passwords</div>
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
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
            </div>
        </form>
        <div class="footer">
        </div>
    </div>
</body>

</html>