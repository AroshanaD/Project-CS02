<?php
class Inventory_manage extends Models{
    public function __construct(){

    }

    public function view_medicine(){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT * FROM medicine WHERE deleted='0'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function view_vendors(){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT * FROM vendor WHERE deleted='0'";
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

    public function search_vendor($name){
        $connect = new Database;
        $pdo = $connect->connect();

        if($name != null){
            $name = $name.'%';
        }
        else{
            $name = '';
        }

        $query = "SELECT * FROM vendor WHERE name LIKE ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$name]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add_medicine($name,$vendor, $description,$price,$quantity){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "INSERT INTO `medicine`(name,description,vendor,unit_price,quantity) VALUES(?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$name,$vendor, $description,$price,$quantity]);
        return $status;
    }

    public function add_vendor($name,$address, $contact,$email){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "INSERT INTO `vendor`(name,address,contact,email) VALUES(?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$name,$address, $contact,$email]);
        return $status;
    }

    public function displayById($id){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "SELECT medicine.id, medicine.name, medicine.description, medicine.vendor, medicine.unit_price, medicine.quantity, vendor.name AS vendor_name
                FROM medicine LEFT JOIN vendor ON medicine.vendor = vendor.id WHERE medicine.id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update_medicine($id,$name,$description,$vendor,$price,$quantity){
        $connect = new Database();
        $pdo = $connect->connect();
        $query= "UPDATE medicine SET name=?, description=?, vendor=?, unit_price=?, quantity=? WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$name,$description,$vendor,$price,$quantity,$id]);

        return $status;
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