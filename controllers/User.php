<?php

    class User extends Controllers{
        public function __construct(){
        }
        
        public function index(){
            $this->login();
        }

        public function login(){
            $this->load('views','login');

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
                        $userpwd = hash('SHA256',$userpwd);
                        if($userpwd == $user['pwd']){
                            $user['user_cat'] = $user_cat;
                            $session_inst = new session_helper;
                            $session_inst->start($user);
                            header('Location:'.Router::site_url().'/user/dashboard');
                            $this->dashboard();
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
                $this->load('views','header');
                $this->load('views',$_SESSION['user_cat']."_index");
            }
            else{
                header('Location:/project-cs02/index.php/user/login?please login');
            }
        }

        public function change_password(){
            if(isset($_SESSION['id'])){
                $this->load('views','header');
                $this->load('views','change_password');
            }
            else{
                header('Location:/project-cs02/index.php/user/login?please login');
            }
        }

        public function change_details(){
            if(isset($_SESSION['id'])){
                $this->load('views','header');
                $this->load('views','change_details');
            }
            else{
                header('Location:/project-cs02/index.php/user/login?please login');
            }
        }
        public function logout(){
            session_destroy();
            header('Location:/project-cs02/index.php/user/login?logout successfully');
        }
    }