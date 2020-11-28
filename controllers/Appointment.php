<?php 


    class Appointment extends Controllers{
        public function __construct(){

        }

        public function index(){
            $this->load('views','header');
            if($_SESSION['user_cat'] == 'patient'){
                $this->search_doctor();
            }
            if($_SESSION['user_cat'] == 'receptionist'){
                $this->onpremise();
            }
        }

        public function search_doctor(){
            $_SESSION['appointment'] = [];
            $this->load('views','header');
            $this->load('views','search_doctor');
            $this->load('views','footer');
        }

        public function select_doctor(){
            $_SESSION['appointment']['doctor_name'] = $_GET['doctor'];
            $_SESSION['appointment']['specialization'] = $_GET['specialization'];
            $_SESSION['appointment']['date'] = $_GET['date'];
            $this->load('views','header');
            $this->load('views','select_doctor');
        }

        public function available_doctors(){
            $model = $this->load('models','Appointment_Data');
            $specialization = $_SESSION['appointment']['specialization'];
            $name = $_SESSION['appointment']['doctor_name'];

            $result = $model->get_doctors($specialization, $name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function available_dates(){
            $model = $this->load('models','Appointment_Data');
            $id = $_POST['id'];
            $_SESSION['appointment']['doctor_id'] = $id;
            $doctor = $model->doctor_details($id);
            $_SESSION['appointment']['doctor_name'] = $doctor['f_name']." ".$doctor['l_name'];
            $_SESSION['appointment']['doctor_fee'] = $doctor['fee'];

            $result = $model->get_dates($id);

            header('Content-Type: application/json');
            echo json_encode($result);
        }
        
        public function fill_form(){
            $this->load('views','header');
            $this->load('views','appointment_form');
            $this->load('views','footer');
        }

        public function receipt(){
            $this->load('views','header');
            $this->load('views','appointment_receipt');
            $this->load('views','footer');
        }
        
        public function view(){
            $this->load('views','header');
            $this->load('views','view_test');
            $this->load('views','footer');
        }

        public function onpremise(){
            $this->load('views','header');
            $this->load('views','appointment_onpremise');
        }

        public function result(){
            $this->load('views','header');
            $this->load('views','patient_result');
        }   
        public function get_doctors(){
            $model = $this->load('models','Appointment_Data');
            $specialization = $_POST['specialization'];
            $name = $_POST['name'];

            $result = $model->get_doctors($specialization, $name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }
        
        public function view_details(){
            $this->load('views','header');
            $this->load('views','patient_appointment');
        }     
    }