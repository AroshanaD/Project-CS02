<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
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
                    <div class="topic">Appointment Details</div>
                    <div class="label">
                        <label>Patient Name</label>      
                    </div>

                    <div class="label" style="color:black" >
                        <label><?php echo $_POST['details']['f_name']." ".$_POST['details']['l_name'] ?></label>
                    </div>

                    <div class="label" style="margin-top:20px">
                        <label>Birthday</label>
                    </div>
                    <div class="label" style="color:black">
                        <label><?php echo $_POST['details']['birthday']?></label>
                    </div>

                    <div class="label" style="margin-top:20px">
                        <label>Contact_no</label>
                    </div>

                    <div class="label" style="color:black">
                        <label><?php echo $_POST['details']['contact_no']?></label>
                    </div>

                    <div class="label" style="margin-top:20px">
                        <label>Doctor name</label>
                    </div>

                    <div class="label" style="color:black">
                        <label><?php echo $_POST['details']['doctor_fname']." ".$_POST['details']['doctor_lname']?></label>
                    </div>
                    
                    <div class="label" style="margin-top:20px">
                        <label>Appointment No</label>
                    </div>

                    <div class="label" style="color:black">
                        <label><?php echo $_POST['details']['Seat_no']?></label>
                    </div>

                    <div class="label" style="margin-top:20px">
                        <label>Appointment date</label>
                    </div>

                    <div class="label" style="color:black">
                        <label><?php echo $_POST['details']['Date']?></label>
                    </div>

                    <div class="label" style="margin-top:20px">
                        <label>Appointment time</label>
                    </div>

                    <div class="label" style="color:black">
                        <label><?php echo $_POST['details']['time']?></label>
                    </div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>