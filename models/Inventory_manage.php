<?php
class Inventory_manage extends Models{
    public function __construct(){

    }

    public function view_medicine(){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT medicine.id, medicine.name, medicine.description, medicine.vendor, medicine.unit_price, 
                medicine.quantity, medicine.deleted, vendor.id AS 'v_id', vendor.name AS 'v_name'
                FROM medicine LEFT JOIN vendor ON medicine.vendor = vendor.id WHERE medicine.deleted=0";
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

    public function get_lastid(){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT grn_id FROM medicine_grn ORDER BY grn_id DESC LIMIT 1";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
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

        $query = "INSERT INTO `vendor`(name,address,contact_no,email) VALUES(?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$name,$address, $contact,$email]);
        return $status;
    }

    public function displayMedicine($id){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "SELECT medicine.id, medicine.name, medicine.description, medicine.vendor, medicine.unit_price, medicine.quantity, vendor.name AS vendor_name
                FROM medicine LEFT JOIN vendor ON medicine.vendor = vendor.id WHERE medicine.id=? AND medicine.deleted=0 ";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function displayVendor($id){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "SELECT * FROM vendor WHERE id=? AND deleted=0";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
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

        $query = "UPDATE medicine SET deleted=1 WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$medId]);

        if($status == TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function delete_vendor($id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "UPDATE vendor SET deleted=1 WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$id]);

        if($status == TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
?>