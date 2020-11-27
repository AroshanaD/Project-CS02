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
            $query = "SELECT doctor.id, doctor.f_name, doctor.l_name FROM doctor INNER JOIN specialization ON 
                    doctor.specialization_id = specialization.id WHERE specialization.id = ? AND 
                    (doctor.f_name LIKE ? OR doctor.l_name LIKE ?) AND doctor.deleted = 0 AND doctor.verified = 1";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$specialization, $name, $name]);
            $result = $stmt->fetchAll();
            return $result;
        }

    }

?>