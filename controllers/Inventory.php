<?php
    class Inventory extends Controllers{
        public function __construct(){
        }

        public function index(){;
            $this->load('views','pharmacist_index');
        }

        public function view(){
            $this->load('views','view_inventory');
        }

        public function add(){
            $this->load('views','add_inventory');
        }

        public function update(){
            $this->load('views','update_inventory');
        }

        public function delete(){
            $this->load('views','delete_inventory');
        }

        public function create_bill(){
            $this->load('views','create_bill');
        }
    }
?>
