<?php
    $host = "localhost";
    $username = "root";
    $userpasswd = "";
    $db = "hospital";

    $connection = mysqli_connect($host,$username,$userpasswd,$db);

    $query = "SELECT * FROM specialization;";
    $statement = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($statement,$query)){
        header("Location: appointments.php?error=sql error");
    }
    else{
        $statement->execute();
        $name_result = $statement->get_result();
    }

    if(isset($_GET['submit-button'])){
        if(!preg_match("/^[a-zA-Z]*$/",$_GET['doctor'])){
            header("Location: appointments.php?error=no special characters allowed");
            exit();
        }
        else{
            header("Location: select_doctor.php?spec=$_GET[specialization]&doctor=$_GET[doctor]&date=$_GET[date]");
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Appointments</title>
        <link rel="stylesheet" href="appointments.css">
    </head>

    <body>
        <div id = "background">
            <a href = "main_page.php">
            <img src = "http://localhost/project/HTML%20files/icons/home-run.png" id = "home-button">
            </a>
            <div id = "form-box">
                <div id = "image-box">
                    <p id = "date">
                    </p>
                </div>
                <form id = "input-field">
                    <select name = "specialization" id = "select" name = "specialization">;
                        <option value = "Any"> Any Specialization </option>
                            <?php 
                                while($name = $name_result->fetch_assoc()){
                                $options = "<option value = $name[id]>$name[name]</option>";
                                echo $options;
                                }
                            ?>
                    </select>
                    <input type = "text" class = "input" name = "doctor" placeholder = "Doctor" pattern = "[a-zA-Z]{0-10}" maxlength = "10">
                    <input type = "date" id = "day" class = "input" placeholder = "Date" name = "date">
                    <input type = "submit" id = "submit-button" name = "submit-button" value = "Search" onclick = "document.getElementById('submit-button').style.backgroundColor  = 'black';">
                </form>
            </div>
        </div>
    </body>
    <script>
        var date = new Date();
        var dd = String(date.getDate()).padStart(2,'0');
        var mm = String(date.getMonth() + 1).padStart(2,'0');
        //var mmm = String(date.getmonth() + 2).padStart(2,'0');
        var yy = String(date.getFullYear());
        var today = yy + '-' + mm + '-' + dd;
        //var nextmonth = yy + '-' + mmm + '-' + dd;
        document.getElementById("day").min = today;
        //document.getElementById("date").innerHTML ;
    </script>
</html>