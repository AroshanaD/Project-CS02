<?php

    class Staff extends Controllers{

        public function __construct(){

        }

        public function add(){
            $this->load('views','add_staff');
        }

        public function view(){
            $this->load('views','view_staff');
        }

        public function update(){
            $this->load('views','update_staff');
        }

        public function delete(){
            $this->load('views','delete_staff');
        }

    }