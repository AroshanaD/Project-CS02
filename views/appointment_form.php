<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>
        
        <form class="form" method='post' action=<?php echo Router::site_url() . '/appointment/payment' ?>>
            <div class="form-container">
                <div id="form-img">
                </div>
                <div id="form-1">
                <div class="topic">Patient Details</div>
                    <div class="label">
                        <label for="id">NIC</label>
                    </div>
                    <div class="input">
                        <input type="text" name="id" value="<?php echo $_SESSION['NIC'] ?>" required disabled>
                    </div>
                    <div class="label">
                        <label for="name">Name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="name" value="<?php echo $_SESSION['f_name'] . " " . $_SESSION['l_name'] ?>" required disabled>
                    </div>
                    <div class="label">
                        <label for="age">Age</label>
                    </div>
                    <div class="input">
                        <input type="number" name="age" value="<?php $age = date('Y') - date('Y', strtotime($_SESSION['birthday']));
                                                                echo $age; ?>" required disabled>
                    </div>
                    <div class="label">
                        <label for="contact">Contact</label>
                    </div>
                    <div class="input">
                        <input type="tel" name="contact" value="<?php echo $_SESSION['contact_no'] ?>" required disabled>
                    </div>
                    <div class="label">
                        <label for="email">Email</label>
                    </div>
                    <div class="input">
                        <input type="email" name="email" value="<?php echo $_SESSION['email'] ?>" required disabled>
                    </div>
                </div>
                <div id="form-2">
                    <div class="label">
                        <label for="appoint_no">Appointment No</label>
                    </div>
                    <div class="input">
                        <input style="background-color:#d0cde1" type="float" id="d_charges" name="d_charges" value="<?php echo ($_SESSION['appointment']['seat_no']+ 1) ?>" disabled>
                    </div>
                    <div class="label">
                        <label for="doc_charges">Doctor Charges</label>
                    </div>
                    <div class="input">
                        <input style="background-color:#d0cde1" type="float" id="d_charges" name="d_charges" value="<?php echo $_SESSION['appointment']['doctor_fee'] ?>" disabled>
                    </div>
                    <div class="label">
                        <label for="tax">Tax</label>
                    </div>
                    <div class="input">
                        <input style="background-color:#d0cde1" type="float" id="tax" name="tax" value=250 required disabled>
                    </div>
                    <div class="label">
                        <label for="total">Total Amount</label>
                    </div>
                    <div class="input">
                        <input style="background-color:#d0cde1" type="float" id="total" name="total" value="<?php echo ($_SESSION['appointment']['doctor_fee'] + 250) ?>" required disabled>
                    </div>
                    <div class="label">
                        <label for="payment">Confirm information</label>
                        <input type="checkbox" id="agree" name="agree" value="agree" required>
                    </div>
                    <input type="submit" value="Proceed" class="btn">
                    <div id="form-message"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>