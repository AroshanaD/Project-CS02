<?php 


    class Appointment extends Controllers{
        public function __construct(){

        }

        public function index(){
            if($_SESSION['user_cat'] == 'patient'){
                $this->search_doctor();
            }
            if($_SESSION['user_cat'] == 'receptionist'){
                $this->onpremise();
            }
        }

        public function search_doctor(){
            $_SESSION['appointment'] = [];
            $this->load('views','search_doctor');
        }

        public function select_doctor(){
            $_SESSION['search']['name'] = $_GET['doctor'];
            $_SESSION['search']['specialization'] = $_GET['specialization'];
            
            $this->load('views','select_doctor');
        }

        public function available_doctors(){
            $model = $this->load('models','Appointment_Data');
            $name = $_SESSION['search']['name'];
            $specialization = $_SESSION['search']['specialization'];

            $result = $model->get_doctors($specialization, $name);
            $_SESSION['search']['search_doclist'] = $result;
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function select_dates(){
            $doctor = $_GET['doctor'];
            $id = $_SESSION['search']['search_doclist'][$doctor]['id'];

            $model = $this->load('models','Appointment_Data');
            $doctor = $model->doctor_details($id);

            $_SESSION['appointment']['doctor_id'] = $id;
            $_SESSION['appointment']['doctor_name'] = $doctor['f_name']." ".$doctor['l_name'];
            $_SESSION['appointment']['doctor_qualification'] = $doctor['qualification'];
            $_SESSION['appointment']['doctor_fee'] = $doctor['fee'];

            $this->load('views','select_date');
        }

        public function available_dates(){
            $model = $this->load('models','Appointment_Data');

            $id = $_SESSION['appointment']['doctor_id'];
            $result = $model->get_dates($id);
            $_SESSION['search']['search_datelist'] = $result;
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function available_appointment(){
            $model = $this->load('models','Appointment_Data');
            $doc_id = $_SESSION['appointment']['doctor_id'];
            $date=$_POST['date'];
            $_SESSION['appointment']['select_date']=$date;
            $result = $model->available_appoint($doc_id,$date);
            $_SESSION['appointment']['seat_no']=$result['Seat_no'];
            if($result['Seat_no']==null){
                $status=0; // avaiable and no seat book yet
            }
            else if($result['Seat_no']>0 && $result['Seat_no']<70){
                $status=1; // available and some of seats are booked
            }
            else{
                $status=2; // seat are not available
            }
            header('Content-Type: application/json');
            echo json_encode($status);
        }
        
        
        public function fill_form(){
            $this->load('views','appointment_form');
        }

        public function receipt(){
            $this->load('views','appointment_receipt');
        }
        
        public function view(){
            $this->load('views','view_test');
        }

        public function onpremise(){
            $this->load('views','appointment_onpremise');
        }

        public function result(){
            $this->load('views','patient_result');
        }   
        
        public function view_details(){
            $this->load('views','patient_appointment');
        }     

        public function doctors(){
            $model = $this->load('models','Appointment_Data');

            $specialization = $_POST['specialization'];
            $result = $model->doctors($specialization);
            header('Content-Type: application/json');
            echo json_encode($result);
        }
    }