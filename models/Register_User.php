<?php

    class Register_User extends Models{
        public function __construct(){

        }
        
        public function add($id,$fname,$lname,$birthday,$gender,$contact,$address,$email,$password,$verification_key){
            $connect = new Database();
            $pdo = $connect->connect();

            $query="INSERT INTO `patient`(`f_name`, `l_name`, `birthday`, `gender`, `address`, `contact_no`, `email`, `NIC`, `pwd`, `verification_key`) 
                    VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($query);
            $status = $stmt->execute([$fname,$lname,$birthday,$gender,$address,$contact,$email,$id,$password,$verification_key]);
            return $status;
        }
        
        public function delete($email){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "DELETE FROM patient WHERE email = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$email]);
        }

        public function confirm($auth_key){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "UPDATE patient SET verified = 1 WHERE verification_key = ? AND verified=0";
            $stmt = $pdo->prepare($query);
            $status = $stmt->execute([$auth_key]);
            return $status;
        }
    }