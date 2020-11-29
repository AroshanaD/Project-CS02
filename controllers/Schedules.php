<?php

    class Schedules extends Controllers{

        public function __construct(){

        }

        public function add(){
            $this->load('views','header');
            $this->load('views','add_schedule');
            $this->load('views','footer');
        }

        public function view(){
            $this->load('views','header');
            $this->load('views','view_schedule');
            $this->load('views','footer');
        }

        public function update(){
            $this->load('views','header');
            $this->load('views','update_schedule');
            $this->load('views','footer');
        }

        public function delete(){
            $this->load('views','header');
            $this->load('views','delete_schedule');
            $this->load('views','footer');
        }

    }