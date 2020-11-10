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
    }