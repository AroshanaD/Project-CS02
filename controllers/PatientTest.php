<?php

    class PatientTest extends Controllers{

        public function __construct(){

        }

        public function create_test(){
            $model= $this->load('models','PatientTest_Manage');
            $result = $model->get_lastid();
            $_POST['test_id'] = $result['id'] + 1;
            $this->load('views','add_labtest');
        }

        public function add_test(){
            $model= $this->load('models','PatientTest_Manage');

            $id = $_POST['id'];
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $contact = $_POST['contact'];
            $cost = $_POST['cost'];
            $test_list = $_POST['test_list'];
            $lab_id = $_SESSION['id'];

            $result = $model->add_patient_test($name,$gender,$age,$contact,$cost,$id,$lab_id,$test_list);
            /*if($result == TRUE){
                $last_test = ($model->get_lastid())['id'];
                foreach($test_list as $test){
                    $model->add_testis($last_test,$test);
                }
            }*/
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function view(){
            $this->load('views','view_patient_test');
        }        

        public function get_tests(){
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
            $availability = $_POST['availability'];
            $result = $model->search($id,$name,$date,$availability);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function update(){
            $id = $_GET['id'];
            $model= $this->load('models','PatientTest_Manage');
            $result= $model->displayById($id);
            $_POST['patient_test']=$result;
            $this->load('views','change_test_availability');

            if(isset($_POST['update'])){
                $availability = $_POST['availability'];
                $result = $model->update($id,$availability);

                if($result == TRUE){
                    $URL= Router::site_url()."/patientTest/view?successfully updated availability";
                    echo "<script>location.href='$URL'</script>";
                }
                else{
                    $URL= Router::site_url()."/patientTest/view?could not update availability";
                    echo "<script>location.href='$URL'</script>";
                }
            }
        }

        public function test_details(){
            $id = $_POST['id'];
            $model= $this->load('models','PatientTest_Manage');
            $result= $model->get_tests($id);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function View_available(){
            $this->load('views','labtest_availability');
        }

        public function search_user(){
            $email = $_POST['email'];
            $model = $this->load('models','PatientTest_Manage');
            $result = $model->user_details($email);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

    }
?>