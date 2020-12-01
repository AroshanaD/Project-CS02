<?php 


    class Patient_Appointment extends Controllers{
        public function __construct(){

        }

        Public function view_recept(){
            $this->load('views','header');
            $this->load('views','view_appointment');
            $this->load('views','footer');
        }

        public function get_viewRecept(){
            $model= $this->load('models','Appointment_patient');
            $result = $model->view_recept();
            
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function view_Appoint(){
            $this->load('views','header');
            $this->load('views','appointmentOfPatient');
            $this->load('views','footer');
        }

    }

    