<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js'?>"></script>
        <script src=<?php echo Router::base_url().'/files/js/autofill_spec.js'?> type="text/javascript"></script>
        <script src=<?php echo Router::base_url().'/files/js/select_date.js'?> type="text/javascript"></script>
    </head>

    <body>
        <div class ="container-5">
                <div class="nav">
                    <?php include 'header.php'; ?>
                </div>
                    
                <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

            <div class=container-t>
                <div class="contact-box" style="margin:0px">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/calendar.svg' ?>)"></div>
                    <div class="right" style="max-width:500px">
                        <form method="post" action="<?php echo Router::site_url().'/appointment/fill_form' ?>">
                            <div class="s-title" style="height:auto">
                                    <label for="date">Appointment Date</label>
                                </div>
                            <div class="input">
                                <input type="date" name="date">
                            </div>
                                    
                            <div><input type="submit" value="Select" class="btn"></div>
                        </form>
                    </div>
                </div>
                <div class="contact-box" style="margin:0px">
                    <div class="right" style="width:350px; background-color:white">
                        <div class="title" style="border:none">Doctor Details</div>
                        <div class="field">Name</div><div class="val_field"><?php echo "Dr. ".$_SESSION['appointment']['doctor_name']?></div>
                        <div class="field">Specialization</div><div class="val_field"><?php echo $_SESSION['search']['specialization']?></div>
                        <div class="field">Qualification</div><div class="val_field"><?php echo $_SESSION['appointment']['doctor_qualification']?></div>
                        <div class="field">Fee</div><div class="val_field"><?php echo "Rs.".$_SESSION['appointment']['doctor_fee']?></div>
                    </div>
                    <div class="right">
                        <div class="title" style="border:none">Week Schedule</div>
                        <div class="table" style="width: inherit; border: none">
                            <table style="width:fit-content">

                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">All rights are reserved</div>
        </div>
        
    </body>
</html>