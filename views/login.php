<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="/project-cs02/files/js/jquery-3.5.1.js"></script>
    <link rel="stylesheet" href=<?php echo Router::base_url() . "/files/style1.css" ?>>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/1b83d32a6d.js" crossorigin="anonymous"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/login.js"></script>
    
</head>

<body>
    <div class="container-3">
        <div class="nav">
            <a href=<?php echo Router::site_url() . "/user/dashboard" ?>><i class="fas fa-id-badge"></i> Dashboard</a>
            <a href=<?php echo Router::site_url() . "/register" ?>><i class="fas fa-user-plus"></i> Register</a>
            <a href=<?php echo Router::site_url() . '/main' ?>><i class="fas fa-home"></i> Home</a>
        </div>
        <form class="form">
            <div class="form-container1" style="background-color: transparent;">
                <div id="form-img" style="background-color: transparent;" >
                <img src="<?php echo Router::base_url() . '/files/icons/login.svg' ?>" style="width:500px">
                </div>
                <div id="form-1">
                    <div class="title">Welcome to Medcaid hospital</div>
                    <div class="small-title">Login to your account</div>
                    <div class="label">
                        <label for="id">User ID</label>
                    </div>
                    <div class="input">
                        <input type="text" name="id" id="id" required>
                    </div>
                    <div class="label">
                        <label for="password">Password</label>
                    </div>
                    <div class="input">
                        <input type="password" name="password" id="password" required>
                    </div></br>
                    <div>
                        <a href="<?php echo Router::site_url() . '/user/reset_password' ?>" id="login-ref" style=" color: #743ebb; float:left; font-size:13px">Forget password?</a>
                        <a href=<?php echo Router::site_url() . '/register' ?> id="login-ref" style=" color: #743ebb; float:right; font-size:13px; margin-right:20px">Not already an user(Sign up)</a>
                    </div></br>
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