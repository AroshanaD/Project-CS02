<?php

    class Main extends Controllers{
        public function __construct(){

        }
        public function index(){
            $this->load('views','main_page');
        }
    }