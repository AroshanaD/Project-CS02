<?php

    class Report_Data extends Models
    {
        public function __construct()
        {
            
        }

        public function appointment_data($from,$to)
        {

            $connect = new Database();
            $pdo = $connect->connect();

            $query = "SELECT COUNT(patient_appointment.appointment_id) AS 'tot_app', COUNT(appointment.Doctor_id) AS 'tot_doc',
                    SUM(
                    FROM patient_appointment LEFT JOIN appointment 
                    ON patient_appointment.appointment_id = appointment.appointment_id;

                    SELECT appointment.Date AS 'Most Day', COUNT(patient_appointment.appointment_id) AS 'Apps'
                    FROM patient_appointment LEFT JOIN appointment 
                    ON patient_appointment.appointment_id = appointment.appointment_id GROUP BY appointment.Date ORDER BY 'Apps' DESC LIMIT 1;

                    SELECT doctor.f_name, doctor.l_name, COUNT(patient_appointment.appointment_id) AS 'Apps' FROM patient_appointment 
                    LEFT JOIN appointment ON patient_appointment.appointment_id = appointment.appointment_id 
                    LEFT JOIN doctor ON appointment.Doctor_id = doctor.id GROUP BY appointment.Date ORDER BY 'Apps' DESC LIMIT 1;

                    SELECT specialization.name, COUNT(patient_appointment.appointment_id) AS 'Apps' FROM patient_appointment 
                    LEFT JOIN appointment ON patient_appointment.appointment_id = appointment.appointment_id 
                    LEFT JOIN doctor ON appointment.Doctor_id = doctor.id LEFT JOIN specialization 
                    ON doctor.specialization_id = specialization.id GROUP BY appointment.Date ORDER BY 'Apps' DESC LIMIT 1;

                    SELECT appointment.Date AS 'Date',COUNT(appointment.schedule_id) AS 'No.of Sessions',
                    COUNT(appointment.Doctor_id) AS 'No.of Doctors', COUNT(patient_appointment.appointment_id) AS 'No.of Appointments', 
                    SUM(doctor.fee) AS 'Total Income' FROM patient_appointment LEFT JOIN appointment 
                    ON patient_appointment.doctor_appointmentId = appointment.appointment_id LEFT JOIN doctor 
                    ON appointment.Doctor_id = doctor.id GROUP BY appointment.Date;";

            $stmt = $pdo->prepare($query);
            $stmt->execute([$specialization, $name, $name]);
            $result = $stmt->fetchAll();
        }

        public function inventory_data(){
            $connect = new Database();
            $pdo = $connect ->connect();

            /*$result;
            $query = "SELECT COUNT(drug_name) FROM stock;";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $result['total_medicine']=$stmt->fetch();
            if($result!=NULL)
                return $result;
            else
                return false;*/
        }
    }

?>