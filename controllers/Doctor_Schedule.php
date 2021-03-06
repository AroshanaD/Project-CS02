<?php

    class Doctor_Schedule extends Controllers{
        public function __construct(){

        }

        public function index(){
            $this->load('views','doctor_schedule');
        }

        public function schedules(){
            $specialization = $_POST['specialization'];
            $model = $this->load('models','Week_Schedules');
            $result = $model->schedules($specialization);

            header('Content-Type: application/json');
            echo json_encode($result);
        }
        
        public function view_appointment(){
            $this->load('views','view_appointment');
        }
    }

?>
