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
            
        }

        public function appointment_overview()
        {
            $model = $this->load('models','Report_Data');
            $data = $model->appointment_data();

            header('Content-Type: application/json');
            echo json_encode($data);
        }

        public function inventory_overview()
        {
            $model = $this->load('models','report_Data');
            $result = $model->inventory_data();
            /*header('Content-Type: application/json');
            echo json_encode($result);*/
        }
    }

?>