<?php
class Staff_Manage extends Models{
    public function __construct(){

    }

    public function view($category,$id,$name){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "SELECT * FROM $category";
        
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

    public function add($staff_details){
        $connect = new Database();
        $pdo = $connect->connect();

        $category = $staff_details['category'];
        $query="INSERT INTO $category values(?,?,?,?,?,?,?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$staff_details['id'],$staff_details['f_name'],$staff_details['l_name'],
                        $staff_details['address'],$staff_details['contact'],$staff_details['email'],
                       $staff_details['password']]);
        if($status == TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
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