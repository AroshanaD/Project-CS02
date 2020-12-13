<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src='/project-cs02/files/js/autofill_spec.js' type="text/javascript"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>
        
        <form class="form" method="get" action=<?php echo Router::site_url() . '/Appointment/select_doctor' ?>>
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
                    <div style="font-size:15px; font-weight:bold; border:none; text-align:left">Patient Details</div>
                    <div class="label">
                        <label>Name</label>
                    </div>
                    <div class="input">
                        <label>-</label>
                    </div>
                    <div class="label">
                        <label>ID</label>
                    </div>
                    <div class="input">
                        <label>-</label>
                    </div>
                    <div class="label">
                        <label>Contact No</label>
                    </div>
                    <div class="input">
                        <label>-</label>
                    </div>

                    <div style="font-size:15px; font-weight:bold; border:none; text-align:left">Doctor Details</div>
                    <div class="label">
                        <label>Name</label>
                    </div>
                    <div class="input">
                        <label>-</label>
                    </div>
                    <div class="label">
                        <label>Specialization</label>
                    </div>
                    <div class="input">
                        <label>-</label>
                    </div>

                    <div style="font-size:15px; font-weight:bold; border:none; text-align:left">Charges</div>
                    <div class="label">
                        <label>Doctor Fee</label>
                    </div>
                    <div class="input">
                        <label>-</label>
                    </div>
                    <div class="label">
                        <label>Tax</label>
                    </div>
                    <div class="input">
                        <label>-</label>
                    </div>
                    <div class="label">
                        <label>Total Amount</label>
                    </div>
                    <div class="input">
                        <label>-</label>
                    </div>
                    <input type="submit" value="Save" class="btn">
                    <div id="form-message"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>