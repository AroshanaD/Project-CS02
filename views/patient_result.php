<!DOCTYPE html>
<html>
<head>
<title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
        
</head>

<body>
    <div class="contact-box" id="profile-board">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/lab_test.svg' ?>)"></div>
                <div class="right" id="profile">
                    <div class="title">Lab Test Result</div>
                    <div class="field">Test ID   </div><div class="val_field"><?php echo $_SESSION['id']?></div>
                    <div class="field">Date </div><div class="val_field"><?php echo $_SESSION['date']?></div>
                    <div class="field">Time </div><div class="val_field"><?php echo $_SESSION['time']?></div>
                    <div class="field">Patient Name </div><div class="val_field"><?php echo $_SESSION['patient_name']?></div>
                    <div class="field">Cost  </div><div class="val_field"><?php echo $_SESSION['cost']?></div>
                    <div class="field">Availability </div><div class="val_field"><?php echo $_SESSION['availability']?></div>
                </div>
            </div>
</body>
</html>