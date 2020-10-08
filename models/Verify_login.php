<?php

class Verify_login extends Models{

    public function __construct(){
        
    }

    public function verify($user_cat,$userid,$userpwd){
        $query = "SELECT * from patient WHERE id = ?;";
        $param = array(["s",$user_cat],["s",$userid]);
        $result = DB_Helper::run_query($query,$param);
        if($result == "error"){
            return "error";
        }
        else{
            $row = $result->fetch_assoc();
            if(empty($row)){
                return "invalid user";
            }
            else{
                //$password = $userpwd.$row['random_user'];
                /*if(!password_verify($password,$row['pwd'])){
                    return "invalid password";
                }
                if(password_verify($password,$row['pwd'])){
                    return "successful";
                }
                else{
                    return "error";
                }*/
                if($userpwd != $row['pwd']){
                    return "invalid password";
                }
                else{
                    return "successful";
                }
            }
        }
    }
}