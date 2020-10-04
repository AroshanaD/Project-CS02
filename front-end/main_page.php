<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HomePage</title>
        <link rel = "stylesheet" href = "style.css">
    </head>
    <body>
        <ul>
            <li class = "col-1"><a class="active" href="main_page.php"> <img src="icons/home.png"></a></li>
            <li class = "col-2"><a href="#">About Us</a></li>
            <li class = "col-2"><a href="#">Contact Us</a></li>
            <li class = "col-2"><a href="#">Appointments</a></li>
            <li class = "col-2"><a href="#">Doctor Schedule</a></li>
        </ul>

        <div class = "row">
            <div class = "col-4">
                <div class = "block-0">
                    <img src="icons/patient.png">
                    <a href="#">Patient</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <img src="icons/doctor.png">
                    <a href="#">Doctor</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <img src="icons/receptionist.png">
                    <a href="#">Receptionist</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <img src="icons/lab.png">
                    <a href="#">Lab Technician</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <img src="icons/pharmacy.png">
                    <a href="#">Pharmacist</a>
                </div>
            </div>
            <div class = "col-4">
                <div class = "block-0">
                    <img src="icons/admin.png">
                    <a href="#">Supervisor</a>
                </div>
            </div>
        </div>
        <div class = "row">
            <div class = "col-6">
                <div class = "block-1">
                    About Us
                </div>
            </div>
            <div class = "col-6">
                <div class = "block-1">
                    Contact Us
                </div>
            </div>
        </div>
    </body>
</html>