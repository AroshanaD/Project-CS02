<?php 

    class Statistics extends Controllers{

        public function __construct(){

        }

        public function index(){
            $this->load('views','header');
            $this->load('views','weekly_stat');
        }

        public function weekly(){
            $this->load('views','header');
            $this->load('views','weekly_stat');
        }

        public function monthly(){
            $this->load('views','header');
            $this->load('views','monthly_stat');
        }

        public function yearly(){
            $this->load('views','header');
            $this->load('views','yearly_stat');
        }

    }