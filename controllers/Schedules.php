<?php

    class Schedules extends Controllers{

        public function __construct(){

        }

        public function get_add(){
            $model = $this->load('models','Schedules_manage');
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $result = $model->get_doctor($id);
                $_SESSION['schedule']['doctor_id']=$result['id'];
                $_POST['details'] = $result;
            }
            $this->load('views','add_schedule');
        }

        public function add(){
            $model=$this->load('models','Schedules_manage');
            
            $id=$_SESSION['schedule']['doctor_id'] ;
            $noOfSchedule = count($_POST["day"]);

            for ($i=0; $i < $noOfSchedule; $i++) { 
                if (trim($_POST['day'] != '') && trim($_POST['time'] != '') && trim($_POST['maxPatient'] !=='')) {
                    $date   = $_POST["day"][$i];
                    $time = $_POST["time"][$i];
                    $maxPatient=$_POST["maxPatient"][$i];
                    $result = $model->add_schedule($id,$date,$time,$maxPatient);
                }
            }
            $URL= Router::site_url()."/Schedules/view?successfully added";
             echo "<script>location.href='$URL'</script>";
        }

        public function view(){
            $this->load('views','view_schedule');
        }


        public function get_view(){
            $model= $this->load('models','Schedules_Manage');
            $result = $model->view();
            
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function search(){
            $model= $this->load('models','Schedules_Manage');
            $id=$_POST['id'];
            $name=$_POST['name'];
            $specialization=$_POST['specialization'];

            $result=$model->search($id,$name,$specialization);

            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function update(){
            $model= $this->load('models','Schedules_Manage');
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $result=$model->get_details($id);
                $_POST['details'] = $result;
             }
            $this->load('views','update_schedule');

            if(isset($_POST['Update'])){
                $day=$_POST['day'];
                $time=$_POST['sche_time'];
                $maxPatient=$_POST['maxpatient'];
                $result=$model->update($id,$day,$time,$maxPatient);

                if($result==TRUE){
                    $URL= Router::site_url()."/schedules/view?successfully updated";
                    echo "<script>location.href='$URL'</script>";
                }
                else{
                    $URL= Router::site_url()."/schedules/view?something went wrong";
                    echo "<script>location.href='$URL'</script>"; 
                }   
            }
        }

        public function delete(){
            $model= $this->load('models','Schedules_Manage');
            if(isset($_GET['id'])){
                $id=$_GET['id'];
                $result=$model->get_details($id);
                $_POST['details'] = $result;
             }
            $this->load('views','delete_schedule');

            if(isset($_POST['Delete'])){
                $result=$model->delete($id);
                if($result==TRUE){
                    $URL= Router::site_url()."/schedules/view?successfully deleted";
                    echo "<script>location.href='$URL'</script>";
                }
                else{
                    $URL= Router::site_url()."/schedules/view?something went wrong";
                    echo "<script>location.href='$URL'</script>"; 
                }
            }
        }

    }