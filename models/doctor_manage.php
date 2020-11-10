<?php
class doctor_manage extends Models{
    public function __construct(){

    }

    public function view($specialization){
        $connect = new Database();
        $pdo = $connect->connect();

        if($specialization == null){
            $query = "SELECT doctor.id,doctor.f_name,doctor.l_name,doctor.qualification,doctor.address,doctor.contact_no,doctor.email,doctor.fee,specialization.name AS 'specialization' 
            FROM doctor LEFT JOIN specialization ON doctor.specialization_id=specialization.id WHERE doctor.deleted='0'";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        }
        else{
            $query = "SELECT doctor.id,doctor.f_name,doctor.l_name,doctor.qualification,doctor.address,doctor.contact_no,doctor.email,doctor.fee,specialization.name AS 'specialization' 
                FROM doctor LEFT JOIN specialization ON doctor.specialization_id=specialization.id WHERE specialization.id = ? AND doctor.deleted='0'";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$specialization]);
        }
    
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
            if($id == null){
                $name = '%';
            }
        }

        $query = "SELECT doctor.id,doctor.f_name,doctor.l_name,doctor.qualification,doctor.address,doctor.contact_no,doctor.email,doctor.fee,specialization.name AS 'specialization' 
                FROM doctor LEFT JOIN specialization ON doctor.specialization_id=specialization.id WHERE (doctor.deleted='0') AND (doctor.id = ? OR doctor.f_name LIKE ? OR doctor.l_name LIKE ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id,$name,$name]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add($id,$f_name,$l_name, $qualifi,$address,$contact,$email,$specialization,$fee){
        $connect = new Database();
        $pdo = $connect->connect();
        $query="insert into doctor values('$id','$f_name','$l_name','$qualifi','$address','$contact','$email','$specialization','$fee')";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    public function displayById($id){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "SELECT f_name,l_name,qualification,specialization_id,fee,contact_no,address,email FROM doctor where id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id,$qualification,$fee,$address,$contact,$email){
        $connect = new Database();
        $pdo = $connect->connect();
        $query= "UPDATE doctor SET qualification=?,fee=?,address=?,contact_no=?,email=? WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$qualification,$fee,$address,$contact,$email,$id]);
        if($status == TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function delete($id){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "UPDATE doctor SET deleted='1' WHERE id=?";
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