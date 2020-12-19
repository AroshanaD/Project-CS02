<?php

    class User extends Controllers{
        public function __construct(){
        }
        
        public function index(){
            $this->login();
        }

        public function login(){
            $this->load('views','login');
        }

        public function verify_login(){
            $model = $this->load('models','Verify_login');
            $userid = $_POST['id'];
            $userpwd = $_POST['password'];
            $user_cat = substr($userid,0,1);
            switch($user_cat){
                case "1": $user_cat = 'patient'; break;
                case "2": $user_cat = 'patient'; break;
                case "9": $user_cat = 'patient'; break;
                case "D": $user_cat = 'doctor'; break;
                case "R": $user_cat = 'receptionist'; break;
                case "L": $user_cat = 'lab_technician'; break;
                case "P": $user_cat = 'pharmacist'; break;
                case "S": $user_cat = 'supervisor'; break;
                default : $user_cat = 'invalid'; break;
            }
            if($user_cat == "invalid"){
                $status = 2;
            }
            else{
                $user = $model->verify($user_cat,$userid,$userpwd);
                if($user == "invalid user"){
                    /*header('Location:'.Router::site_url().'/user/login/?invalid user');*/
                    //$URL= Router::site_url()."/user/login/?invalid user";
                    //echo "<script>location.href='$URL'</script>";
                    $status = 2;
                }
                else{
                    $userpwd = hash('SHA256',$userpwd);
                    if($userpwd == $user['pwd']){
                        $user['user_cat'] = $user_cat;
                        $session_inst = new session_helper;
                        $session_inst->start($user);
                        $status = 0;
                    }
                    else{
                        $status = 1;
                    }
                }
            }
            header('Content-Type: application/json');
            echo json_encode($status);
        }

        public function dashboard(){
            if(isset($_SESSION['id'])){
                /*$this->load('views','header');*/
                $this->load('views',$_SESSION['user_cat']."_index");
               /* $this->load('views','footer');*/
            }
            else{
                $URL= Router::site_url()."/user/login?please login";
                echo "<script>location.href='$URL'</script>";
            }
        }

        public function change_password(){
            if(isset($_SESSION['id'])){
                $this->load('views','change_password');
                }
            else{
                /*header('Location:/project-cs02/index.php/user/login?please login');*/
                $URL= Router::site_url()."/user/login?please login";
                echo "<script>location.href='$URL'</script>";
            }
        }

        public function change_details(){
            if(isset($_SESSION['id'])){
                $this->load('views','change_details');
                }
            else{
                /*header('Location:/project-cs02/index.php/user/login?please login');*/
                $URL= Router::site_url()."/user/login?please login";
                echo "<script>location.href='$URL'</script>";
            }
        }
        public function logout(){
            if($_SESSION['user_cat']=='patient'){
                session_destroy();
                $URL= Router::site_url()."/main?logout successfully";
                echo "<script>location.href='$URL'</script>";
            }
            else{
                session_destroy();
                /*header('Location:/project-cs02/index.php/user/login?logout successfully');*/
                $URL= Router::site_url()."/user/login?logout successfully";
                echo "<script>location.href='$URL'</script>";
            }   
        }

        public function confirm_register(){
            if($_GET['auth_key'] && $_GET['category'] && $_GET['id']){
                $model = $this->load('models','Staff_Manage');
                $verified = $model->is_verified($_GET['auth_key'],$_GET['category'],$_GET['id']);
                if($verified['verified'] == 0){
                    $_SESSION['id'] = $_GET['id'];
                    $_SESSION['user_cat'] = $_GET['category'];
                    $this->load('views','set_password');
                }
                else{
                   /* header("Location: ../user/login?account already activated");*/
                    $URL= Router::site_url()."/user/login?account already activated";
                    echo "<script>location.href='$URL'</script>";
                }
            }
        }

        public function set_password(){
            $model = $this->load('models','Verify_login');
            $password = hash('SHA256',$_POST['password']);
            $status = $model->set_password($_SESSION['id'],$_SESSION['user_cat'],$password);
            if($status == TRUE){
                $model = $this->load('models','Staff_Manage');
                $status = $model->confirm($_SESSION['user_cat'],$_SESSION['id']);
                session_destroy();
                /*header('Location:/project-cs02/index.php/user/login');
                $this->login();*/
                $URL= Router::site_url()."/user/login";
                echo "<script>location.href='$URL'</script>";
            }
        }

        public function reset_password(){
            $this->load('views','reset_password');
        }
    }