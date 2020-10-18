<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style.css'?>>
    </head>
    <body>
        <div class="container-small">Hospital Management System</div>
        <div class="container">
            <div class="form-container">
                <div class="register">
                    <div class="form-name">User Registration</div>
                    <form method="post">
                        <div class="form-box">
                            <div class="label">
                                <label for="id">NIC</label>
                            </div>
                            <div class="input">
                                <input type="text" name="id" required>
                            </div>
                            <div class="label">
                                <label for="name">Name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="name" required>
                            </div>
                            <div class="label">
                                <label for="gender">Gender</label>
                            </div>
                            <div class="input">
                                <select name="gender" required>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="birthday">Birthday</label>
                            </div>
                            <div class="input">
                                <input type="date" name="birthday" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact</label>
                            </div>
                            <div class="input">
                                <input type="tel" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" name="address" required>
                            </div>
                            <div class="label">
                                <label for="email">Email</label>
                            </div>
                            <div class="input">
                                <input type="email" name="email" required>
                            </div>
                            <div class="label">
                                <label for="repassword">Password</label>
                            </div>
                            <div class="input">
                                <input type="password" name="passowrd" required>
                            </div>
                            <div class="label">
                                <label for="repassword">Re-Password</label>
                            </div>
                            <div class="input">
                                <input type="password" name="repassword" required>
                            </div>
                        </div>
                            <div class="btn-area"><input type="submit" value="Register" class="submit-btn"></div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>