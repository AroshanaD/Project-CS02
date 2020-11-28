<?php

    class Doctors extends Controllers{

        public function __construct(){

        }

        public function add(){
            $this->load('views','header');
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
                    /*header("Location: ../doctor/view?successfully added");*/
                    $URL= Router::site_url()."/doctor/view?successfully added";
                    echo "<script>location.href='$URL'</script>";
                }
                else{
                    /*header("Location: ../doctor/view?something went wrong");*/
                    $URL= Router::site_url()."/doctor/view?something went wrong";
                    echo "<script>location.href='$URL'</script>";
                }

            }
        }

        public function view(){
            $this->load('views','header');
            $this->load('views','view_doctor');
        }

        public function update(){
            $model = $this->load('models','doctor_manage');
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $result = $model->displayById($id);
                $_POST['details'] = $result;
                $_POST['details']['id'] = $id;
            }
            $this->load('views','header');
            $this->load('views','update_doctor');

            if(isset($_POST['Update'])){
                $qualification = $_POST['qualification'];
                $fee = $_POST['fee'];
                $address = $_POST['address'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $fee = $_POST['fee'];
                $result = $model->update($id,$qualification,$fee,$address,$contact,$email);

                if($result == TRUE){
                    /*header("Location: ../../index.php/doctors/view?successfully updated");*/
                    $URL= Router::site_url()."/doctors/view?successfully updated";
                    echo "<script>location.href='$URL'</script>";
                }
                else{
                   /* header("Location: ../../index.php/doctors/view?something went wrong");*/
                    $URL= Router::site_url()."/doctors/view?something went wrong";
                    echo "<script>location.href='$URL'</script>";
                }
            }
        }

        public function delete(){
            $model = $this->load('models','doctor_manage');
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $result = $model->displayById($id);
                $_POST['details'] = $result;
                $_POST['details']['id'] = $id;
            }
            $this->load('views','header');
            $this->load('views','delete_doctor');

            if(isset($_POST['Delete'])){
                $result = $model->delete($id);

                if($result == TRUE){
                    /*header("Location: ../../index.php/doctors/view?successfully deleted");*/
                    $URL= Router::site_url()."/doctors/view?successfully deleted";
                    echo "<script>location.href='$URL'</script>";
                }
                else{
                    /*header("Location: ../../index.php/doctors/view?something went wrong");*/
                    $URL= Router::site_url()."/doctors/view?something went wrong";
                    echo "<script>location.href='$URL'</script>";
                }
            }
        }

        public function doctors(){
            $model = $this->load('models','doctor_manage');

            $specialization = $_POST['specialization'];
            $result = $model->view($specialization);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function search(){
            $model = $this->load('models','Doctor_manage');

            $id = $_POST['id'];
            $name = $_POST['name'];
            $result = $model->search($id, $name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }
    }