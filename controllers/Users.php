<?php

    class Users extends Controllers{

        public function __construct(){


        }
        public function index($user_type){
            $this->load('views',$user_type."_index");
        }
    }