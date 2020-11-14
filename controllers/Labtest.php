<?php

    class Labtest extends Controllers{

        public function __construct(){

        }

        public function create_test(){
            $this->load('views','header');
            $this->load('views','add_labtest');
        }

        public function add(){
            $this->load('views','header');
            $this->load('views','add_test');
            $model=$this->load('models','Labtest_manage');
            
            if(isset($_POST['Add'])){
                print("hello danu ");
                $id=$_POST['test_id'];
                $name=$_POST['test_name'];
                $description=$_POST['test_description'];
                $price=$_POST['test_price'];

                $result= $model->add($id,$name,$price,$description);
                if($result==TRUE){
                    header("Location:labtest/view?successfully updated");
                    $this->view();
                }
                else{
                    header("Location: ../labtest/view?something went wrong");
                }
            }
        }

        public function view(){
            $this->load('views','header');
            $this->load('views','view_test');
        }

        public function update(){
            $this->load('views','header');
            $this->load('views','update_test');
        }

        public function delete(){
            $this->load('views','header');
            $this->load('views','delete_test');
        }

    }
?>