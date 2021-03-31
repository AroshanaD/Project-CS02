<?php
class Appointment_patient extends Models{
    public function __construct(){

    }

    public function get_patientApoointment($id){
        $connect= new Database();
        $pdo =$connect->connect();

        $query="SELECT patient_appointment.appointment_Id,patient_appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
        patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient JOIN patient_appointment ON 
        patient.id= patient_appointment.patient_Id JOIN appointment ON appointment.appointment_id = patient_appointment.doctor_appointmentId JOIN 
        doctor ON appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id WHERE patient_appointment.patient_Id=? 
        ORDER BY Date DESC";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search($id,$date){
        $connect= new Database();
        $pdo=$connect->connect();

        $query="SELECT patient_appointment.appointment_Id,patient_appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
        patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient JOIN patient_appointment ON 
        patient.id= patient_appointment.patient_Id JOIN appointment ON appointment.appointment_id = patient_appointment.doctor_appointmentId JOIN 
        doctor ON appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id WHERE 
        appointment.Date LIKE ? AND patient_appointment.patient_Id=? ORDER BY appointment_Id ASC ";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$date,$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function view_appointment($id){
        $connect=new Database();
        $pdo=$connect->connect();

        $query="SELECT patient_appointment.appointment_Id,patient_appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,
        patient.birthday, patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time, 
        specialization.name AS 'specialization', doctor.fee from patient_appointment JOIN appointment ON 
        patient_appointment.doctor_appointmentId=appointment.appointment_Id JOIN patient ON patient_appointment.patient_Id= patient.id 
        JOIN doctor on appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id JOIN specialization ON 
        doctor.specialization_id=specialization.id WHERE patient_appointment.appointment_Id=?";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function appointmentby_category($specialization){
        $connect=new Database();
        $pdo=$connect->connect();

        if($specialization==null){
            $query="SELECT patient_appointment.appointment_Id,patient_appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
            patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient JOIN patient_appointment ON 
            patient.id= patient_appointment.patient_Id JOIN appointment ON appointment.appointment_id = patient_appointment.doctor_appointmentId JOIN 
            doctor ON appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id  WHERE appointment.Availability= 1 ORDER BY Date DESC";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        }

        else{
           $query="SELECT patient_appointment.appointment_Id,patient_appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
           patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient JOIN patient_appointment ON 
           patient.id= patient_appointment.patient_Id JOIN appointment ON appointment.appointment_id = patient_appointment.doctor_appointmentId JOIN 
           doctor ON appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id  WHERE doctor.specialization_id=? ORDER BY Date DESC"; 
            $stmt = $pdo->prepare($query);
            $stmt->execute([$specialization]);
        }

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search_recept($name,$date){
        $connect=new Database();
        $pdo=$connect->connect();

        $lname;
        $fname;
        if($name != null){
            if (strpos($name, ' ') !== false){ /*there is a space */
                $sperate_name = explode(" ", $name);
                $fname =$sperate_name[0];
                $lname =$sperate_name[1];
                $fname = $fname.'%';
                $lname = $lname.'%';
            }
            
            else{
               $fname = $name.'%';
               $lname = '%'; 
            }

        }
        else{
            $fname ='%';
            $lname ='%';
        }

        if($date == null){
                $query="SELECT patient_appointment.appointment_Id,patient_appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
            patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient JOIN patient_appointment ON 
            patient.id= patient_appointment.patient_Id JOIN appointment ON appointment.appointment_id = patient_appointment.doctor_appointmentId JOIN 
            doctor ON appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id WHERE doctor.f_name LIKE ? 
            OR doctor.l_name LIKE ? ORDER BY appointment_Id ASC";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$fname,$lname]);
            $result = $stmt->fetchAll();
            return $result;
        }
        
        else{
            $query="SELECT patient_appointment.appointment_Id,patient_appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
            patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient JOIN patient_appointment ON 
            patient.id= patient_appointment.patient_Id JOIN appointment ON appointment.appointment_id = patient_appointment.doctor_appointmentId JOIN 
            doctor ON appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id WHERE appointment.Date LIKE ? AND( doctor.f_name LIKE ? 
            OR doctor.l_name LIKE ?) ORDER BY appointment_Id ASC";

            $stmt = $pdo->prepare($query);
            $stmt->execute([$date,$fname,$lname]);
            $result = $stmt->fetchAll();
            return $result;
        }

        
    }

    public function get_doctorApoointment($id){
        $connect=new Database();
        $pdo=$connect->connect();

        $query="SELECT patient_appointment.appointment_Id,patient_appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
        patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient JOIN patient_appointment ON 
        patient.id= patient_appointment.patient_Id JOIN appointment ON appointment.appointment_id = patient_appointment.doctor_appointmentId JOIN 
        doctor ON appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id WHERE appointment.Doctor_Id=? ORDER BY Date DESC";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function search_doctor($id,$date){
        $connect= new Database();
        $pdo=$connect->connect();

        $query="SELECT patient_appointment.appointment_Id,patient_appointment.Seat_no,appointment.Date, patient.f_name, patient.l_name,patient.birthday, 
        patient.contact_no,doctor.f_name AS 'doctor_fname', doctor.l_name AS 'doctor_lname', schedule.time from patient JOIN patient_appointment ON 
        patient.id= patient_appointment.patient_Id JOIN appointment ON appointment.appointment_id = patient_appointment.doctor_appointmentId JOIN 
        doctor ON appointment.Doctor_Id= doctor.id JOIN schedule ON appointment.schedule_id=schedule.id WHERE 
        appointment.Date LIKE ? AND appointment.Doctor_Id=? ORDER BY Date,appointment_Id ASC";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$date,$id]);
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
}