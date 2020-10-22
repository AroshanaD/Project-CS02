<?php

    Class Register extends Controllers{

        public function __construct(){

        }

        public function index(){
            $this->load('views','register');
        }

    }

?>