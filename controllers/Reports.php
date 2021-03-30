<?php

    class Reports extends Controllers{

        public function __construct()
        {
            
        }

        public function view_report()
        {
            $category = $_POST['category'];
            $from_day = $_POST['from_date'];
            $to_day = $_POST['to_date'];

            $this->load('views',$category);
            $_SESSION['from_date'] = $from_day;
            $_SESSION['to_date'] = $to_day;
            
        }

        public function appointment_overview()
        {
            $model = $this->load('models','Report_Data');
            $data = $model->appointment_data($_SESSION['from_date'],$_SESSION['to_date']);

            header('Content-Type: application/json');
            echo json_encode($data);
        }

        public function doctor_appointment_overview(){
            $model = $this->load('models','Report_Data');
            $data = $model->doctor_appointment_data($_SESSION['id'],$_SESSION['from_date'],$_SESSION['to_date']);

            header('Content-Type: application/json');
            echo json_encode($data);
        }

        public function inventory_overview()
        {
            $model = $this->load('models','report_Data');
            $result = $model->inventory_data($_SESSION['from_date'],$_SESSION['to_date']);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function labtest_overview()
        {
            $model = $this->load('models','report_Data');
            $result = $model->labtest_data();
            header('Content-Type: application/json');
            echo json_encode($result);
        }
    }

?>