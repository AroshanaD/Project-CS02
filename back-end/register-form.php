<?php
    $host = "localhost";
    $username = "root";
    $userpasswd = "";
    $db = "hospital";

    $connection = mysqli_connect($host,$username,$userpasswd,$db);
    $min = 161594124882;
    $max = 984174878800899;

    function checkduplicate($connection,$column,$field){
        $check_query = "SELECT $column FROM patient WHERE $column = $field;";
        $check_statement = mysqli_stmt_init($connection);
        if(!mysqli_stmt_prepare($check_statement,$check_query)){
            return -1;
        }
        else{
            $check_statement->execute();
            $result = $check_statement->get_result();
            $row = $result->fetch_assoc();
            if(!empty($row)){
                return 0;
            }
            else{
                return 1;
            }
        }
    }
    
    if(isset($_POST["register-submit"])){
        $userid = $_POST["id"];
        $f_name = htmlentities($_POST["f_name"]);
        $l_name = htmlentities($_POST["l_name"]);
        $birthday = $_POST["birthday"];
        $gender = $_POST["gender"];
        $contact = $_POST["contact"];
        $address = htmlentities($_POST["address"]);
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repassword = $_POST["re-password"];
        $random = random_int($min,$max);

        if(!preg_match("/^[a-zA-Z]*$/",$f_name)){
            header("Location: login_register.php?error=no special characters allowed");
            exit();
        }
        if(!preg_match("/^[a-zA-Z]*$/",$l_name)){
            header("Location: login_register.php?error=no special characters allowed");
            exit();
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            header("Location: login_register.php?error=invalid email format");
            exit();
        }

        if(empty($userid)||empty($f_name)||empty($l_name)||empty($birthday)||empty($gender)||empty($contact)||empty($email)||empty($password)||empty($repassword)){
            header("Location: login_register.php?error=emptyfields");
            exit();
        }
        else{
            if($password !== $repassword){
                header("Location: login_register.php?error=passwords donot match");
                exit();
            }
            else{
                $duplicate_id_result = checkduplicate($connection,"id",$userid);
                $duplicate_contact_result = checkduplicate($connection,"contact_no",$contact);
                #$duplicate_email_result = checkduplicate($connection,"email",$email);
                if(($duplicate_id_result == -1)||($duplicate_contact_result == -1)){
                    header("Location: login_register.php?error=sqlerror $duplicate_id_result $duplicate_email_result $duplicate_contact_result");
                    exit();
                }
                else{
                    if($duplicate_id_result == 0){
                        header("Location: login_register.php?error=user already signed up");
                        exit();
                    }
                    else{
                        if($duplicate_contact_result == 0){
                            header("Location: login_register.php?error=contact_no already taken");
                            exit();
                        }
                        else{
                            $random_hash = hash("sha256",$random);
                            $password = $password.$random_hash;
                            $password_hash = password_hash($password,PASSWORD_DEFAULT);

                            $insert_query = "INSERT INTO patient (id,f_name,l_name,birthday,gender,adress,contact_no,email,pwd,random_user)
                            VALUES ('$userid','$f_name','$l_name','$birthday','$gender','$address','$contact','$email','$password_hash','$random_hash');";

                            $insert_statement = mysqli_stmt_init($connection);
                            if(!mysqli_stmt_prepare($insert_statement,$insert_query)){
                                header("Location: login_register.php?error=sqlerrorr");
                                exit();
                            }
                            else{
                                $insert_statement->execute();
                                header("Location: login_register.php?successfully registered please login");
                                exit();
                            }
                        }
                    }
                }
            }
        }
    }
