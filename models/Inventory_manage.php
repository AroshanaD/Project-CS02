<?php
class Inventory_manage extends Models{
    public function __construct(){

    }

    public function view(){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT * FROM medicine";
        $stmt = $pdo->prepare($query);
        $result = $stmt->fetch();
        return $result;
    }
}
?>