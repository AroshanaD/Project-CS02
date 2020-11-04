<?php
    class Inventory extends Controllers{
        public function __construct(){
        }

        public function index(){;
            $this->load('views','view_inventory');
        }

        public function view_medicine(){
            $this->load('views','view_inventory');
        }

        public function add_medicine(){
            $this->load('views','add_inventory');
        }

        public function update_medicine(){
            $this->load('views','update_inventory');
        }

        public function create_bill(){
            $this->load('views','create_bill');
        }
    }
?>
