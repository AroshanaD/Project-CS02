<?php

    class Report_Data extends Models
    {
        public function __construct()
        {
            
        }

        public function appointment_data()
        {
            $connect = new Database();
            $pdo = $connect->connect();
        }
    }

?>