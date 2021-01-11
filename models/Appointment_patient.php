<?php
class Appointment_patient extends Models{
    public function __construct(){

    }

    public function get_patientApoointment($id){
        $connect= new Database();
        $pdo =$connect->connect();

        $query="SELECT appointment.appointment_Id,appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
        patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient_appointment JOIN appointment 
        ON patient_appointment.appointment_Id=appointment.appointment_Id JOIN patient ON patient_appointment.patient_Id= patient.id 
        JOIN doctor on appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id WHERE 
        patient_appointment.patient_Id=?";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search($id,$date){
        $connect= new Database();
        $pdo=$connect->connect();

        $query="SELECT appointment.appointment_Id,appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
        patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient_appointment JOIN appointment 
        ON patient_appointment.appointment_Id=appointment.appointment_Id JOIN patient ON patient_appointment.patient_Id= patient.id 
        JOIN doctor on appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id WHERE 
        appointment.Date LIKE ? AND patient_appointment.patient_Id=? ";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$date,$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function view_appointment($id){
        $connect=new Database();
        $pdo=$connect->connect();

        $query="SELECT appointment.appointment_Id,appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
        patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient_appointment JOIN appointment 
        ON patient_appointment.appointment_Id=appointment.appointment_Id JOIN patient ON patient_appointment.patient_Id= patient.id 
        JOIN doctor on appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id WHERE 
        patient_appointment.appointment_Id=?";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }
}