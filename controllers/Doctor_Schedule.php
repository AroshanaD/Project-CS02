<?php

    class Doctor_Schedule extends Controllers{
        public function __construct(){

        }

        public function index(){
            if($_SESSION['id']){
                $this->load('views','header');
            }
            $this->load('views','doctor_schedule');
        }

        public function schedules(){
            $specialization = $_POST['specialization'];
            $model = $this->load('models','Week_Schedules');
            $result = $model->schedules($specialization);

            header('Content-Type: application/json');
            echo json_encode($result);
        }
    }

?>
