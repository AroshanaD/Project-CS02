<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Patient</title>
        <link rel="stylesheet" href="patient.css">
    </head>
    <body>
        <nav>
            <ul>
                <li> <a href="main_page.php">Home</a></li>
                <li> <a href="appointments.php">Appointments</a></li>
                <li> <?php
                    $patient_name = $_SESSION['f_name'];
                    echo "Welcome $patient_name";
                    ?>
                </li>
            </ul>
        </nav>
    </body>
</html>