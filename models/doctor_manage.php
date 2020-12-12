<?php
class doctor_manage extends Models{
    public function __construct(){

    }

    public function view($specialization){
        $connect = new Database();
        $pdo = $connect->connect();

        if($specialization == null){
            $query = "SELECT doctor.id,doctor.f_name,doctor.l_name,doctor.qualification,doctor.address,doctor.contact_no,doctor.email,doctor.fee,specialization.name AS 'specialization' 
            FROM doctor LEFT JOIN specialization ON doctor.specialization_id=specialization.id WHERE doctor.deleted=0";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        }
        else{
            $query = "SELECT doctor.id,doctor.f_name,doctor.l_name,doctor.qualification,doctor.address,doctor.contact_no,doctor.email,doctor.fee,specialization.name AS 'specialization' 
                FROM doctor LEFT JOIN specialization ON doctor.specialization_id=specialization.id WHERE specialization.id = ? AND doctor.deleted=0";
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

    public function add($doctor_details){
        $connect = new Database();
        $pdo = $connect->connect();

        $query="INSERT INTO `doctor`(`id`, `f_name`, `l_name`, `gender`, `qualification`, `address`, `contact_no`, `email`, `specialization_id`, `fee`, `pwd`, `verification_key`) VAlUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$doctor_details['id'],$doctor_details['f_name'],$doctor_details['l_name'],
                        $doctor_details['gender'],$doctor_details['qualification'],
                        $doctor_details['address'],$doctor_details['contact'],
                        $doctor_details['email'], $doctor_details['specialization'],
                        $doctor_details['fee'], $doctor_details['password'],
                        $doctor_details['verification_key']]);
        if($status == TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
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

    public function update_current($id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT doctor.id,doctor.f_name,doctor.l_name,doctor.gender,doctor.qualification,doctor.address,doctor.contact_no,doctor.email,doctor.fee,specialization.name AS 'specialization' 
        FROM doctor LEFT JOIN specialization ON doctor.specialization_id=specialization.id WHERE doctor.id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update_change($id,$qualification,$address,$contact,$email,$fee){
        $connect = new Database();
        $pdo = $connect->connect();
        $query= "UPDATE doctor SET qualification=?, address=?, contact_no=?, email=?, fee=? WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$qualification,$address,$contact,$email,$fee,$id]);

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

    public function perma_delete($id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "DELETE FROM doctor WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$id]);
    }

    public function is_verified($verification_key,$id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT verified FROM doctor WHERE id=? AND verification_key=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id,$verification_key]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function confirm($id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "UPDATE doctor SET verified=1 WHERE id=? AND verified=0";
        $stmt = $pdo->prepare($query);
        $status = $stmt->execute([$id]);
        return $status;
    }
}
?>