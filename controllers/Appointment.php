<?php 


    class Appointment extends Controllers{
        public function __construct(){

        }

        public function index(){
            $this->load('views','header');
            $this->search_doctor();
            $this->load('views','footer');
        }

        public function search_doctor(){
            $this->load('views','header');
            $this->load('views','search_doctor');
            $this->load('views','footer');
        }

        public function select_doctor(){
            $this->load('views','header');
            $this->load('views','select_doctor');
            $this->load('views','footer');
        }

        public function select_date(){
            $this->load('views','header');
            $this->load('views','select_date');
            $this->load('views','footer');
        }

        public function fill_form(){
            $this->load('views','header');
            $this->load('views','appointment_form');
            $this->load('views','footer');
        }

        public function receipt(){
            $this->load('views','header');
            $this->load('views','appointment_receipt');
            $this->load('views','footer');
        }
        
        public function view(){
            $this->load('views','header');
            $this->load('views','view_test');
            $this->load('views','footer');
        }

        public function view_appointment(){
            $this->load('views','header');
            $this->load('views','view_appointment');
            $this->load('views','footer');
        }

        
    }