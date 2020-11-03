<?php 


    class Appointment extends Controllers{
        public function __construct(){

        }

        public function index(){
            $this->load('views','search_doctor');
        }

        public function select_doctor(){
            $this->load('views','select_doctor');
        }

        public function select_date(){
            $this->load('views','select_date');
        }

        public function fill_form(){
            $this->load('views','appointment_form');
        }

        public function receipt(){
            $this->load('views','appointment_receipt');
        }
    }