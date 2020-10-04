<?php
    $host = "localhost";
    $username = "root";
    $userpasswd = "";
    $db = "hospital";

    $connection = mysqli_connect($host,$username,$userpasswd,$db);

    $specialization = $_GET['spec'];
    $doc = $_GET['doctor'];

    $query = "SELECT * FROM doctor WHERE specialization_id = $specialization AND f_name LIKE '$doc%';";
    $query_all = "SELECT * FROM doctor WHERE f_name LIKE '$doc%';";
    $statement = mysqli_stmt_init($connection);
    if($specialization == 'Any'){
        if(!mysqli_stmt_prepare($statement,$query_all)){
            header("Location: appointments.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_execute($statement);
            $result = mysqli_stmt_get_result($statement);
        }
    }
    else{
        if(!mysqli_stmt_prepare($statement,$query)){
            header("Location: appointments.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_execute($statement);
            $result = mysqli_stmt_get_result($statement);
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Select Doctor</title>
        <link rel="stylesheet" href="select_doctor.css">
    </head>

    <body>
        <div id = "background">
            <a href = "main_page.php">
            <img src = "/icons/home-run.png" >
            </a>
            <div id = "list-box">
                <?php
                    while($doctor = $result->fetch_assoc()){
                        echo "Dr. ".$doctor['f_name']." ".$doctor['l_name']."</br>";
                        echo "<input type = 'submit' id = 'submit' name = 'submit' value = 'Select'></br>";
                    }
                ?>
            </div>
        </div>
    </body>
</html>