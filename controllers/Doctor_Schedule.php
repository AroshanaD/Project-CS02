<?php

    class Doctor_Schedule extends Controllers{
        public function __construct(){

        }

        public function index(){
            $this->load('views','doctor_schedule');
        }
    }

?>
