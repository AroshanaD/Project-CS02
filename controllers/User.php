<?php

    class User extends Controllers{
        public function __construct(){
        }
        
        public function index(){
            $this->load('views','login');
        }

        public function login(){
            $this->load('views','login');
        }
        
        public function authenticate(){
            $model = $this->load('models','Verify_login');
            if(isset($_POST['login-submit'])){
                $userid = $_POST['userid'];
                $userpwd = $_POST['password'];
                $user_cat = substr($userid,0,1);
                switch($user_cat){
                    case "1": $user_cat = 'patient'; break;
                    case "D": $user_cat = 'doctor'; break;
                    case "R": $user_cat = 'receptionist'; break;
                    case "L": $user_cat = 'lab_technician'; break;
                    case "P": $user_cat = 'pharmacist'; break;
                    case "S": $user_cat = 'supervisor'; break;
                    default : $user_cat = 'invalid'; break;
                }
                if($user_cat == "invalid"){
                    echo "Invalid user id";
                }
                else{
                    $user = $model->verify($user_cat,$userid,$userpwd);
                    if($user == "invalid user"){
                        header('Location:'.Router::site_url().'/user/login/?invalid user');
                    }
                    else{
                        if($user['pwd'] == $userpwd){
                            $user['user_cat'] = $user_cat;
                            $session_inst = new session_helper;
                            $session_inst->start($user);
                            $this->dashboard($user_cat);
                        }
                        else{
                            header('Location:'.Router::site_url().'/user/login/?incorrect password');
                        }
                    }
                }
            }
        }

        public function dashboard(){
            if(isset($_SESSION['id'])){
                $this->load('views',$_SESSION['user_cat']."_index");
            }
            else{
                header('Location:/project-cs02/index.php/user/login?please login');
            }
        }
    }