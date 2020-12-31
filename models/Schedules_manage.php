<?php
class Schedules_manage extends Models{
    public function __construct(){

    }

    public function get_doctor($id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT doctor.id,doctor.f_name,doctor.l_name,specialization.name AS 'specialization' 
        FROM doctor LEFT JOIN specialization ON doctor.specialization_id=specialization.id WHERE doctor.id=?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function add_schedule($id,$date,$time){
        $connect = new Database();
        $pdo = $connect->connect();
        $query="INSERT INTO `schedule`(`date`,`time`,`doctor_id`) VALUES(?,?,?)";
        $stmt = $pdo->prepare($query);
        $status=$stmt->execute([$date,$time,$id]);
        return $status;
    }

    public function view(){
        $connect = new Database();
        $pdo = $connect->connect();
        $query="SELECT schedule.id, schedule.date, schedule.time, doctor.f_name AS 'first_name', doctor.l_name AS 'last_name', specialization.name As 'specialization'
        from schedule join doctor on schedule.doctor_id=doctor.id JOIN specialization 
        ON doctor.specialization_id=specialization.id where schedule.deleted='0'";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search($id,$name,$specialization){
        $connect = new Database;
        $pdo = $connect->connect();

        if($name != null){
            $name = $name.'%';
        }
        else{
            $name = '%';
        }
        $query="SELECT schedule.id, schedule.date, schedule.time, doctor.f_name AS 'first_name', doctor.l_name AS 'last_name', specialization.name As 'specialization'
        from schedule join doctor on schedule.doctor_id=doctor.id JOIN specialization 
        ON doctor.specialization_id=specialization.id where (schedule.doctor_id = ? OR doctor.f_name LIKE ? OR doctor.l_name LIKE ? OR specialization.name Like ?) AND schedule.deleted='0'";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id,$name,$name,$specialization]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function get_details($sche_id){
        $connect = new Database();
        $pdo = $connect->connect();
        $query="SELECT schedule.id, schedule.doctor_id,schedule.date, schedule.time, doctor.f_name AS 'first_name', doctor.l_name AS 'last_name'
        from schedule inner join doctor on schedule.doctor_id=doctor.id where schedule.id=? ";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$sche_id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function update($id,$day,$time){
        $connect= new Database();
        $pdo = $connect->connect();
        $query="UPDATE schedule SET date=?, time=? WHERE id=?";
        $stmt=$pdo->prepare($query);
        $status=$stmt->execute([$day,$time,$id]);
        
        if($status==TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }

    public function delete($id){
        $connect=new Database();
        $pdo= $connect->connect();
        $query = "UPDATE schedule SET deleted=1 WHERE id=?";
        $stmt = $pdo->prepare($query);
        $status= $stmt->execute([$id]);

        if($status==TRUE){
            return TRUE;
        }
        else{
            return FALSE;
        }
    }
}
