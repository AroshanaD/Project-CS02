<?php

    class Doctors extends Controllers{

        public function __construct(){

        }

        public function add(){
            $this->load('views','add_doctor');
        }

        public function view(){
            $this->load('views','view_doctor');
        }

        public function update(){
            $this->load('views','update_doctor');
        }

        public function delete(){
            $this->load('views','delete_doctor');
        }

    }