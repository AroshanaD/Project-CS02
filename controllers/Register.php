<?php

    class Register extends Controllers{
        public function __construct(){

        }

        public function index(){
            $this->load('views','register');
        }

        public function register_user(){
            $model_patient = $this->load('models','Register_User');

            if(isset($_POST['Register'])){
                $user_details['id'] = $_POST['id'];
                $user_details['name'] = $_POST['name'];
                $user_details['gender'] = $_POST['gender'];
                $user_details['birthday'] = $_POST['birthday'];
                $user_details['contact'] = $_POST['contact'];
                $user_details['address'] = $_POST['address'];
                $user_details['email'] = $_POST['email'];
                $user_details['password'] = $_POST['password'];

                $model_patient->add($user_details);
            }
        }
    }