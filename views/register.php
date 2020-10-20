<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style.css'?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script rel="text/javascript" src="/project-cs02/files/js/validate_form.js"></script>
    </head>
    <body>
        <div class="container-small">Hospital Management System</div>
        <div class="container">
            <div class="form-container">
                <div class="register">
                    <div class="form-name">User Registration</div>
                    <form action=<?php echo Router::site_url()."/register/validate" ?> method="post">
                        <div class="form-box">
                            <div class="label">
                                <label for="id">NIC</label>
                            </div>
                            <div class="input">
                                <input type="text" id="id" name="id" required>
                            </div>
                            <div class="label">
                                <label for="name">First Name</label>
                            </div>
                            <div class="input">
                                <input type="text" id="fname" name="fname" max="15" required>
                            </div>
                            <div class="label">
                                <label for="name">Last Name</label>
                            </div>
                            <div class="input">
                                <input type="text" id="lname" name="lname" max="15" required>
                            </div>
                            <div class="label">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="input">
                                <select id="gender" name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="birthday">Birthday</label>
                            </div>
                            <div class="input">
                                <input type="date" id="birthday" name="birthday" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact</label>
                            </div>
                            <div class="input">
                                <input type="tel" id="contact" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" id="address" name="address" required>
                            </div>
                            <div class="label">
                                <label for="email">Email</label>
                            </div>
                            <div class="input">
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="label">
                                <label for="password">Password</label>
                            </div>
                            <div class="input">
                                <input type="password" id="password" name="passowrd" required>
                            </div>
                            <div class="label">
                                <label for="repassword">Re-Password</label>
                            </div>
                            <div class="input">
                                <input type="password" id="repassword" name="repassword" required>
                            </div>
                        </div>
                            <div class="btn-area"><button type="submit" name="Register" class = "submit-btn" >Register</button></div>
                    </form>
                </div>
                <div id="form-message"></div>
            </div>
        </div>
    </body>
</html>