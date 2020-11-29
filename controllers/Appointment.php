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
        }

        public function select_doctor(){
            $_SESSION['search']['name'] = $_GET['doctor'];
            $_SESSION['search']['specialization'] = $_GET['specialization'];
            $_SESSION['search']['date'] = $_GET['date'];

            $this->load('views','header');
            $this->load('views','select_doctor');
        }

        public function available_doctors(){
            $model = $this->load('models','Appointment_Data');
            $name = $_SESSION['search']['name'];
            $specialization = $_SESSION['search']['specialization'];
            $date = $_SESSION['search']['date'];

            $result = $model->get_doctors($specialization, $name);
            $_SESSION['search']['search_doclist'] = $result;
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function select_dates(){
            $doctor = $_GET['doctor'];
            $id = $_SESSION['search']['search_doclist'][$doctor]['id'];
            //echo $id;

            $model = $this->load('models','Appointment_Data');
            $doctor = $model->doctor_details($id);

            $_SESSION['appointment']['doctor_id'] = $id;
            $_SESSION['appointment']['doctor_name'] = $doctor['f_name']." ".$doctor['l_name'];
            $_SESSION['appointment']['doctor_fee'] = $doctor['fee'];

            $this->load('views','header');
            $this->load('views','select_date');
        }

        public function available_dates(){
            $model = $this->load('models','Appointment_Data');
            $result = $model->get_dates($id);
            header('Content-Type: application/json');
            echo json_encode($result);
        }
        
        public function fill_form(){
            $this->load('views','header');
            $this->load('views','appointment_form');
        }

        public function receipt(){
            $this->load('views','header');
            $this->load('views','appointment_receipt');
        }
        
        public function view(){
            $this->load('views','header');
            $this->load('views','view_test');
        }

        public function onpremise(){
            $this->load('views','header');
            $this->load('views','appointment_onpremise');
        }

        public function result(){
            $this->load('views','header');
            $this->load('views','patient_result');
        }   
        
        public function view_details(){
            $this->load('views','header');
            $this->load('views','patient_appointment');
        }     
    }