<?php

    Class Register extends Controllers{

        public function __construct(){

        }

        public function index(){
            $this->load('views','register');
        }

        public function register_user($id,$fname,$lname,$gender,$birthday,$contact,$address,$email,$password){
            $model = $this->load('models','Register_User');
            $password = hash('SHA256',$password);
            $verification_key = pwd_generator::pwd_gen();
            $verification_key = hash('SHA256',$verification_key);
            $model->add($id,$fname,$lname,$gender,$birthday,$contact,$address,$email,$password,$verification_key);
        }

        public function validate(){
            $valid_instance = new validation_helper;

            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];

            $valid = TRUE;

            $invalid_list = array("success"=>FALSE,"id"=>FALSE,"contact"=>FALSE,"email"=>FALSE);
            
            if($valid_instance->validate("patient","id",$id) != 0){
                $invalid_list['id'] = TRUE;
                $valid = FALSE;
            }
            if($valid_instance->validate("patient","contact_no",$contact) != 0){
                $invalid_list['contact'] = TRUE;
                $valid = FALSE;
            }
            if($valid_instance->validate("patient","email",$email) != 0){
                $invalid_list['email'] = TRUE;
                $valid = FALSE;
            }

            if($valid == TRUE){
                $this->register_user($id,$fname,$lname,$gender,$birthday,$contact,$address,$email,$password);
                $invalid_list['success'] = TRUE;
            }
            header('Content-Type: application/json');
            echo json_encode($invalid_list);
        }

    }

?>