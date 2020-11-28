<?php

    class Appointment_Data extends Models{
        
        public function __construct(){

        }

        public function get_doctors($specialization, $name){

            if($name != null){
                $name = $name.'%';
            }
            else{
                $name = '%';
            }

            $connect = new Database();
            $pdo = $connect->connect();
            $query = "SELECT doctor.id, doctor.f_name, doctor.l_name, specialization.name AS 'specialization',
                    doctor.qualification, doctor.fee FROM doctor INNER JOIN specialization ON 
                    doctor.specialization_id = specialization.id WHERE specialization.id = ? AND 
                    (doctor.f_name LIKE ? OR doctor.l_name LIKE ?) AND doctor.deleted = 0";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$specialization, $name, $name]);
            $result = $stmt->fetchAll();
            return $result;
        }

        public function doctor_details($id){
            $connect = new Database();
            $pdo = $connect->connect();
            $query = "SELECT f_name, l_name, qualification, fee FROM doctor WHERE id=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
            $result = $stmt->fetch();
            return $result;
        }

        public function get_dates($id){
            $connect = new Database();
            $pdo = $connect->connect();
            $query = "SELECT schedule_month.id, schedule_month.date, schedule.time
                    FROM schedule_month INNER JOIN schedule ON 
                    schedule_month.schedule_id = schedule.id WHERE schedule.doctor_id =?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
            $result = $stmt->fetchAll();
            return $result;
        }

    }

?>