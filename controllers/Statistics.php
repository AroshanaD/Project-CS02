<?php 

    class Statistics extends Controllers{

        public function __construct(){

        }

        public function index(){
            $this->weekly();
        }

        public function weekly(){
            $this->load('views','header');
            $this->load('views','weekly_stat');
            $this->load('views','footer');
        }

        public function monthly(){
            $this->load('views','header');
            $this->load('views','monthly_stat');
            $this->load('views','footer');
        }

        public function yearly(){
            $this->load('views','header');
            $this->load('views','yearly_stat');
            $this->load('views','footer');
        }

    }