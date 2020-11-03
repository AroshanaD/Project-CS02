<?php
class Inventory extends Controllers{
    public function __construct(){
    }

    public function index(){;
        $this->load('views','pharmacist_index');
    }

    public function viewMedicine(){
        $this->load('views','view_inventory');
    }

    public function addMedicine(){
        $this->load('views','add_inventory');
    }

    public function updateMedicine(){
        $this->load('views','update_inventory');
    }
}
?>