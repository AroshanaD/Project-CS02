<?php

    class Stat_Data extends Models
    {
        public function __construct()
        {
            
        }

        public function appointment_data()
        {

            $connect = new Database();
            $pdo = $connect->connect();

            $result;

            $query = "SELECT COUNT(patient_appointment.appointment_id) AS 'tot_apps', COUNT(DISTINCT appointment.Doctor_id) AS 'tot_doc',
                    COUNT(DISTINCT appointment.appointment_id) AS 'tot_sessions', SUM(doctor.fee) AS 'tot_income'
                    FROM patient_appointment LEFT JOIN appointment 
                    ON patient_appointment.doctor_appointmentId = appointment.appointment_id LEFT JOIN doctor
                    ON appointment.Doctor_id = doctor.id";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();

            $result['tot_apps'] = $data['tot_apps'];

            $query = "SELECT COUNT(patient_appointment.appointment_id) AS 'online_app' FROM patient_appointment
                    LEFT JOIN appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id
                    WHERE patient_appointment.online = 1";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();

            $result['online_app'] = $data['online_app'];

            $query = "SELECT COUNT(patient_appointment.appointment_id) AS 'male' FROM patient_appointment
                    LEFT JOIN appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id
                    LEFT JOIN patient ON patient_appointment.patient_id = patient.id
                    WHERE patient.gender = 'Male'";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();

            $result['male_apps'] = $data['male'];
            $result['female_apps'] = $result['tot_apps'] - $result['male_apps'];

            $query = "SELECT appointment.Date AS 'Date', COUNT(patient_appointment.appointment_id) AS 'appointments' FROM patient_appointment 
                    LEFT JOIN appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id GROUP BY appointment.Date";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();

            $result['day_overview'] = $data;

            return $result;
        }

        
    }

?>