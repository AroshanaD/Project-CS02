<?php

$host = "localhost";
$username = "root";
$userpasswd = "";
$db = "hospital";

$connection = mysqli_connect($host,$username,$userpasswd,$db);

function checkduplicate($connection,$column,$field){
    $check_query = "SELECT f_name FROM patient WHERE $column = $field;";
    $check_statement = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($check_statement,$check_query)){
        echo "sql error";
    }
    else{
        #$check_statement->bind_param('sss',$column,$column,$field);
        $check_statement->execute();
        $result = $check_statement->get_result();
        $row = $result->fetch_assoc();
        echo $row;
        if(!empty($row)){
            echo "user already available";
        }
        else{
            echo "user sign up";
        }
    }
}
$field = "199726200@gmail.com";
$column = 'email';

checkduplicate($connection,$column,$field);
    