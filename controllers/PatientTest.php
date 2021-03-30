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

            $p_id = $_POST['pid'];
            $id = $_POST['id'];
            $name = $_POST['name'];
            $gender = $_POST['gender'];
            $age = $_POST['age'];
            $contact = $_POST['contact'];
            $cost = $_POST['cost'];
            $test_list = $_POST['test_list'];
            $lab_id = $_SESSION['id'];

            $result = $model->add_patient_test($name,$gender,$age,$contact,$cost,$id,$lab_id,$p_id,$test_list);
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
            if(isset($_POST['id'])){
                $id = $_POST['id'];
            }
            if(isset($_POST['name'])){
                $name = $_POST['name'];
            }
            if(isset($_POST['date'])){
                $date = $_POST['date'];
            }
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
                    $res = $model->patient_email($id);
                    if($res != NULL){
                        $email = $res['email'];
                        $subject = 'Lab Test Available';
                        $body = "<body style='background-color: white; padding: 50px; font-size: 16px;
                                box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.8); height:fit-content'>
                                <h3 style='padding: 20px; background-color: #9097c0'>Medcaid Hospital</h3>
                                <h4 style='text-decoration: underline'>Lab Test</h4>
                                <p> Your lab test is available.</p>";

                        $to = $email;
                        $mail = new mail_authentication();
                        $status = $mail->send_mail($subject,$body,$to);
                    }
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

        public function search_user(){
            $email = $_POST['email'];
            $model = $this->load('models','PatientTest_Manage');
            $result = $model->user_details($email);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function patientResult_View(){
            $this->load('views','patient_labtestresults');
        }

        public function getpatient_Result(){
            $id =$_SESSION['id'];
            $model =$this->load('models','PatientTest_Manage');
            $result = $model->PatientResult($id);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function patient_Searchresult(){
            $model = $this->load('models','PatientTest_Manage');
            $id = $_SESSION['id'];
            $date = $_POST['date'];
            $availability = $_POST['availability'];
            $result = $model->patient_search($id,$date,$availability);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function View_available(){
            $id = $_GET['id'];
            $model= $this->load('models','PatientTest_Manage');
            $result= $model->displayById($id);
            $_POST['testofpatient']=$result;
            $this->load('views','labtest_availability');
        }
    }
?>