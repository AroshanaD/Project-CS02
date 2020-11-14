<?php
class Staff_Manage extends Models{
    public function __construct(){

    }

    public function view($category){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT id,f_name,l_name,address,contact_no,email FROM $category WHERE deleted='0'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search($category,$id,$name){
        $connect = new Database;
        $pdo = $connect->connect();

        if($name != null){
            $name = $name.'%';
        }
        else{
            if($id == null){
                $name = '%';
            }
        }

        $query = "SELECT * FROM $category WHERE id = ? OR f_name LIKE ? OR l_name LIKE ? AND deleted='0'";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id,$name,$name]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add($staff_details){
        $connect = new Database();
        $pdo = $connect->connect();

        $category = $staff_details['category'];
        $query="INSERT INTO `$category`(`id`, `f_name`, `l_name`, `gender`, `birthday`, `address`, `contact_no`, `email`, `pwd`, `verification_key`) VAlUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$staff_details['id'],$staff_details['f_name'],$staff_details['l_name'],
                        $staff_details['gender'],$staff_details['birthday'],
                        $staff_details['address'],$staff_details['contact'],
                        $staff_details['email'],$staff_details['password'],
                        $staff_details['verification_key']]);
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

        $query = "SELECT id,f_name,l_name,gender,birthday,address,contact_no,email FROM $category WHERE id=?";
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

        $query = "UPDATE $category SET deleted='1' WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$id]);

        if($status == TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function perma_delete($category,$id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "DELETE FROM $category WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$id]);
    }

    public function is_verified($verification_key,$category,$id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT verified FROM $category WHERE id=? AND $verification_key=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id,$verification_key]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function confirm($category,$id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "UPDATE $category SET verified=1 WHERE id=? AND verified=0";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$id,$auth_key]);
        return $status;
    }
}
?>