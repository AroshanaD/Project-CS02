<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>HomePage</title>
        <link rel = "stylesheet" href = "style.css">
    </head>
    <body>
        <nav>
            <ul>
                <li> <a href="main_page.php"><img src = "http://localhost/project/HTML%20files/icons/home-run.png" id = "home-button"></a></li>
                <li> <a href="about_us.html">About Us</a></li>
                <li> <a href="contact_us.html">Contact Us</a></li>
                <li> <a href="login_register.php">Patients</a></li>
                <li> <a href="#">Doctors</a></li>
                <li> <a href="#">Lab</a></li>
                <li> <a href="#">Pharmacy</a></li>
                <li id = "sub-menu"> Staff
                    <div id = "staff">
                    <ul>
                    <li> <a href="#">Receptionist</a></li>
                    <li> <a href="supervisor.php">Supervisor</a></li>
                    </ul>
                    </div>
                </li>
                <li> <a href="appointments.php">Appointments</a></li>
            </ul>
        </nav>
    </body>
</html>