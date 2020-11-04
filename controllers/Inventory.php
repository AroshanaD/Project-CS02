<?php

    class Inventory extends Controllers{

        public function __construct(){

        }

        public function create_bill(){
            $this->load('views','create_bill');
        }

    }