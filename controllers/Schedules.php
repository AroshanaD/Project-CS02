<?php

    class Schedules extends Controllers{

        public function __construct(){

        }

        public function get_add(){
            $model = $this->load('models','Schedules_manage');
            if(isset($_GET['id'])){
                $id = $_GET['id'];
                $result = $model->get_doctor($id);
                $_POST['details'] = $result;
            }
            $this->load('views','add_schedule');
        }

        public function add(){
            $model=$this->load('models','Schedules_manage');
            
            $id=$_POST['doc_id'] ;
            $noOfSchedule = count($_POST["day"]);

            for ($i=0; $i < $noOfSchedule; $i++) { 
                if (trim($_POST['day'] != '') && trim($_POST['time'] != '')) {
                    $date   = $_POST["day"][$i];
                    $time = $_POST["time"][$i];
                    $result = $model->add_schedule($id,$date,$time);
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

        public function update(){
            $this->load('views','update_schedule');
        }

        public function delete(){
            $this->load('views','delete_schedule');
        }

    }