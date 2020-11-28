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
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/appointment.svg' ?>)"></div>
                <div class="right" id="profile">
                    <div class="title">View Appointment</div>
                    <div class="field">Appointment ID   </div><div class="val_field"><?php echo $_SESSION['id']?></div>
                    <div class="field">Date </div><div class="val_field"><?php echo $_SESSION['date']?></div>
                    <div class="field">Time </div><div class="val_field"><?php echo $_SESSION['time']?></div>
                    <div class="field">Doctor ID </div><div class="val_field"><?php echo $_SESSION['doctor_id']?></div>
                    </div>
            </div>
</body>
</html>