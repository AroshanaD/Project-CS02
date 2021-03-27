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
            $result['tot_doc'] = $data['tot_doc'];
            $result['tot_sessions'] = $data['tot_sessions'];
            $result['tot_income'] = $data['tot_income'];

            $query = "SELECT COUNT(patient_appointment.appointment_id) AS 'online_app' FROM patient_appointment
                    LEFT JOIN appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id
                    WHERE patient_appointment.online = 1";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();

            $result['online_app'] = $data['online_app'];

            $query = "SELECT appointment.Date AS 'most_day', COUNT(patient_appointment.appointment_id) AS 'apps'
                    FROM patient_appointment LEFT JOIN appointment 
                    ON patient_appointment.doctor_appointmentId = appointment.appointment_id GROUP BY appointment.Date ORDER BY 'apps' DESC LIMIT 1;";
            
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();

            $result['most_day'] = $data['most_day'];
            $result['most_day_apps'] = $data['apps'];

            $query = "SELECT doctor.f_name AS 'f_name', doctor.l_name AS 'l_name', COUNT(patient_appointment.appointment_id) AS 'apps' FROM patient_appointment 
                    LEFT JOIN appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id 
                    LEFT JOIN doctor ON appointment.Doctor_id = doctor.id GROUP BY doctor.id ORDER BY 'apps' DESC LIMIT 1";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();

            $result['most_doc'] = $data['f_name'].$data['l_name'];
            $result['most_doc_apps'] = $data['apps'];

            $query = "SELECT specialization.name AS 'most_spec', COUNT(patient_appointment.appointment_id) AS 'apps' FROM patient_appointment 
                    LEFT JOIN appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id 
                    LEFT JOIN doctor ON appointment.Doctor_id = doctor.id LEFT JOIN specialization 
                    ON doctor.specialization_id = specialization.id GROUP BY specialization.id ORDER BY 'apps' DESC LIMIT 1";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();

            $result['most_spec'] = $data['most_spec'];
            $result['most_spec_apps'] = $data['apps'];

            $query = "SELECT COUNT(patient_appointment.appointment_id) AS 'male' FROM patient_appointment
                    LEFT JOIN appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id
                    LEFT JOIN patient ON patient_appointment.patient_id = patient.id
                    WHERE patient.gender = 'Male'";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetch();

            $result['male_apps'] = $data['male'];
            $result['female_apps'] = $result['tot_apps'] - $result['male_apps'];

            $query = "SELECT appointment.Date AS 'Date',COUNT(DISTINCT appointment.schedule_id) AS 'sessions',
                    COUNT(DISTINCT appointment.Doctor_id) AS 'doctors', COUNT(patient_appointment.appointment_id) AS 'appointments', 
                    SUM(doctor.fee) AS 'income' FROM patient_appointment LEFT JOIN appointment 
                    ON patient_appointment.doctor_appointmentId = appointment.appointment_id LEFT JOIN doctor 
                    ON appointment.Doctor_id = doctor.id GROUP BY appointment.Date";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();

            $result['day_overview'] = $data;

            $query = "SELECT doctor.f_name AS 'f_name', doctor.l_name AS 'l_name', COUNT(patient_appointment.appointment_id) AS 'apps' FROM patient_appointment 
                    LEFT JOIN appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id 
                    LEFT JOIN doctor ON appointment.Doctor_id = doctor.id GROUP BY doctor.id ORDER BY 'apps' DESC";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();

            $result['doc_overview'] = $data;

            $query = "SELECT specialization.name AS 'spec', COUNT(patient_appointment.appointment_id) AS 'apps' FROM patient_appointment 
                    LEFT JOIN appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id 
                    LEFT JOIN doctor ON appointment.Doctor_id = doctor.id LEFT JOIN specialization 
                    ON doctor.specialization_id = specialization.id GROUP BY specialization.id ORDER BY 'apps' DESC";

            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $data = $stmt->fetchAll();

            $result['spec_overview'] = $data;

            //print_r($result);

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

            $query = "SELECT COUNT(DISTINCT vendor_id) AS 'count_vendor' FROM medicine_grn";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $order=$stmt->fetch();

            $result['count_vendor']=$order['count_vendor'];

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

            $query ="SELECT br_id, drug_name,selling_price, quantity, unitary_price*quantity AS 'drugExpense',
            selling_price*quantity AS 'drugIncome', expire_date FROM stock ";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $drug_details=$stmt->fetchAll();

            $result['drug_details']=$drug_details;

            if($result!=NULL)
                return $result;
            else
                return false;
        }
    }

?>