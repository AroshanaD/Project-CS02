<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/project-cs02/files/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href=<?php echo Router::base_url() . "/files/style1.css" ?>>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    <script rel="text/javascript" src="/project-cs02/files/js/login.js"></script>
</head>

<body>
    <div class="container-3">
        <div class="nav">
            <a href=<?php echo Router::site_url() . '/main' ?>><button class="main-button">Home</button></a>
            <a href=<?php echo Router::site_url() . "/register" ?>><button class="main-button">Register</button></a>
            <a href=<?php echo Router::site_url() . "/user/dashboard" ?>><button class="main-button">Dashboard</button></a>
        </div>
        <form class="form">
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
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
                    <div style="text-align:left"><a href="<?php echo Router::site_url() . '/user/reset_password' ?>" id="login-ref">Forget password?</a>
                        <a href=<?php echo Router::site_url() . '/register' ?> id="login-ref">Not already an user</a></div></br>
                    <div>
                        <button type="submit" name="login-submit" class="btn">LOGIN</button>
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