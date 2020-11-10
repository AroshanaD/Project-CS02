<?php 

    class Autofill_Data extends Models{

        public function __construct(){

        }

        public function specialization(){
            $connection = new Database;
            $pdo = $connection->connect();

            $query = "SELECT * FROM specialization ORDER BY name ASC";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $result = $stmt->fetchAll();
            
            return $result;
        }
    }