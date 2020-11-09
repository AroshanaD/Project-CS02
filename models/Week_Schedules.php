<?php

    class Week_Schedules extends Models{
        public function __construct(){

        }

        public function schedules($specialization){
            $connection = new Database;
            $pdo = $connection->connect();

            $query = "SELECT doctor.f_name, doctor.l_name, schedule.date, schedule.time FROM schedule INNER JOIN (doctor INNER JOIN specialization ON doctor.specialization_id = specialization.id) ON schedule.doctor_id = doctor.id WHERE specialization.name = '$specialization' ORDER BY schedule.time";
            $stmt = $pdo->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll();
            return $result;
        }
    }