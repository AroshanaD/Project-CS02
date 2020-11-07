<?php
class Inventory_manage extends Models{
    public function __construct(){

    }

    public function view(){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT * FROM medicine";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search($id,$name){
        $connect = new Database;
        $pdo = $connect->connect();

        $query = "SELECT * FROM medicine WHERE id = ? OR name = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id,$name]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add($medId,$medName,$medVendor, $description,$price,$quantity){
        $connect = new Database();
        $pdo = $connect->connect();
        $query="insert into medicine values('$medId','$medName','$medVendor','$description','$price','$quantity')";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
}
?>