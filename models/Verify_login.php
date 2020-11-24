<?php

class Verify_login extends Models{

    public function __construct(){
        
    }

    public function verify($user_cat,$user_id,$user_pwd){
        $connect = new Database();
        $pdo = $connect->connect();
       
        $query = "SELECT * FROM $user_cat WHERE id = ? AND verified='1'";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$user_id]);
        $result = $stmt->fetch();
        if(!$result){
            return "invalid user";
        }
        return $result;
    }

    public function set_password($id,$category,$password){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "UPDATE $category SET pwd=? WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$password,$id]);
        return $status;
    }
}