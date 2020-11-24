<?php
    class Inventory extends Controllers{
        public function __construct(){
        }

        public function index(){;
            $this->view();
        }

        public function view(){
            $this->load('views','header');
            if(isset($_GET['view'])){
                if($_GET['view'] == 'vendor'){
                    $this->load('views','view_vendors');
                }
                else{
                    $this->load('views','view_inventory');
                }
            }
            else{
                $this->load('views','view_inventory');
            }
        }

        public function get_medicine(){
            $model= $this->load('models','Inventory_manage');
            $result = $model->view_medicine();
            
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function get_vendors(){
            $model= $this->load('models','Inventory_manage');
            $result = $model->view_vendors();
            
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function add(){
            $this->load('views','header');
            if(isset($_GET['add'])){
                if($_GET['add'] == 'vendor'){
                    $this->load('views','add_vendor');
                }
                else{
                    $this->load('views','add_inventory');
                }
            }
            else{
                $this->load('views','add_inventory');
            }
        }

        public function add_medicine(){
            $model= $this->load('models','Inventory_manage');

            $name = $_POST['name'];
            $vendor = $_POST['vendor'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];

            $result = $model->add_medicine($name,$description,$vendor,$price,$quantity);

            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function update(){
            if($_GET['update'] == 'medicine'){
                $id = $_GET['id'];
                $model= $this->load('models','Inventory_manage');
                $result= $model->displayById($id);
                $_POST['medicine']=$result;
                $this->load('views','header');
                $this->load('views','update_inventory');
            }
            if($_GET['update'] == 'vendor'){

            }
        }

        public function update_medicine(){
            $model= $this->load('models','Inventory_manage');
            $id = $_POST['id'];
            $name = $_POST['name'];
            $vendor = $_POST['vendor'];
            $description = $_POST['description'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];

            $result = $model->update_medicine($id,$name,$description,$vendor,$price,$quantity);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function delete_medicine(){
            $id = $_GET['id'];
            $model= $this->load('models','Inventory_manage');
            $result= $model->displayById($id);
            $_POST['medicine']=$result;
            $this->load('views','header');
            $this->load('views','delete_inventory');

            if(isset($_POST['deleteMedicine'])){
                $medId = $_POST['id'];
                $user = $model->delete($medId);
                header("Location: ../inventory/view?successfully deleted");
                $this->view();
            }
        }

        public function create_bill(){
            $this->load('views','header');
            $this->load('views','create_bill');
        }

        public function search_medicine(){
            $model = $this->load('models','Inventory_manage');
            $id = $_POST['id'];
            $name = $_POST['name'];
            $result = $model->search($id,$name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }
    }
?>
