<?php

    class Autofill extends Controllers{

        public function __construct(){

        }

        public function specializations(){
            $model = $this->load('models','Autofill_Data');
            $result = $model->specialization();

            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function vendors(){
            $model = $this->load('models','Autofill_Data');
            $result = $model->vendors();

            header('Content-Type: application/json');
            echo json_encode($result);
        }
    }