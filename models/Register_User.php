<?php

    class Register_User extends Models{
        public function __construct(){

        }
        
        public function add($id,$fname,$lname,$gender,$birthday,$contact,$address,$email,$password,$verification_key){
            $connect = new Database();
            $pdo = $connect->connect();

            $query="INSERT INTO `patient`(`id`, `f_name`, `l_name`, `birthday`, `gender`, `address`, `contact_no`, `email`, `pwd`, `verification_key`) 
                    VALUES (?,?,?,?,?,?,?,?,?,?)";
            $stmt = $pdo->prepare($query);
            $status = $stmt->execute([$id,$fname,$lname,$birthday,$gender,$address,$contact,$email,$password,$verification_key]);
            return $status;
        }
        
        public function delete($id){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "DELETE FROM patient WHERE id = ?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
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