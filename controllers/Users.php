<?php

    class Users extends Controllers{

        public function __construct(){


        }
        public function index($user_type){
            $this->load('views','header');
            $this->load('views',$user_type[0]);
        }
    }