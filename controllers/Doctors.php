<?php

    class Doctors extends Controllers{

        public function __construct(){

        }

        public function add(){
            $this->load('views','add_doctor');
            $model= $this->load('models','doctor_manage');

            if(isset($_POST['Add'])){
                $password = pwd_generator::pwd_gen();

                $user_details = array('id'=>$_POST['id'],
                                'f_name'=>$_POST['f_name'], 'l_name'=>$_POST['l_name'],
                                'qualifi' => $_POST['qualifi'],'address'=>$_POST['address'], 
                                'contact'=>$_POST['contact'],'email'=>$_POST['email'],
                                'specialization' => $_POST['specialization'],
                                'fee'=> $_POST['fee'],'password'=>$password);

                $status = $model->add($id,$f_name,$l_name, $qualifi,$address,$contact,$email,$specialization,$fee);
                
                if($result == TRUE){
                    header("Location: ../doctor/view?successfully updated");
                }
                else{
                    header("Location: ../doctor/view?something went wrong");
                }

            }
        }

        public function view(){
            $this->load('models;','doctor_manage');
            $result = $model->view();
            $_POST['doctor']= $result;
            $this->load('views','view_doctor');

        }

        public function update(){
            $this->load('models','doctor_manage');
            if(isset($_GET['category']) && $_GET['id']){
                $category = $_GET['category'];
                $id = $_GET['id'];
                $result = $model->update_current($category,$id);
                $_POST['details'] = $result;
            }
            $this->load('views','update_doctor');

            if(isset($_POST['Update'])){
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $fee = $_POST['fee'];
                $result = $model->update_change($id,$category,$address,$contact,$email);

                if($result == TRUE){
                    header("Location: ../doctor/view?successfully updated");
                }
                else{
                    header("Location: ../doctor/view?something went wrong");
                }
            }
        }

        public function delete(){
            $model = $this->load('models','doctor_manage');
            if(isset($_GET['category']) && $_GET['id']){
                $category = $_GET['category'];
                $id = $_GET['id'];
                $result = $model->update_current($category,$id);
                $_POST['details'] = $result;
            }
            $this->load('views','delete_doctor');

            if(isset($_POST['Delete'])){
                $result = $model->delete($category,$id);

                if($result == TRUE){
                    header("Location: ../doctor/view?successfully deleted");
                }
                else{
                    header("Location: ../doctor/view?something went wrong");
                }
            }
        }

        public function category(){
            $model = $this->load('models','doctor_manage');

            $category = $_POST['doctor'];
            $result = $model->view($category);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function search(){
            $model = $this->load('models','doctor_manage');

            $category = $_POST['doctor'];
            $id = $_POST['id'];
            $name = $_POST['name'];
            $result = $model->search($category,$id, $name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }
    }