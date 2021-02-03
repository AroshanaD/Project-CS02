<?php 

    class Statistics extends Controllers{

        public function __construct(){

        }

        public function appointment(){
            $this->load('views','appointment_stat');
        }

        public function pharmacy(){
            $this->load('views','pharmacy_stat');
        }

        public function lab(){
            $this->load('views','lab_stat');
        }

        public function report(){
            $this->load('views','generate_report');
        }

    }