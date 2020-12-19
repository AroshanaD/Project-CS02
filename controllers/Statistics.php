<?php 

    class Statistics extends Controllers{

        public function __construct(){

        }

        public function index(){
            $this->weekly();
        }

        public function weekly(){
            $this->load('views','weekly_stat');
        }

        public function monthly(){
            $this->load('views','monthly_stat');
        }

        public function yearly(){
            $this->load('views','yearly_stat');
        }

        public function report(){
            $this->load('views','generate_report');
        }

    }