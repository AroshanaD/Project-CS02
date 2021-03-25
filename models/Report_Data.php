<?php

    class Report_Data extends Models
    {
        public function __construct()
        {
            
        }

        public function appointment_data()
        {

            $connect = new Database();
            $pdo = $connect->connect();

            $query = "SELECT COUNT(patient_appointment.appointment_id) AS 'tot_app', COUNT(appointment.Doctor_id) AS 'tot_doc',
                    SUM(doctor.fee) AS 'tot_income'
                    FROM patient_appointment LEFT JOIN appointment 
                    ON patient_appointment.appointment_id = appointment.appointment_id LEFT JOIN doctor
                    ON appointment.Doctor_id = doctor.id

                    SELECT COUNT(patient_appointment.appointment_id) AS 'online_app' FROM patient_appointment
                    LEFT JOIN appointment ON patient_appointment.appointment_id = appointment.appointment_id
                    WHERE patient_appointment.online = 1

                    SELECT appointment.Date AS 'Most Day', COUNT(patient_appointment.appointment_id) AS 'Apps'
                    FROM patient_appointment LEFT JOIN appointment 
                    ON patient_appointment.appointment_id = appointment.appointment_id GROUP BY appointment.Date ORDER BY 'Apps' DESC LIMIT 1;

                    SELECT doctor.f_name, doctor.l_name, COUNT(patient_appointment.appointment_id) AS 'Apps' FROM patient_appointment 
                    LEFT JOIN appointment ON patient_appointment.appointment_id = appointment.appointment_id 
                    LEFT JOIN doctor ON appointment.Doctor_id = doctor.id GROUP BY appointment.Date ORDER BY 'Apps' DESC LIMIT 1

                    SELECT specialization.name AS 'most_spec', COUNT(patient_appointment.appointment_id) AS 'Apps' FROM patient_appointment 
                    LEFT JOIN appointment ON patient_appointment.appointment_id = appointment.appointment_id 
                    LEFT JOIN doctor ON appointment.Doctor_id = doctor.id LEFT JOIN specialization 
                    ON doctor.specialization_id = specialization.id GROUP BY appointment.Date ORDER BY 'Apps' DESC LIMIT 1

                    SELECT appointment.Date AS 'Date',COUNT(appointment.schedule_id) AS 'No.of Sessions',
                    COUNT(appointment.Doctor_id) AS 'No.of Doctors', COUNT(patient_appointment.appointment_id) AS 'No.of Appointments', 
                    SUM(doctor.fee) AS 'Total Income' FROM patient_appointment LEFT JOIN appointment 
                    ON patient_appointment.doctor_appointmentId = appointment.appointment_id LEFT JOIN doctor 
                    ON appointment.Doctor_id = doctor.id GROUP BY appointment.Date
                    
                    SELECT COUNT(patient_appointment.appointment_id) AS 'male' FROM patient_appointment
                    LEFT JOIN appointment ON patient_appointment.appointment_id = appointment.appointment_id
                    LEFT JOIN patient ON patient_appointment.patient_id = patient.id
                    WHERE patient.gender = 'Male'";

            $stmt = $pdo->prepare($query);
            $stmt->execute([$specialization, $name, $name]);
            $result = $stmt->fetchAll();

            return $result;
        }

        public function inventory_data(){
            $connect = new Database();
            $pdo = $connect ->connect();

            $result;
            $query = "SELECT COUNT(drug_name) AS 'drug_count' FROM stock;";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $drugcount=$stmt->fetch();

            $result['drug_count']=$drugcount['drug_count'];

            $query = "SELECT COUNT(drug_name) AS 'count_tablet' FROM stock where unitary_unit='tablet';";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $tabletcount=$stmt->fetch();

            $result['tablet_count']=$tabletcount['count_tablet'];

            $query = "SELECT COUNT(drug_name) AS 'sirup_count' FROM stock where unitary_unit='sirup';";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $sirupcount=$stmt->fetch();

            $result['sirup_count']=$sirupcount['sirup_count'];

            $query = "SELECT SUM(unitary_value*unitary_price*quantity) AS 'expense',SUM(unitary_value*selling_price*quantity) AS 'income'  
            FROM stock;";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $drug_price=$stmt->fetch();

            $result['expense']=$drug_price['expense'];
            $result['income']=$drug_price['income'];

            $query = "SELECT drug_name AS 'most_drug', manufacturer AS 'most_manufacture' FROM `stock` 
            WHERE quantity = (SELECT MAX(quantity) FROM stock);";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $drug_most=$stmt->fetch();

            $result['most_drug']=$drug_most['most_drug'];
            $result['most_manufacture']=$drug_most['most_manufacture'];

            $query = "SELECT COUNT(drug_name) AS 'count_expire' FROM `stock` WHERE expire_date < NOW();";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $count_expire=$stmt->fetch();
            
            $result['count_expire']=$count_expire['count_expire'];

            if($result!=NULL)
                return $result;
            else
                return false;
        }
    }

?>