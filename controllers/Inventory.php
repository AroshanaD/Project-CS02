<?php
    class Inventory extends Controllers{
        public function __construct(){
        }

        public function index(){;
            $this->load('views','pharmacist_index');
        }

        public function view(){
            $model= $this->load('models','Inventory_manage');
            $result = $model->view();
            $_POST['medicine']= $result;
            //echo $_POST['medicine'];
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

        public function search(){
            $model = $this->load('models','Inventory_manage');
            $result = $model->search($_GET['id'],$_GET['name']);
            print_r(result);
            header('Content-Type: application/json');
            echo json_encode($result);
        }
    }
?>
