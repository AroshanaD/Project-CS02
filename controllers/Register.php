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
            $verification_key = $id.$password;
            $verification_key = hash('SHA256',$verification_key);
            $fname = ucfirst($fname);
            $lname = ucfirst($lname);
            $status = $model->add($id,$fname,$lname,$gender,$birthday,$contact,$address,$email,$password,$verification_key);

            if($status == TRUE){
                $email_sent = $this->send_auth_mail($verification_key,$email);
                if($email_sent == TRUE){
                    return TRUE;
                }
                else{
                    $model->delete($id);
                    return FALSE;
                }
            }
            else{
                return FALSE;
            }
        }

        public function send_auth_mail($verification_key,$email){
            $subject = 'Account Authentication Email';
            $link = "localhost/project-cs02/index.php/register/confirm_register?auth_key=".$verification_key;
            $body = "<body style='background-color: white; padding: 50px; font-size: 16px;
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.8); height:fit-content'>
                    <h3 style='padding: 20px; background-color: #9097c0'>Medcaid Hospital</h3>
                    <h4 style='text-decoration: underline'> Please Use This Email To Confirm Account Registration</h4>
                    <p> You have registered for Medcaid Hospital Services. Please use the link below to complete the registration.</p><a href='".$link."'>".$link."</a>";

            $to = $email;
            $mail = new mail_authentication();
            $status = $mail->send_mail($subject,$body,$to);
            return $status;
        }

        public function confirm_register(){
            if($_GET['auth_key']){
                $model = $this->load('models','Register_User');
                $status = $model->confirm($_GET['auth_key']);
                if($status == TRUE){
                    $URL= Router::site_url()."/user/login?successfully registered please login";
                    echo "<script>location.href='$URL'</script>";
                    echo "<div class'form-message'> Successfully Registered Please Login </div>";
                }
                else{
                    /*header("Location: ../user/login?confirmation failed");*/
                    $URL= Router::site_url()."/user/login?confirmation failed";
                    echo "<script>location.href='$URL'</script>";
                }
            }
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

            $invalid_list = array("success"=>FALSE,"validation_success"=>FALSE,"id"=>FALSE,"contact"=>FALSE,"email"=>FALSE);
            
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
                $invalid_list['validation_success'] = TRUE;
                $return = $this->register_user($id,$fname,$lname,$gender,$birthday,$contact,$address,$email,$password);

                $invalid_list['success'] = $return;
            }
            header('Content-Type: application/json');
            echo json_encode($invalid_list);
        }

    }

?>