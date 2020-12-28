<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/vendor_validate.js"></script>
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
                <div class="topic">Update vendor</div>
                    <div class="label">
                        <label for="id">Id</label>
                    </div>
                    <div class="input">
                        <input type="text" name="id" id="id" value="<?php echo $_POST['details']['id'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="f_name">Name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="f_name" id="fname" value="<?php echo $_POST['details']['name'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="address">Address</label>
                    </div>
                    <div class="input" id="address_f">
                        <input type="text" name="address" id="address" value="<?php echo $_POST['details']['address'] ?>">
                    </div>
                    <div class="label">
                        <label for="contact">Contact No</label>
                    </div>
                    <div class="input" id="contact_f">
                        <input type="tel" name="contact" id="contact" value="<?php echo $_POST['details']['contact_no'] ?>">
                    </div>
                    <div class="label">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="input" id="email_f">
                        <input type="email" name="email" id="email" value="<?php echo $_POST['details']['email'] ?>">
                    </div>
                    <div><input type="submit" name="Update" value="Update" class="btn"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>