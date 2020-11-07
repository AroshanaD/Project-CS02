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

    public function add($medId,$medName,$medVendor, $description,$price,$quantity){
        $connect = new Database();
        $pdo = $connect->connect();
        $query="insert into medicine values('$medId','$medName','$medVendor','$description','$price','$quantity')";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    public function displayById($id){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "select * from medicine where id='".$id."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($medId,$medName,$medVendor, $description,$price,$quantity){
        $connect = new Database();
        $pdo = $connect->connect();
        $query= "update medicine SET id='$medId', name='$medName', vendor='$medVendor', description='$description', unit_price='$price', quantity='$quantity'  where id='".$medId."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    public function delete($medId){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "delete from medicine where id='".$medId."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
}
?>