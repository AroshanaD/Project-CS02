<?php 

    class Appointment extends Controllers{
        public function __construct(){

        }

        public function index(){
            if($_SESSION['user_cat'] == 'patient'){
                $this->search_doctor();
            }
            if($_SESSION['user_cat'] == 'receptionist'){
                $this->onpremise();
            }
        }

        public function search_doctor(){
            $_SESSION['appointment'] = [];
            $this->load('views','search_doctor');
        }

        public function select_doctor(){
            $_SESSION['search']['name'] = $_GET['doctor'];
            $_SESSION['search']['specialization'] = $_GET['specialization'];
            
            $this->load('views','select_doctor');
        }

        public function available_doctors(){
            $model = $this->load('models','Appointment_Data');
            $name = $_SESSION['search']['name'];
            $specialization = $_SESSION['search']['specialization'];

            $result = $model->get_doctors($specialization, $name);
            $_SESSION['search']['search_doclist'] = $result;
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function select_dates(){
            $doctor = $_GET['doctor'];
            $id = $_SESSION['search']['search_doclist'][$doctor]['id'];

            $model = $this->load('models','Appointment_Data');
            $doctor = $model->doctor_details($id);

            $_SESSION['appointment']['doctor_id'] = $id;
            $_SESSION['appointment']['doctor_name'] = $doctor['f_name']." ".$doctor['l_name'];
            $_SESSION['appointment']['doctor_specialization']=$doctor['specialization'];
            $_SESSION['appointment']['doctor_qualification'] = $doctor['qualification'];
            $_SESSION['appointment']['doctor_fee'] = $doctor['fee'];

            $this->load('views','select_date');
        }

        public function available_dates(){
            $model = $this->load('models','Appointment_Data');

            $id = $_SESSION['appointment']['doctor_id'];
            $result = $model->get_dates($id);
            $_SESSION['search']['search_datelist'] = $result;
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function doctor_schedule(){
            $model = $this->load('models','Appointment_Data');

            $id = $_POST['id'];
            $result = $model->get_dates($id);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function available_appointment(){
            $model = $this->load('models','Appointment_Data');
            $date=$_POST['date'];
            $schedule_id=$_POST['scheduleId'];
            $_SESSION['appointment']['select_date']=$date;
            $result = $model->available_appoint($date,$schedule_id);
            $_SESSION['appointment']['appointmentID']=$result['appointment_id'];
            $_SESSION['appointment']['seat_no']=$result['CurrentSeat_no'];
            $_SESSION['appointment']['schedule_id'] =$schedule_id;
            header('Content-Type: application/json');
            echo json_encode($result);
        }
        
        
        public function fill_form(){
            $this->load('views','appointment_form');
        }

        public function receipt(){
            $model = $this->load('models','Appointment_Data');
            $patient_id=$_GET['id'];
            $id=$_SESSION['appointment']['appointmentID'];

            $result = $model->receipt($id,$patient_id);
            $_POST['details']=$result;
            $this->load('views','appointment_receipt');
        }
        
        public function view(){
            $this->load('views','view_test');
        }

        public function onpremise(){
            $this->load('views','appointment_onpremise');
            /*if(isset($_POST['submit'])){
                $model = $this->load('models','Appointment_Data');
                $id=$_POST['id'];
                $name=$_POST['name'];
                $age=$_POST['age'];
                $contact=$_POST['contact'];
                $email=$_POST['email'];
                $schedule_id=$_POST['schedule_id'];

                $result=$model->make_appointment($id,$name,$age,$contact,$email,$schedule_id);
            }*/
        }

      

        public function doctors(){
            $model = $this->load('models','Appointment_Data');

            $specialization = $_POST['specialization'];
            $result = $model->doctors($specialization);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function appointment_charge(){
            $model=$this->load('models','Appointment_Data');
            $id=$_POST['doctor_id'];
            $result=$model->charges($id);
            header('Content-Type: application/json');
            echo json_encode($result);
        }

        public function make_appointment(){
            $model=$this->load('models','Appointment_Data');
            $nic=$_POST['nic'];
            $name=$_POST['name'];
            $age=$_POST['age'];
            $contact=$_POST['contact'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $gender=$_POST['gender'];
            $date=$_POST['date'];
            $seatno=$_POST['seatno'];
            $schedule_id=$_POST['schedule_id'];
            $doctor_id=$_POST['doctor_id'];
            
           $result=$model->make_appointment($nic,$name,$age,$contact,$email,$address,$gender,$date,$seatno,$schedule_id,$doctor_id);
          /* if($result!=FALSE){
            $subject = 'Account Authentication Email';
                $body = "<body style='background-color: white; padding: 50px; font-size: 16px;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.8); height:fit-content'>
                        <h3 style='padding: 20px; background-color: #9097c0'>Medcaid Hospital</h3>
                        <h4 style='text-decoration: underline'> Make Appointment</h4>
                        <p> Your have maked your appointment successfully.</p>";

                $to = $email;
                $mail = new mail_authentication();
                $status = $mail->send_mail($subject,$body,$to);
           }*/
           header('Content-Type: application/json');
           echo json_encode($result);
        }
    
        public function payment()
        {
            $this->load('views', 'payment_page');
        }

        public function charge(){
            \Stripe\Stripe::setApiKey('sk_test_51I74WzJLrx4nTWtKvd0nIEXbqWENdwJNsdWXHHyZHNfZ6XHeHEzrOe1Ueqw4XMBUDrGnG5zKTCHGrf548rqmq8It000fcJN1zl');
            $name_oncard = $_POST['name'];
            $token = $_POST['stripeToken'];
            $email = $_POST['email'];
            
            $customer = \Stripe\Customer::create(array(
                "email" => $email,
                "source" => $token
            ));

            $charge = \Stripe\Charge::create(array(
                "amount" => $_SESSION['appointment']['charge'].'00',
                "currency" => 'lkr',
                "description" => 'Appointment Charges',
                "customer" => $customer->id
            ));
            //print_r($charge);
            if($charge->status == 'succeeded'){
                $_SESSION['appointment']['payment_id'] = $charge->id;
            }

            $this->create_appointment();

        }

        public function create_appointment(){
            $id=$_SESSION['id'];
            $doc_id=$_SESSION['appointment']['doctor_id'];
            $date=$_SESSION['appointment']['select_date'];
            $seat=$_SESSION['appointment']['seat_no']+1;
            $schedule_id=$_SESSION['appointment']['schedule_id'] ; 

            $model=$this->load('models','Appointment_Data');
            $result=$model->create_patientAppointment($id,$doc_id,$date,$seat,$schedule_id);

            if($result== TRUE){
                $URL = Router::site_url() . "/appointment/patient_receipt?successfull";
                echo "<script>location.href='$URL'</script>";
            }
        }

        public function patient_receipt(){
            $model=$this->load('models','Appointment_Data');
            $patient_id=$_SESSION['id'];
            $id=$_SESSION['appointment']['appointmentID'];
            $result = $model->receipt($id,$patient_id);
            $_POST['details']=$result;
            $this->load('views','appointment_receipt');

        }
    }