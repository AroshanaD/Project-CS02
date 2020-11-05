<?php

    Class Register extends Controllers{

        public function __construct(){

        }

        public function index(){
            $this->load('views','register');
        }

        public function register_user(){
            require('models\Register_User.php');
        }

    }

?>