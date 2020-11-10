<?php
class doctor_manage extends Models{
    public function __construct(){

    }

    public function view($specialization){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT id,f_name,l_name,qualification,address,contact,email,fee,specialization_id FROM doctor";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search($category,$id,$name){
        $connect = new Database;
        $pdo = $connect->connect();

        $query = "SELECT * FROM doctor WHERE id = ? OR name = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id,$name]);
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
        $query = "select * from doctor where id='".$id."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id,$f_name,$l_name, $qualifi,$address,$contact,$email,$specialization,$fee){
        $connect = new Database();
        $pdo = $connect->connect();
        $query= "update doctor SET id='$id', f_name='$f_name',l_name='$l_name', qualification='$qualifi',address='$address',contact='$contact,email='$email',specialization='$specialization',fee='$fee' where id='".$id."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }

    public function delete($id){
        $connect = new Database();
        $pdo = $connect->connect();
        $query = "delete from doctor where id='".$id."'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
    }
}
?>