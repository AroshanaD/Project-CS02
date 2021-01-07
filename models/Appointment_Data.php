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
            $query = "SELECT doctor.f_name, doctor.l_name, doctor.qualification, doctor.fee, specialization.name AS 'specialization' FROM doctor INNER JOIN specialization ON doctor.specialization_id = specialization.id WHERE doctor.id=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
            $result = $stmt->fetch();
            return $result;
        }

        public function get_dates($id){
            $connect = new Database();
            $pdo = $connect->connect();
            $query = "SELECT id,date,time FROM schedule WHERE doctor_id=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
            $result = $stmt->fetchAll();
            return $result;
        }

        public function doctors($specialization){
            $connect = new Database();
            $pdo = $connect->connect();
    
            if($specialization == null){
                $query = "SELECT id,f_name,l_name,qualification,fee, specialization_id FROM doctor WHERE deleted=0";
                $stmt = $pdo->prepare($query);
                $stmt->execute();
            }
            else{
                $query = "SELECT doctor.id,doctor.f_name,doctor.l_name,doctor.qualification,doctor.address,
                    doctor.contact_no,doctor.email,doctor.fee, doctor.specialization_id,specialization.name AS 'specialization' 
                    FROM doctor LEFT JOIN specialization ON doctor.specialization_id=specialization.id 
                    WHERE specialization.id = ? AND doctor.deleted=0";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$specialization]);
            }
        
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function available_appoint($date,$schedule_id){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "SELECT appointment.Seat_no, schedule.max_patient FROM appointment INNER JOIN schedule ON appointment.schedule_id=schedule.id where schedule.id = ? AND appointment.Date=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$schedule_id,$date]);
            $result = $stmt->fetch();
            return $result;
        }
        
        public function charges($id){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "SELECT fee FROM doctor WHERE id=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id]);
            $result = $stmt->fetch();
            return $result;
        }

    }

?>