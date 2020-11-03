<?php 


    class Appointment extends Controllers{
        public function __construct(){

        }

        public function index(){
            $this->load('views','search_doctor');
        }

        public function doctors(){
            $this->load('views','select_doctor');
        }
    }