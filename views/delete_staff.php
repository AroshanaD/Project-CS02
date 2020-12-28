<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
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
                    <div class="label">
                    <div class="topic">Delete Staff</div>
                        <label for="staff">Staff</label>
                    </div>
                    <div class="input">
                        <select name="staff" disabled>
                            <option value="pharmacist">Pharmacist</option>
                            <option value="lab_technician ">Lab technician</option>
                            <option value="receptionist">Receptionist</option>
                            <option value="supervisor">Supervisor</option>
                        </select>
                    </div>
                    <div class="label">
                        <label for="id">Id</label>
                    </div>
                    <div class="input">
                        <input type="text" name="id" value="<?php echo $_POST['details']['id'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="f_name">First name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="f_name" value="<?php echo $_POST['details']['f_name'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="l_name">Last name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="l_name" value="<?php echo $_POST['details']['l_name'] ?>" disabled required>
                    </div>
                </div>
                <div id="form-2">
                    <div class="label">
                        <label for="address">Address</label>
                    </div>
                    <div class="input">
                        <input type="text" name="address" value="<?php echo $_POST['details']['address'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="contact">Contact No</label>
                    </div>
                    <div class="input">
                        <input type="tel" name="contact" value="<?php echo $_POST['details']['contact_no'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="input">
                        <input type="email" name="email" value="<?php echo $_POST['details']['email'] ?>" disabled required>
                    </div>
                    <div><input type="submit" name="Delete" value="Delete" class="btn"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>