<?php

    class Staff extends Controllers{

        public function __construct(){

        }

        public function add(){
            $this->load('views','header');
            $this->load('views','add_staff');
        }

        public function add_staff($category,$id,$fname,$lname,$gender,$birthday,$contact,$address,$email){
            $model= $this->load('models','Staff_Manage');

            $password = pwd_generator::pwd_gen();

            $user_details = array('category'=>$category, 'id'=>$id,
                            'f_name'=>$fname, 'l_name'=>$lname,
                            'gender'=>$gender,'birthday'=>$birthday,
                            'address'=>$address, 'contact'=>$contact,
                            'email'=>$email,'password'=>$password);

            $status = $model->add($user_details);

            if($status==TRUE){
                return TRUE;
            }
            else{
                return FALSE;
            }

        }

        public function validate(){
            $valid_instance = new validation_helper;

            $category = $_POST['category'];
            $id = $_POST['id'];
            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $gender = $_POST['gender'];
            $birthday = $_POST['birthday'];
            $contact = $_POST['contact'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $submit = $_POST['submit'];

            $valid = TRUE;

            $invalid_list = array("success"=>FALSE,"id"=>FALSE,"contact"=>FALSE,"email"=>FALSE);
            
            if($submit == 'Add'){
                if($valid_instance->validate($category,"id",$id) != 0){
                    $invalid_list['id'] = TRUE;
                    $valid = FALSE;
                }
                if($valid_instance->validate($category,"contact_no",$contact) != 0){
                    $invalid_list['contact'] = TRUE;
                    $valid = FALSE;
                }
                if($valid_instance->validate($category,"email",$email) != 0){
                    $invalid_list['email'] = TRUE;
                    $valid = FALSE;
                }
            }

            if($submit == 'Update'){
                if($valid_instance->validate_plus($category,"contact_no",$contact,$id) != 0){
                    $invalid_list['contact'] = TRUE;
                    $valid = FALSE;
                }
                if($valid_instance->validate_plus($category,"email",$email,$id) != 0){
                    $invalid_list['email'] = TRUE;
                    $valid = FALSE;
                }
            }

            if($valid == TRUE){
                if($submit == 'Add'){
                    $status = $this->add_staff($category,$id,$fname,$lname,$gender,$birthday,$contact,$address,$email);
                }
                if($submit == 'Update'){
                    $status = $this->update_staff($id,$category,$address,$contact,$email);
                }
                if($status == TRUE){
                    $invalid_list['success'] = TRUE;
                }
                else{
                    $invalid_list['success'] = FALSE;
                }
            }
            header('Content-Type: application/json');
            echo json_encode($invalid_list);
        }

        public function view(){
            $this->load('views','header');
            $this->load('views','view_staff');
        }

        public function category(){
            $model = $this->load('models','Staff_Manage');

            $category = $_POST['staff'];
            $result = $model->view($category);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function search(){
            $model = $this->load('models','Staff_Manage');

            $category = $_POST['staff'];
            $id = $_POST['id'];
            $name = $_POST['name'];
            $result = $model->search($category,$id, $name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function update(){
            $model = $this->load('models','Staff_Manage');
            if(isset($_GET['category']) && $_GET['id']){
                $category = $_GET['category'];
                $id = $_GET['id'];
                $result = $model->update_current($category,$id);
                $_POST['details'] = $result;
                $_POST['details']['category'] = $category;
            }
            $this->load('views','header');
            $this->load('views','update_staff');

        }

        public function update_staff($id,$category,$address,$contact,$email){
            $model = $this->load('models','Staff_Manage');
            $result = $model->update_change($id,$category,$address,$contact,$email);

            if($result == TRUE){
                return TRUE;
            }
            else{
                return FALSE;
            }
        }

        public function delete(){
            $model = $this->load('models','Staff_Manage');
            if(isset($_GET['category']) && $_GET['id']){
                $category = $_GET['category'];
                $id = $_GET['id'];
                $result = $model->update_current($category,$id);
                $_POST['details'] = $result;
            }
            $this->load('views','header');
            $this->load('views','delete_staff');

            if(isset($_POST['Delete'])){
                $result = $model->delete($category,$id);

                if($result == TRUE){
                    header("Location: ../staff/view?successfully deleted");
                }
                else{
                    header("Location: ../staff/view?something went wrong");
                }
            }
        }

    }