<?php

    class Doctors extends Controllers{

        public function __construct(){

        }

        public function add(){
            $this->load('views','add_doctor');
        }

        public function add_doctor($id,$fname,$lname,$gender,$qualification,$contact,$address,$email,$specialization,$fee){
            $model= $this->load('models','doctor_manage');

            $password = pwd_generator::pwd_gen();
            $verification_key = hash('SHA256',$id.$password);

            $user_details = array('id'=>$id,
                            'f_name'=>$fname, 'l_name'=>$lname,
                            'gender'=>$gender,'qualification'=>$qualification,
                            'address'=>$address, 'contact'=>$contact,
                            'specialization'=>$specialization, 'fee' =>$fee,
                            'email'=>$email,'password'=>$password,'verification_key'=>$verification_key);

            $status = $model->add($user_details);

            if($status==TRUE){
                $mail_sent = $this->send_auth_mail($verification_key,$email,$id);
                if($mail_sent == TRUE){
                    return TRUE;
                }
                else{
                    $model->perma_delete($id);
                    return FALSE;
                }
            }
            else{
                return FALSE;
            }

        }

        public function validate(){
            $valid_instance = new validation_helper;

            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            if(isset($_POST['gender'])){
                $gender = $_POST['gender'];
            }
            $qualification = $_POST['qualification'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            if(isset($_POST['specialization'])){
                $specialization = $_POST['specialization'];
            }
            $fee = $_POST['fee'];
            $submit = $_POST['submit'];

            $valid = TRUE;

            $invalid_list = array("success"=>FALSE,"validation_success"=>FALSE,"id"=>FALSE,"contact"=>FALSE,"email"=>FALSE);
            
            if($submit == 'Add'){
                if($valid_instance->validate("doctor","id",$id) != 0){
                    $invalid_list['id'] = TRUE;
                    $valid = FALSE;
                }
                if($valid_instance->validate("doctor","contact_no",$contact) != 0){
                    $invalid_list['contact'] = TRUE;
                    $valid = FALSE;
                }
                if($valid_instance->validate("doctor","email",$email) != 0){
                    $invalid_list['email'] = TRUE;
                    $valid = FALSE;
                }
            }

            if($submit == 'Update'){
                if($valid_instance->validate_plus("doctor","contact_no",$contact,$id) != 0){
                    $invalid_list['contact'] = TRUE;
                    $valid = FALSE;
                }
                if($valid_instance->validate_plus("doctor","email",$email,$id) != 0){
                    $invalid_list['email'] = TRUE;
                    $valid = FALSE;
                }
            }

            if($valid == TRUE){
                $invalid_list['validation_success'] = TRUE;
                if($submit == 'Add'){
                    $status = $this->add_doctor($id,$fname,$lname,$gender,$qualification,$contact,$address,$email,$specialization,$fee);
                    $invalid_list['success'] = $status;
                }
                if($submit == 'Update'){
                    $status = $this->update_doctor($id,$qualification,$address,$contact,$email,$fee);
                    $invalid_list['success'] = $status;
                }
            }
            header('Content-Type: application/json');
            echo json_encode($invalid_list);
        }

        public function send_auth_mail($verification_key,$email,$id){
            $subject = 'Account Authentication Email';
            $link = "Link : localhost/project-cs02/index.php/user/confirm_register?category=doctor"."&id=".$id."&auth_key=".$verification_key;
            $body = "<body style='background-color: white; padding: 50px; font-size: 16px;
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.8); height:fit-content'>
                    <h3 style='padding: 20px; background-color: #9097c0'>Medcaid Hospital</h3>
                    <h4 style='text-decoration: underline'> Please Use This Email To Confirm Account Registration</h4>
                    <p> You have registered for Medcaid Hospital Services. Please use the link below to complete the registration.</p><a href='".$link."'>".$link."</a>";;

            $to = $email;
            $mail = new mail_authentication();
            $status = $mail->send_mail($subject,$body,$to);
            return $status;
        }

        public function confirm_register(){
            if($_GET['auth_key'] && $_GET['category'] && $_GET['id']){
                $model = $this->load('models','doctor_manage');
                $status = $model->confirm($_GET['auth_key'],$_GET['id']);
                if($status == TRUE){
                    $_POST['id'] = $_GET['id'];
                    $_POST['user_cat'] = $_GET['category'];
                    $this->load('views','set_password');
                }
                else{
                    header("Location: ../user/login?confirmation failed");
                }
            }
        }

        public function view(){
            $this->load('views','view_doctor');
        }

        public function category(){
            $model = $this->load('models','doctor_manage');

            $specialization = $_POST['specialization'];
            $result = $model->view($specialization);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function search(){
            $model = $this->load('models','doctor_manage');

            $specialization = $_POST['specialization'];
            $id = $_POST['id'];
            $name = $_POST['name'];
            $result = $model->search($specialization,$id, $name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function update(){
            $model = $this->load('models','doctor_manage');
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $result = $model->update_current($id);
                $_POST['details'] = $result;
            }
            $this->load('views','update_doctor');
        }

        public function update_doctor($id,$qualification,$address,$contact,$email,$fee){
            $model = $this->load('models','doctor_manage');
            $result = $model->update_change($id,$qualification,$address,$contact,$email,$fee);

            if($result == TRUE){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function delete(){
            $model = $this->load('models','doctor_manage');
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $result = $model->update_current($id);
                $_POST['details'] = $result;
                $this->load('views','delete_doctor');
            }

            if(isset($_POST['Delete'])){
                $result = $model->delete($id);

                if($result == TRUE){
                    $URL= Router::site_url()."/doctors/view?successfully deleted";
                    echo "<script>location.href='$URL'</script>";
                }
                else{
                    $URL= Router::site_url()."/doctors/view?something went wrong";
                    echo "<script>location.href='$URL'</script>";
                }
            }
        }

    }