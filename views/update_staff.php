<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/staff_validate.js"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/validation.js"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

        <form class="form">
            <div class="form-container">
                <div id="form-img">
                </div>
                <div id="form-1">
                <div class="topic">Update Staff</div>
                    <div class="label">
                        <label for="staff">Staff</label>
                    </div>
                    <div class="input">
                        <select name="staff" id="category" disabled>
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
                        <input type="text" name="id" id="id" value="<?php echo $_POST['details']['id'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="f_name">First Name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="f_name" id="fname" value="<?php echo $_POST['details']['f_name'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="l_name">Last Name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="l_name" id="lname" value="<?php echo $_POST['details']['l_name'] ?>" disabled required>
                    </div>
                </div>
                <div id="form-2">
                    <div class="label">
                        <label for="address">Address</label>
                    </div>
                    <div class="input">
                        <input type="text" name="address" id="address" value="<?php echo $_POST['details']['address'] ?>" required>
                    </div>
                    <div class="label">
                        <label for="contact">Contact No</label>
                    </div>
                    <div class="input">
                        <input type="tel" name="contact" id="contact" value="<?php echo $_POST['details']['contact_no'] ?>" required>
                    </div>
                    <div class="label">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="input">
                        <input type="email" name="email" id="email" value="<?php echo $_POST['details']['email'] ?>" required>
                    </div>
                    <div><input type="submit" name="Update" value="Update" class="btn"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>