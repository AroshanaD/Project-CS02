<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
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
                    <div class="label">
                        <label for="staff">Staff</label>
                    </div>
                    <div class="input">
                        <select name="category" id="category" required>
                            <option value="" disabled hidden selected> Select Category </option>
                            <option value="pharmacist">Pharmacist</option>
                            <option value="lab_technician">Lab technician</option>
                            <option value="receptionist">Receptionist</option>
                            <option value="supervisor">Supervisor</option>
                        </select>
                    </div>
                    <div class="label">
                        <label for="id">Id</label>
                    </div>
                    <div class="input" id="id_f">
                        <input type="text" name="id" id="id" disabled required>
                    </div>
                    <div class="label">
                        <label for="f_name">First name</label>
                    </div>
                    <div class="input" id="fname_f">
                        <input type="text" id=fname name="fname" required>
                    </div>
                    <div class="label">
                        <label for="l_name">Last name</label>
                    </div>
                    <div class="input" id="lname_f">
                        <input type="text" id="lname" name="lname" required>
                    </div>
                    <div class="label">
                        <label for="gender">Gender</label>
                    </div>
                    <div class="input">
                        <select id="gender" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>

                </div>
                <div id="form-2">
                    <div class="label">
                        <label for="birthday">Birthday</label>
                    </div>
                    <div class="input" id="bday_f">
                        <input type="date" id="birthday" name="birthday" required>
                    </div>
                    <div class="label">
                        <label for="address">Address</label>
                    </div>
                    <div class="input" id="address_f">
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="label">
                        <label for="contact">Contact No</label>
                    </div>
                    <div class="input" id="contact_f">
                        <input type="tel" id="contact" name="contact" required>
                    </div>
                    <div class="label">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="input" id="email_f">
                        <input type="email" id="email" name="email" required>
                    </div>
                    <input type="submit" name="Add" value="Add" class="btn">
                    <div id="form-message"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>