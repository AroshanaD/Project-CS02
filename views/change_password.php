<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>
        
        <form class="form">
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
                    <div class="label">
                        <label for="phar_oldpw">Enter Old Password</label>
                    </div>
                    <div class="input">
                        <input type="password" name="old-password" minlength="8" maxlength="12" required>
                    </div>
                    <div class="label">
                        <label for="phar_newpw">Enter New Password</label>
                    </div>
                    <div class="input">
                        <input type="password" name="new-password" minlength="8" maxlength="12" required>
                    </div>
                    <div class="label">
                        <label for="phar_repw">Re-Enter password </label>
                    </div>
                    <div class="input">
                        <input type="password" name="re-password" minlength="8" maxlength="12" required>
                    </div>

                    <div>
                        <input type="submit" value="Confirm" class="btn">
                    </div>
                    <div>
                        <br><a href='<?php echo Router::site_url() . "/User/change_details" ?>'>Change Details?</a>
                    </div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>