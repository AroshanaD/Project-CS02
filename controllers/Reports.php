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
            
        }
    }

?>