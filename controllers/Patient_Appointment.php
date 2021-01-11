<?php 


    class Patient_Appointment extends Controllers{
        public function __construct(){

        }

        public function patient_appointmentView(){
            $this->load('views','patient_appointment');
        }
        
        public function get_patient_appointmentView(){
            $model=$this->load('models','Appointment_patient');
            $id=$_SESSION['id'];
            
            $result=$model->get_patientApoointment($id);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function search(){
            $model=$this->load('models','Appointment_patient');
            $id=$_SESSION['id'];
            $date=$_POST['date'];
            $result=$model->search($id,$date);

            header('Content-Type: application/json');
            echo json_encode($result);
            
        }

        Public function view_recept(){
            $this->load('views','view_appointment');
        }

        public function get_viewRecept(){
            $model= $this->load('models','Appointment_patient');
            $result = $model->view_recept();
            
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function view_Appoint(){
            $model= $this->load('models','Appointment_patient');
            $appoint_Id=$_GET['id'];
            $result=$model->view_appointment($appoint_Id);

            $_POST['details']=$result;
            $this->load('views','appointmentOfPatient');
        }

    }

    