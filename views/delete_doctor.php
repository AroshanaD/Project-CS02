<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>
        
        <form class="form" method="post">
            <div class="form-container">
                <div id="form-img">
                </div>
                <div id="form-1">
                    
                <div class="topic">Delete Doctor</div>
                    <div class="label">
                        <label for="id">Id</label>
                    </div>
                    <div class="input">
                        <input type="text" value="<?php echo $_POST['details']['id'] ?>" name="id" disabled>
                    </div>
                    <div class="label">
                        <label for="f_name">First Name</label>
                    </div>
                    <div class="input">
                        <input type="text" value="<?php echo $_POST['details']['f_name'] ?>" name="f_name" disabled>
                    </div>
                    <div class="label">
                        <label for="l_name">Last Name</label>
                    </div>
                    <div class="input">
                        <input type="text" value="<?php echo $_POST['details']['l_name'] ?>" name="l_name" disabled>
                    </div>
                    <div class="label">
                        <label for="qualification">Qualifications</label>
                    </div>
                    <div class="input">
                        <input type="text" value="<?php echo $_POST['details']['qualification'] ?>" name="qualification" disabled>
                    </div>
                </div>

                <div id="form-2">
                    <div class="label">
                        <label for="fee">Charges</label>
                    </div>
                    <div class="input">
                        <input type="number" value="<?php echo $_POST['details']['fee'] ?>" name="fee" disabled>
                    </div>
                    <div class="label">
                        <label for="address">Address</label>
                    </div>
                    <div class="input">
                        <input type="text" value="<?php echo $_POST['details']['address'] ?>" name="address" disabled>
                    </div>
                    <div class="label">
                        <label for="contact">Contact No</label>
                    </div>
                    <div class="input">
                        <input type="text" value="<?php echo $_POST['details']['contact_no'] ?>" name="contact" disabled required>
                    </div>
                    <div class="label">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="input">
                        <input type="text" value="<?php echo $_POST['details']['email'] ?>" name="email" disabled required>
                    </div>
                    <div><input type="submit" name="Delete" value="Delete" class="btn"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>