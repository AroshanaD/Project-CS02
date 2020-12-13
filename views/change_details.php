<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
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
                        <label for="phar_contact">Contact No</label>
                    </div>
                    <div class="input">
                        <input type="tel" name="contact" pattern="[0-9]{3}[0-9]{2}[0-9]{2}[0-9]{3}" required>
                    </div>
                    <div class="label">
                        <label for="phar_address">Address</label>
                    </div>
                    <div class="input">
                        <input type="text" name="address" required>
                    </div>
                    <div class="label">
                        <label for="phar_email">Email</label>
                    </div>
                    <div class="input">
                        <input type="email" name="email" maxlength="50" required>
                    </div>

                    <div>
                        <input type="submit" value="Confirm" class="btn">
                    </div>
                    <div>
                        <br><a href='<?php echo Router::site_url() . "/User/change_password" ?>'>Change password?</a>
                    </div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>