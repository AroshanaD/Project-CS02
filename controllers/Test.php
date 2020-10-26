<?php

    class Test extends Controllers{
        public function __construct(){

        }
        public function index(){
            $this->load('views','add_doctor');
        }
    }