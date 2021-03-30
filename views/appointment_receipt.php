<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?> type="text/css" media="screen">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/print.css' ?> type="text/css" media="print">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src=<?php echo Router::base_url() . '/files/js/appointment_invoice.js' ?> type="text/javascript"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>
        
        <div class="form">
            <div class="form-container">
                <div id="form-img">
                </div>
                <div id="form-1" style="width:200px" >
                    <div class="label" style="color:black; font-size:17px;font-weight:bold;margin-bottom:20px;font-family: 'Poppins', sans-serif;"><u>Patient Details</u></div>
                    <div class="label">
                        <label>Name</label>
                    </div>
                    <div class="input" style="font-size: 14px;">
                        <label><?php echo $_POST['details']['f_name']." ".$_POST['details']['l_name'] ?></label>
                    </div><br>
                    <div class="label">
                        <label>Appointment No</label>
                    </div>
                    <div class="input" style="font-size: 14px;">
                        <label><?php echo "No: ". $_POST['details']['Seat_no']?></label>
                    </div><br>
                    <div class="label">
                        <label>Contact No</label>
                    </div>
                    <div class="input" style="font-size: 14px;">
                        <label><?php echo $_POST['details']['contact_no']?></label>
                    </div>

                    <div class="label" style="color:black; font-size:17px;font-weight:bold;margin-bottom:20px;margin-top:40px;font-family: 'Poppins', sans-serif;"><u>Doctor Details</u></div>
                    <div class="label">
                        <label>Name</label>
                    </div>
                    <div class="input" style="font-size: 14px;">
                        <label><?php echo $_POST['details']['doctor_fname']." ".$_POST['details']['doctor_lname'] ?></label>
                    </div><br>
                    <div class="label">
                        <label>Specialization</label>
                    </div>
                    <div class="input" style="font-size: 14px;">
                        <label ><?php echo $_POST['details']['specialization']?></label>
                    </div>
                </div>
                <div id="form-2">
                    <div class="label" style="color:black; font-size:17px;font-weight:bold;margin-bottom:20px;font-family: 'Poppins', sans-serif;"><u>Charges</u></div>
                    <div class="label">
                        <label>Doctor Fee</label>
                    </div>
                    <div class="input" style="font-size: 14px;">
                        <label><?php echo $_POST['details']['fee']?></label>
                    </div><br>
                    <div class="label">
                        <label>Tax</label>
                    </div>
                    <div class="input" style="font-size: 14px;">
                        <label>250</label>
                    </div><br>
                    <div class="label">
                        <label>Total Amount</label>
                    </div>
                    <div class="input" style="font-size: 14px;">
                        <label><?php echo $_POST['details']['fee']+ 250?></label>
                    </div><br>
                </div>
            </div>
            <div style="width:100%; text-align:center">
                <button id="finish" class="btn">Finish</button>
                <button class="btn" id="invoice">Invoice</button>
            </div>
        </div>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>