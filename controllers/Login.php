<?php

    class Login extends Controllers{
        public function __construct(){
        }
        
        public function index(){
            $this->load('views','header');
            $this->load('views','login');
        }
        
        public function authenticate(){
            $model = $this->load('models','Verify_login');
            if(isset($_POST['login-submit'])){
                $userid = $_POST['userid'];
                $userpwd = $_POST['password'];
            }
            $user_cat = substr($userid,0,2);
            switch($user_cat){
                case "19": $user_cat = "patient"; break;
                case "dc": $user_cat = "doctor"; break;
                case "rp": $user_cat = "receptionist"; break;
                case "lb": $user_cat = "lab_technician"; break;
                case "ph": $user_cat = "pharmacist"; break;
                case "sp": $user_cat = "supervisor"; break;
                default : $user_cat = "invalid"; break;
            }
            if($user_cat == "invalid"){
                echo "Invalid user id";
            }
            else{
                $verify = $model->verify($user_cat,$userid,$userpwd);
                if($verify == "successful"){
                    $this->load('controllers','Users')->index($user_cat);
                }
                else{
                    $this->load('controllers','Login');
                }
            }
        }
                
    }