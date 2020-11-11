<?php

    class Labtest extends Controllers{

        public function __construct(){

        }

        public function create_test(){
            $this->load('views','header');
            $this->load('views','add_labtest');
        }

        public function add(){
            $this->load('views','header');
            $this->load('views','add_test');
        }

        public function view(){
            $this->load('views','header');
            $this->load('views','view_test');
        }

        public function update(){
            $this->load('views','header');
            $this->load('views','update_test');
        }

        public function delete(){
            $this->load('views','header');
            $this->load('views','delete_test');
        }

    }