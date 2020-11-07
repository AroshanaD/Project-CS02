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
            $this->load('views','view_inventory');
        }

        public function add(){
            $this->load('views','add_inventory');
            $model= $this->load('models','Inventory_manage');
            if(isset($_POST['addMedicine'])){
                $medId = $_POST['med_id'];
                $medName = $_POST['med_name'];
                $medVendor = $_POST['med_vendor'];
                $description = $_POST['med_description'];
                $price = $_POST['med_price'];
                $quantity = $_POST['med_quantity'];

                $user = $model->add($medId,$medName,$medVendor, $description,$price,$quantity);
                

            }
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
