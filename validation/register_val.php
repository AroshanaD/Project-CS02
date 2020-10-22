<?php

    Class Register_Val{

        public $successful = TRUE;
        public $empty_err = FALSE;
        public $id_err = FALSE;
        public $name_err = FALSE;
        public $age_err = FALSE;
        public $contact_err = FALSE;
        public $email_err = FALSE;
        public $pwd_err = FALSE;
        public $pwd_mis_err = FALSE;

        public function __construct(){

        }

        public function basic_val(){
            if(isset($_POST['submit'])){
                $id = $_POST['id'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $gender = $_POST['gender'];
                $birthday = $_POST['birthday'];
                $contact = $_POST['contact'];
                $address = $_POST['address'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $repassword = $_POST['repassword'];

                if(empty($id)||empty($fname)||empty($lname)||empty($birthday)||empty($contact)||empty($address)||
                    empty($email)||empty($password)||empty($repassword)){
                    echo 'Fields cannot be empty!</br>';
                    $this->empty_err = TRUE;
                    $this->successful = FALSE;
                }
                if(!preg_match('/[0-9]{12}/',$id) && !preg_match('/([0-9]{9}v)/',$id)){
                    echo "Please enter a valid id!</br>";
                    $this->id_err = TRUE;
                    $this->successful = FALSE;
                }
                if(preg_match('/[^a-zA-Z]/',$fname) || preg_match('/[^a-zA-Z]/',$lname)){
                    echo "No special characters allowed in name!</br>";
                    $this->name_err = TRUE;
                    $this->successful = FALSE;
                }
                if(date_add(date_create($birthday),date_interval_create_from_date_string('18 years'))->format("Y-m-d") > date("Y-m-d",time())){
                    echo "User must be over 18 years old!</br>";
                    $this->age_err = TRUE;
                    $this->successful = FALSE;
                }
                if(!preg_match('/([0][0-9]{9})/',$contact)){
                    echo "Please enter a valid contact no!</br>";
                    $this->contact_err = TRUE;
                    $this->successful = FALSE;
                }
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    echo "Please enter a valid email!</br>";
                    $this->email_err = TRUE;
                    $this->successful = FALSE;
                }
                if(!preg_match('/.{8,20}/',$password) || !preg_match('/[a-z]/',$password) || !preg_match('/[A-Z]/',$password) || 
                    !preg_match('/[0-9]/',$password) || !preg_match('/[^\w]/',$password)){
                    echo "Password must have atleast one lowercase, uppercase, digit and</br>special character and more than 8 characters</br>";
                    $this->pwd_err = TRUE;
                    $this->successful = FALSE;
                }
                if($password != $repassword){
                    echo "Passwords donot match!</br>";
                    $this->pwd_mis_err = TRUE;
                    $this->successful = FALSE;
                }

                $address = trim($address);
                $address = stripslashes($address);
                $address = htmlspecialchars($address);
            }
        }

        public function db_val($id,$contact,$email){

            require_once('../config/router.php');
            require_once('../helpers/validation_helper.php');

            $valid_instance = new validation_helper;
            
            if($valid_instance->validate("patient","id",$id) != 0){
                echo "Id is already taken!</br>";
                $this->id_err = TRUE;
                $this->successful = FALSE;
            }
            if($valid_instance->validate("patient","contact_no",$contact) != 0){
                echo "Contact number already exist!</br>";
                $this->contact_err = TRUE;
                $this->successful = FALSE;
            }
            if($valid_instance->validate("patient","email",$email) != 0){
                echo "Email already exist!</br>";
                $this->email_err = TRUE;
                $this->successful = FALSE;
            }
        }
    }

    $instance = new Register_Val;
    $instance->basic_val();
    if($instance->successful == TRUE){
        $instance->db_val($_POST['id'],$_POST['contact'],$_POST['email']);
    }
    if($instance->successful == TRUE){
        echo "Successfully registered";
    }

?>

    <script>

        $("#id").removeClass("input-error");
        $("#fname").removeClass("input-error");
        $("#lname").removeClass("input-error");
        $("#contact").removeClass("input-error");
        $("#email").removeClass("input-error");
        $("#password").removeClass("input-error");
        $("#repassword").removeClass("input-error");

        var id_err = "<?php echo $instance->id_err;?>";
        var name_err = "<?php echo $instance->name_err;?>";
        var age_err = "<?php echo $instance->age_err;?>";
        var contact_err = "<?php echo $instance->contact_err;?>";
        var email_err = "<?php echo $instance->email_err;?>";
        var pwd_err = "<?php echo $instance->pwd_err;?>";
        var pwd_mis_err = "<?php echo $instance->pwd_mis_err;?>";

        if(id_err == true){
            $("#id").addClass("input-error");
        }
        if(name_err == true){
            $("#fname").addClass("input-error");
            $("#lname").addClass("input-error");
        }
        if(age_err == true){
            $("#birthday").addClass("input-error");
        }
        if(contact_err == true){
            $("#contact").addClass("input-error");
        }
        if(email_err == true){
            $("#email").addClass("input-error");
        }
        if(pwd_err == true){
            $("#password").addClass("input-error");
        }
        if(pwd_mis_err == true){
            $("#password").addClass("input-error");
            $("#repassword").addClass("input-error");
        }

    </script>