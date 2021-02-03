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

            $query = "SELECT appointment.appointment_id, appointment.CurrentSeat_no, schedule.max_patient FROM appointment INNER JOIN schedule ON appointment.schedule_id=schedule.id where schedule.id = ? AND appointment.Date=?";
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

        public function make_appointment($nic,$name,$age,$contact,$email,$address,$gender,$date,$seatno,$schedule_id,$doctor_id){
            $connect = new Database();
            $pdo = $connect->connect();

            $patientid;
            $query = "SELECT id FROM patient WHERE email=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$email]);
            $result = $stmt->fetch();
            

            if($result==null){
                $sperate_name = explode(" ", $name);
                $fname =$sperate_name[0];
                $lname =$sperate_name[1];

                $query1 = "INSERT INTO `patient`(`f_name`,`l_name`,`gender`,`address`,`contact_no`,`email`,`NIC`) VALUES(?,?,?,?,?,?,?)";
                $stmt = $pdo->prepare($query1);
                $stmt->execute([$fname,$lname,$gender,$address,$contact,$email,$nic]);

                $query = "SELECT id FROM patient WHERE email=?";
                $stmt = $pdo->prepare($query);
                $stmt->execute([$email]);
                $result = $stmt->fetch();
                $patientid = $result['id'];

            }
            else{
                $patientid = $result['id'];
            }
            

            if($seatno!=1){
                $query1 = "UPDATE appointment SET CurrentSeat_no=? WHERE Date=?";
                $stmt = $pdo->prepare($query1);
                $stmt->execute([$seatno,$date]);

                $query2= "SELECT appointment_Id FROM appointment WHERE Date=?";
                $stmt = $pdo->prepare($query2);
                $stmt->execute([$date]);
                $result2 = $stmt->fetch();
                $appointment_id=$result2['appointment_Id'];

                $query3 = "INSERT INTO `patient_appointment`(`patient_Id`,`Seat_no`,`doctor_appointmentId`) VALUES(?,?,?)";
                $stmt = $pdo->prepare($query3);
                $status=$stmt->execute([$patientid,$seatno,$appointment_id]);

                if ($status == TRUE) {
                    return $patientid;
                } else {
                    return FALSE;
                }
            }

            else if($seatno ==1){
                $query1 = "INSERT INTO `appointment`(`Date`,`schedule_id`,`Doctor_Id`,`CurrentSeat_no`) VALUES(?,?,?,?)";
                $stmt = $pdo->prepare($query1);
                $stmt->execute([$date,$schedule_id,$doctor_id,$seatno]);

                $query2= "SELECT appointment_Id FROM appointment WHERE Date=?";
                $stmt = $pdo->prepare($query2);
                $stmt->execute([$date]);
                $result2 = $stmt->fetch();
                $appointment_id=$result2['appointment_Id'];

                $query3 = "INSERT INTO `patient_appointment`(`patient_Id`,`Seat_no`,`doctor_appointmentId`) VALUES(?,?,?)";
                $stmt = $pdo->prepare($query3);
                $status=$stmt->execute([$patientid,$seatno,$appointment_id]);

                if ($status == TRUE) {
                    return $patientid;
                } else {
                    return FALSE;
                }
            }

        }

        public function receipt($id,$patient_id){
            $connect = new Database();
            $pdo = $connect->connect();

            $query = "SELECT patient.id,patient.f_name,patient.l_name,patient.contact_no,doctor.f_name AS 'doctor_fname',
            doctor.l_name AS 'doctor_lname',doctor.fee,specialization.name AS 'specialization', patient_appointment.Seat_no
             FROM patient JOIN patient_appointment ON patient.id=patient_appointment.patient_Id JOIN appointment ON 
             patient_appointment.doctor_appointmentId=appointment.appointment_id JOIN doctor ON doctor.id=appointment.Doctor_id 
             JOIN specialization ON doctor.specialization_id=specialization.id WHERE patient_appointment.doctor_appointmentId=? AND patient_appointment.patient_Id=?";
            $stmt = $pdo->prepare($query);
            $stmt->execute([$id,$patient_id]);
            $result = $stmt->fetch();
            return $result;
        }

        public function create_patientAppointment($id,$doc_id,$date,$seat,$schedule_id){
            $connect = new Database();
            $pdo = $connect->connect();

            if($seat!=1){
                $query1 = "UPDATE appointment SET CurrentSeat_no=? WHERE Date=?";
                $stmt = $pdo->prepare($query1);
                $stmt->execute([$seat,$date]);

                $query2= "SELECT appointment_Id FROM appointment WHERE Date=?";
                $stmt = $pdo->prepare($query2);
                $stmt->execute([$date]);
                $result2 = $stmt->fetch();
                $appointment_id=$result2['appointment_Id'];

                $query3 = "INSERT INTO `patient_appointment`(`patient_Id`,`Seat_no`,`doctor_appointmentId`) VALUES(?,?,?)";
                $stmt = $pdo->prepare($query3);
                $status=$stmt->execute([$id,$seat,$appointment_id]);

                if ($status == TRUE) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            }

            else if($seat ==1){
                $query1 = "INSERT INTO `appointment`(`Date`,`schedule_id`,`Doctor_Id`,`CurrentSeat_no`) VALUES(?,?,?,?)";
                $stmt = $pdo->prepare($query1);
                $stmt->execute([$date,$schedule_id,$doc_id,$seat]);

                $query2= "SELECT appointment_Id FROM appointment WHERE Date=?";
                $stmt = $pdo->prepare($query2);
                $stmt->execute([$date]);
                $result2 = $stmt->fetch();
                $appointment_id=$result2['appointment_Id'];

                $query3 = "INSERT INTO `patient_appointment`(`patient_Id`,`Seat_no`,`doctor_appointmentId`) VALUES(?,?,?)";
                $stmt = $pdo->prepare($query3);
                $status=$stmt->execute([$id,$seat,$appointment_id]);

                if ($status == TRUE) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            }
        }

    }

?>