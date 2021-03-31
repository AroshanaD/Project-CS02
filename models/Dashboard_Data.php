<?php
class Dashboard_Data extends Models{
    public function __construct(){

    }

    public function patient_stat($id){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT appointment.Date AS 'date', schedule.time AS 'time', doctor.f_name AS 'f_name', doctor.l_name AS 'l_name' FROM patient LEFT JOIN 
        patient_appointment ON patient.id = patient_appointment.patient_id LEFT JOIN appointment ON 
        patient_appointment.doctor_appointmentId = appointment.appointment_id LEFT JOIN schedule ON 
        appointment.schedule_id = schedule.id LEFT JOIN doctor ON schedule.doctor_id = doctor.id 
        WHERE appointment.Date > CURRENT_DATE AND patient.id = ? ORDER BY appointment.Date ASC LIMIT 1;";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function doctor_stat($id){
        $connect = new Database();
        $pdo = $connect->connect();

        $data;
        $query = "SELECT COUNT(appointment.appointment_id) AS 'sessions' FROM doctor LEFT JOIN appointment ON doctor.id = appointment.Doctor_id 
            WHERE doctor.id = ? AND appointment.Date = CURRENT_DATE";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $data['sessions'] = $result['sessions'];

        $query = "SELECT schedule.time AS 'time' FROM doctor LEFT JOIN appointment ON doctor.id = appointment.Doctor_id LEFT JOIN schedule ON 
            schedule.id = appointment.schedule_id WHERE doctor.id = ? AND appointment.Date = CURRENT_DATE";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $data['time'] = $result['time'];

        $query = "SELECT COUNT(patient_appointment.appointment_id) AS 'appointments' FROM doctor LEFT JOIN appointment ON doctor.id = appointment.Doctor_id 
        LEFT JOIN patient_appointment ON patient_appointment.doctor_appointmentId = appointment.appointment_id 
        WHERE doctor.id = ? AND appointment.Date = CURRENT_DATE";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $data['appointments'] = $result['appointments'];

        return $data;
    }

    public function pharmacist_stat(){

    }

    public function lab_stat(){

    }

    public function supervisor_stat(){
        $connect = new Database();
        $pdo = $connect->connect();

        $query = "SELECT COUNT(DISTINCT appointment.appointment_id) AS 'sessions', COUNT(DISTINCT appointment.Doctor_id) AS 'doctors', 
        COUNT(patient_appointment.appointment_id) AS 'appointments' FROM patient_appointment LEFT JOIN appointment ON 
        patient_appointment.doctor_appointmentId = appointment.appointment_id LEFT JOIN doctor ON appointment.Doctor_id = doctor.id 
        WHERE appointment.Date = CURRENT_DATE";

        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }
}
?>