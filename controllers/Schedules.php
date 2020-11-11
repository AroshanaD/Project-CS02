<?php

    class Schedules extends Controllers{

        public function __construct(){

        }

        public function add(){
            $this->load('views','header');
            $this->load('views','add_schedule');
        }

        public function view(){
            $this->load('views','header');
            $this->load('views','view_schedule');
        }

        public function update(){
            $this->load('views','header');
            $this->load('views','update_schedule');
        }

        public function delete(){
            $this->load('views','header');
            $this->load('views','delete_schedule');
        }

    }