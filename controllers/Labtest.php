<?php

    class Labtest extends Controllers{

        public function __construct(){

        } 

        public function add(){
            $this->load('views','header');
            $this->load('views','add_test');
            $model=$this->load('models','Labtest_manage');
            
            if(isset($_POST['Add'])){
                $id=$_POST['test_id'];
                $name=$_POST['test_name'];
                $description=$_POST['test_description'];
                $price=$_POST['test_price'];

                $model->add($id,$name,$price,$description);
            }
        }

        public function view(){
            $this->load('views','header');
            $this->load('views','view_test');
        }

        public function get_view(){
            $model= $this->load('models','Labtest_manage');
            $result = $model->view();
            
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function search(){
            $model = $this->load('models','labtest_manage');
            $id = $_POST['id'];
            $name = $_POST['name'];
            $result = $model->search($id,$name);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function update(){
            $id = $_GET['id'];
            $model= $this->load('models','Labtest_manage');
            $result= $model->displayById($id);
            $_POST['test']=$result;
            $this->load('views','header');
            $this->load('views','update_test');

            if(isset($_POST['Update'])){
                $testName = $_POST['test_name'];
                $description = $_POST['test_description'];
                $price = $_POST['test_price'];

                $result=$model->update($id,$testName,$price,$description);

                if($result==TRUE){
                    $URL= Router::site_url()."/labtest/view?successfully updated";
                    echo "<script>location.href='$URL'</script>";
                }
                else{
                    $URL= Router::site_url()."/labtest/view?something went wrong";
                    echo "<script>location.href='$URL'</script>"; 
                }
            }
        }

        public function delete(){
            $id = $_GET['id'];
            $model= $this->load('models','Labtest_manage');
            $result= $model->displayById($id);
            $_POST['test']=$result;
            $this->load('views','header');
            $this->load('views','delete_test');

            if(isset($_POST['Delete'])){
                $testId = $_POST['id'];
                $result=$model->delete($testId);
                if($result==TRUE){
                    $URL= Router::site_url()."/labtest/view?successfully deleted";
                    echo "<script>location.href='$URL'</script>";
                }
                else{
                    $URL= Router::site_url()."/labtest/view?something went wrong";
                    echo "<script>location.href='$URL'</script>"; 
                }
            }
        }

    }
?>