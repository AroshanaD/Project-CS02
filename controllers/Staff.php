<?php

    class Staff extends Controllers{

        public function __construct(){

        }

        public function add(){
            $this->load('views','add_staff');
            $model= $this->load('models','Staff_Manage');
            if(isset($_POST['Add'])){

                $password = pwd_generator::pwd_gen();

                $user_details = array('category'=>$_POST['category'], 'id'=>$_POST['id'],
                                'f_name'=>$_POST['f_name'], 'l_name'=>$_POST['l_name'],
                                'address'=>$_POST['address'], 'contact'=>$_POST['contact'],
                                'email'=>$_POST['email'],'password'=>$password);

                $status = $model->add($user_details);

                if($status==TRUE){
                    header("Location: ../staff/add?successfully added ".$user_details['category']);
                }
                else{
                    header("Location: ../staff/add?something went wrong");
                }
                
            }
        }

        public function view(){
            $this->load('views','view_staff');
        }

        public function category(){
            $model = $this->load('models','Staff_Manage');
            $result = $model->view($category);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function search(){
            
        }

        public function update(){
            $this->load('views','update_staff');
        }

        public function delete(){
            $this->load('views','delete_staff');
        }

    }