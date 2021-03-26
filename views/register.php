<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="/project-cs02/files/js/jquery-3.5.1.js"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/validate_form.js"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/validation.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/1b83d32a6d.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-3" >
        <div class="nav">
            <img src="<?php echo Router::base_url() . '/files/icons/Logo.png' ?>" style="float:left; margin-left:60px;margin-top:10px">
            <a href=<?php echo Router::site_url()."/user/login" ?>> <i class="fas fa-sign-in-alt"></i> Login</a>
            <a href=<?php echo Router::site_url().'/main' ?>> <i class="fas fa-home"></i> Home</a>    
        </div>
        <form class="form" style="background-color:#9999ff">
            <div class="form-container">
                <div id="form-img" style="background-color: transparent;" >
                <img src="<?php echo Router::base_url() . '/files/icons/privacy.svg' ?>" style="width:250px; margin-top:70px">
                </div>
                <div id="form-1">
                    <div class="title" style="font-size:30px">Sign Up</div>
                    <div class="label">
                        <label for="id">NIC</label>
                    </div>
                    <div class="input" id="id_f">
                        <input type="text" id="id" name="id" placeholder="ex:199912345678 or 991234567V" required>
                    </div>
                    <div class="label">
                        <label for="name">First Name</label>
                    </div>
                    <div class="input" id="fname_f">
                        <input type="text" id="fname" name="fname" max="15" required>
                    </div>
                    <div class="label">
                        <label for="name">Last Name</label>
                    </div>
                    <div class="input" id="lname_f">
                        <input type="text" id="lname" name="lname" max="15" required>
                    </div>
                    <div class="label">
                        <label for="gender">Gender</label>
                    </div>
                    <div class="input">
                        <select id="gender" name="gender" required>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    <div class="label">
                        <label for="birthday">Birthday</label>
                    </div>
                    <div class="input" id="bday_f">
                        <input type="date" id="birthday" name="birthday" required>
                    </div>
                </div>
                <div id="form-2">
                    <div class="label">
                        <label for="contact">Contact</label>
                    </div>
                    <div class="input" id="contact_f">
                        <input type="tel" id="contact" name="contact" placeholder="ex:771234567" required>
                    </div>
                    <div class="label">
                        <label for="address">Address</label>
                    </div>
                    <div class="input" id="address_f">
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="label">
                        <label for="email">Email</label>
                    </div>
                    <div class="input" id="email_f">
                        <input type="email" id="email" name="email" placeholder="ex:user@domain.com" required>
                    </div>
                    <div class="label">
                        <label for="password">Password</label>
                    </div>
                    <div class="input" id="password_f">
                        <input type="password" id="password" name="passowrd" required>
                    </div>
                    <div class="label">
                        <label for="repassword">Re-Password</label>
                    </div>
                    <div class="input" id="rpassword_f">
                        <input type="password" id="repassword" name="repassword" required>
                    </div>
                    <div>
                        <button type="submit" name="Register" class="btn">Register</button>
                    </div>
                    <div id="form-message"></div></br>
                    <div>
                        <a href=<?php echo Router::site_url()."/user/login" ?> id="login-ref" style=" color: #743ebb; float:left; font-size:13px; margin-right:20px">Already have an account? (Login here)</a>
                    </div>
                </div>
            </div>
        </form>
        <div class="footer">@ All rights are reserved
        </div>
    </div>
</body>

</html>