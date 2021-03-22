<?php

    class Report_Data extends Models
    {
        public function __construct()
        {
            
        }

        public function appointment_data()
        {
            $connect = new Database();
            $pdo = $connect->connect();
        }

        public function inventory_data(){
            $connect = new Database();
            $pdo = $connect ->connect();

            /*$result;
            $query = "SELECT COUNT(drug_name) FROM stock;";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $result['total_medicine']=$stmt->fetch();
            if($result!=NULL)
                return $result;
            else
                return false;*/
        }
    }

?>