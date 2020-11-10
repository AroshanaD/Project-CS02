<?php
class Inventory_manage extends Models{
    public function __construct(){

    }

    public function view(){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT * FROM medicine WHERE deleted='0'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search($id,$name){
        $connect = new Database;
        $pdo = $connect->connect();

        if($name != null){
            $name = $name.'%';
        }
        else{
            $name = '';
        }

        $query = "SELECT * FROM medicine WHERE id = ? OR name LIKE ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id,$name]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add($medId,$medName,$medVendor, $description,$price,$quantity){
        $connect = new Database();
        $pdo = $connect->connect();
        $deleted = 0;
        $query="insert into medicine values('$medId','$medName','$medVendor','$description','$price','$quantity','$deleted')";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    public function displayById($id){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "SELECT * FROM medicine WHERE id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($medId,$medName,$medVendor, $description,$price,$quantity){
        $connect = new Database();
        $pdo = $connect->connect();
        $deleted = 0;
        $query= "UPDATE medicine SET name=?, vendor=?, description=?, unit_price=?, quantity=? , deleted='$deleted' WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$medName,$medVendor, $description,$price,$quantity,$medId]);

        if($status == TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function delete($medId){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "UPDATE medicine SET deleted='1' WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$medId]);

        if($status == TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
?>