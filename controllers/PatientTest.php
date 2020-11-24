<?php

    class PatientTest extends Controllers{

        public function __construct(){

        }

        public function create_test(){
            $this->load('views','header');
            $this->load('views','add_labtest');
        }

        public function view(){
            $this->load('views','header');
            $this->load('views','patient_test');
        }        

        public function get_view(){
            $model= $this->load('models','PatientTest_Manage');
            $result = $model->view();
            
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function search(){
            $model = $this->load('models','PatientTest_Manage');
            $id = $_POST['id'];
            $name = $_POST['name'];
            $date = $_POST['date'];
            $result = $model->search($id,$name,$date);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function update(){
            $id = $_GET['id'];
            $model= $this->load('models','PatientTest_Manage');
            $result= $model->displayById($id);
            $_POST['test']=$result;
            $this->load('views','header');
            $this->load('views','update_test');

            if(isset($_POST['Update'])){
                $testName = $_POST['test_name'];
                $description = $_POST['test_description'];
                $price = $_POST['test_price'];

                $model->update($id,$testName,$price,$description);
            }
        }

        public function delete(){
            $id = $_GET['id'];
            $model= $this->load('models','PatientTest_Manage');
            $result= $model->displayById($id);
            $_POST['test']=$result;
            $this->load('views','header');
            $this->load('views','delete_test');

            if(isset($_POST['Delete'])){
                $testId = $_POST['id'];
                $model->delete($testId);
            }
        }

    }
?>