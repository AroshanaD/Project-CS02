<?php

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

        $id_err = FALSE;
        $name_err = FALSE;
        $age_err = FALSE;
        $contact_err = FALSE;
        $email_err = FALSE;
        $pwd_err = FALSE;
        $pwd_mis_err = FALSE;

        if(empty($id)||empty($fname)||empty($lname)||empty($birthday)||empty($contact)||empty($address)||
            empty($email)||empty($password)||empty($repassword)){
            echo 'Fields cannot be empty!</br>';
        }
        if(!preg_match('/[0-9]{12}/',$id)){
            echo "Please enter a valid id!</br>";
            $id_err = TRUE;
        }
        if(preg_match('/[^a-zA-Z]/',$fname) || preg_match('/[^a-zA-Z]/',$lname)){
            echo "No special characters allowed in name!</br>";
            $name_err = TRUE;
        }
        if(date_add(date_create($birthday),date_interval_create_from_date_string('18 years'))->format("Y-m-d") > date("Y-m-d",time())){
            echo "User must be over 18 years old!</br>";
            $age_err = TRUE;
        }
        if(!preg_match('/([0][0-9]{9})/',$contact)){
            echo "Please enter a valid contact no!</br>";
            $contact_err = TRUE;
        }
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "Please enter a valid email!</br>";
            $email_err = TRUE;
        }
        if(!preg_match('/.{8,20}/',$password) || !preg_match('/[a-z]/',$password) || !preg_match('/[A-Z]/',$password) || 
            !preg_match('/[0-9]/',$password) || !preg_match('/[^\w]/',$password)){
            echo "Password must have atleast one lowercase, uppercase, digit and</br>special character and more than 8 characters</br>";
            $pwd_err = TRUE;
        }
        if($password != $repassword){
            echo "Passwords donot match!</br>";
            $pwd_mis_err = TRUE;
        }

        $address = trim($address);
        $address = stripslashes($address);
        $address = htmlspecialchars($address);
    }

?>

    <script>
        var id_err = "<?php echo $id_err;?>";
        var name_err = "<?php echo $name_err;?>";
        var age_err = "<?php echo $age_err;?>";
        var contact_err = "<?php echo $contact_err;?>";
        var email_err = "<?php echo $email_err;?>";
        var pwd_err = "<?php echo $pwd_err;?>";
        var pwd_mis_err = "<?php echo $pwd_mis_err;?>";

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