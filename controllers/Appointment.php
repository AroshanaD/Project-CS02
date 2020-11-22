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
            $this->load('views','header');
            $this->load('views','search_doctor');
        }

        public function select_doctor(){
            $this->load('views','header');
            $this->load('views','select_doctor');
        }

        public function select_date(){
            $this->load('views','header');
            $this->load('views','select_date');
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

        public function get_doctors(){
            $model = $this->load('models','Appointment_Data');
            $specialization = $_POST['specialization'];
            $name = $_POST['name'];

            $result = $model->get_doctors($specialization, $name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }
        
    }