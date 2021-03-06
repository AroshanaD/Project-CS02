<!DOCTYPE html>
<html>

<head>
    <title><?php $url = explode('/', rtrim($_SERVER['REQUEST_URI'], '/'));
            if ($url[3] && $url[4]) {
                echo ucwords($url[3]) . '/' . ucwords($url[4]);
            }; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src=<?php echo Router::base_url() . '/files/js/reset_password.js' ?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url() . '/files/js/validation.js' ?> type="text/javascript"></script>
</head>

<body>
    <div class="container-3">
        <div class="nav">
            <a href=<?php echo Router::site_url() . '/main' ?>><button class="main-button">Home</button></a>
            <a href=<?php echo Router::site_url() . "/register" ?>><button class="main-button">Register</button></a>
            <a href=<?php echo Router::site_url() . "/user/dashboard" ?>><button class="main-button">Dashboard</button></a>
        </div>
        <form class="form" method="post" action=<?php echo Router::site_url().'/user/set_password' ?>>
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
                <div class="topic">Set Passwords</div>
                    <div class="label">
                        <label for="phar_newpw">Enter New Password</label>
                    </div>
                    <div class="input" id="password_f">
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="label">
                        <label for="phar_repw">Re-Enter password </label>
                    </div>
                    <div class="input" id="rpassword_f">
                        <input type="password" name="re-password" id="rpassword" required>
                    </div>
                    <div>
                        <input type="submit" value="Confirm" class="btn">
                    </div>
                    <div id="form-message"></div>
                </div>
            </div>
        </form>
        <div class="footer">
        </div>
    </div>
</body>

</html>