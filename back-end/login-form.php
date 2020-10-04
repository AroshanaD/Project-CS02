<?php 
    $host = "localhost";
    $username = "root";
    $userpasswd = "";
    $db = "hospital";

    $connection = mysqli_connect($host,$username,$userpasswd,$db);


    if(isset($_POST['login-submit'])){
        $userid = $_POST['userid'];
        $userpwd = $_POST['password'];

        if(empty($userid)||empty($userpwd)){
            header("Location: login_register.php?error=emptyfields");
        }
        else{
            $query = "SELECT * from patient WHERE id = ?;";
            $statement = mysqli_stmt_init($connection);
            if(!mysqli_stmt_prepare($statement,$query)){
                header("Location: login_register.php?error=sqlerror");
                exit();
            }
            else{
                $statement->bind_param("s",$userid);
                $statement->execute();
                $result = $statement->get_result();
                $row = $result->fetch_assoc();
                if(empty($row)){
                    header("Location: login_register.php?error=invaliduser");
                    exit();
                }
                else{
                    $password = $userpwd.$row['random_user'];
                    if(!password_verify($password,$row['pwd'])){
                        header("Location: login_register.php?error=invalidpassword");
                        exit();
                    }
                    if(password_verify($password,$row['pwd'])){
                        session_start();
                        $_SESSION['id'] = $userid;
                        $_SESSION['f_name'] = $row['f_name'];
                        header("Location: patient.php?login=success");
                        exit();
                    }
                    else{
                        header("Location: main_page.php?error=something went wrong");
                        exit();
                    }
                }
                mysqli_free_result($result);
            }
        }
    }
    else{
        header("login_register.php");
        exit();
    }
