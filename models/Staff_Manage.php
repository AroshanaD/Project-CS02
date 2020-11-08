<?php
class Staff_Manage extends Models{
    public function __construct(){

    }

    public function view($category){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT id,f_name,l_name,address,contact_no,email FROM $category";
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

    public function update_current($category,$id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT id,f_name,l_name,address,contact_no,email FROM $category WHERE id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update_change($id,$category,$address,$contact,$email){
        $connect = new Database();
        $pdo = $connect->connect();
        $query= "UPDATE $category SET address=?, contact_no=?, email=? WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$address,$contact,$email,$id]);

        if($status == TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function delete($category,$id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "DELETE FROM $category WHERE id=?";
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