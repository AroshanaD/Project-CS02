<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style.css'?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script rel="text/javascript" src="/project-cs02/files/js/validate_form.js"></script>
        <script rel="text/javascript" src="/project-cs02/files/js/validation.js"></script>
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/main.css" ?>>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
    </head>
    <body style="background:white;">
    <div class="main-nav" style="background: #023047">
            <div></div>
            <div></div>
           <div style="color:white">MedCaid Hospitals</div>
           <div>
                <a href=<?php echo Router::site_url().'/main' ?>><button class="main-button">Home</button></a>
                <a href=<?php echo Router::site_url()."/user/login" ?>><button class="main-button">Login</button></a>
                <a href=<?php echo Router::site_url()."/user/dashboard" ?>><button class="main-button">Dashboard</button></a>
           </div>
       </div>

        <div class="container">
            <div class="contact-box">
            <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/change_password.svg' ?>)"></div>
                    <form action=<?php echo Router::site_url()."/register/validate" ?> method="post">
                        <div class="right">
                            <div class="title">User Registration</div>
                            <div class="label">
                                <label for="id">NIC</label>
                            </div>
                            <div class="input" id="id_f">
                                <input type="text" id="id" name="id" placeholder="ex:199912345678" required>
                            </div>
                            <div class="label" >
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
                            <div class="label" >
                                <label for="birthday">Birthday</label>
                            </div>
                            <div class="input" id="bday_f">
                                <input type="date" id="birthday" name="birthday" required>
                            </div>
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
                                <input type="email" id="email" name="email" placeholder="ex:user@domain.com"  required>
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
                            </div><br>
                            <div>
                                <button type="submit" name="Register" class = "btn" >REGISTER</button>
                            </div> 
                            <div id="form-message"></div>
                        </div>
                           
                    </form>
                    
                </div>
            </div>
        </div>
    </body>
</html>