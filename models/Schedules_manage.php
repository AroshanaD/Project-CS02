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
}
