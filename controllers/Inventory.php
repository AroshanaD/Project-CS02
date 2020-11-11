<?php
    class Inventory extends Controllers{
        public function __construct(){
        }

        public function index(){;
            $this->view();
        }

        public function view(){
            $this->load('views','header');
            $this->load('views','view_inventory');
        }

        public function get_view(){
            $model= $this->load('models','Inventory_manage');
            $result = $model->view();
            
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function add(){
            $this->load('views','header');
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
            $id = $_GET['id'];
            $model= $this->load('models','Inventory_manage');
            $result= $model->displayById($id);
            $_POST['medicine']=$result;
            $this->load('views','header');
            $this->load('views','update_inventory');

            if(isset($_POST['Update'])){
                $medName = $_POST['med_name'];
                $medVendor = $_POST['med_vendor'];
                $description = $_POST['med_description'];
                $price = $_POST['med_price'];
                $quantity = $_POST['med_quantity'];

                $result = $model->update($id,$medName,$medVendor, $description,$price,$quantity);

                if($result ==  TRUE){
                    header("Location: ../inventory/view?successfully updated");
                }
                else{
                    header("Location: ../inventory/view?something went wrong");
                }
            }
        }

        public function delete(){
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

        public function search(){
            $model = $this->load('models','Inventory_manage');
            $id = $_POST['id'];
            $name = $_POST['name'];
            $result = $model->search($id,$name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }
    }
?>
