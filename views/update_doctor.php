<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
    </head>

    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/undraw_team_ih79.png'?>);">
        <div class="container">
                <div class="block">
                    <form action ="#" method = "POST">
                       <div class="form-box">
                           <div class="title">Update Doctors</div>
                            <div class="label">
                                <label for="staff">Doctors</label>
                            </div>
                            <div class="input">
                                <select name="staff" disabled>
                                    <option value="pharmacist">Pharmacist</option>
                                    <option value="lab_technician ">Lab technician</option>
                                    <option value="receptionist">Receptionist</option>
                                    <option value="receptionist">Supervisor</option>
                                </select>
                            </div>
                            <div class="label">
                                <label for="id">Id</label>
                            </div>
                            <div class="input">
                                <input type="text" name="id" required>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="f_name" required>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" name="l_name" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" name="address" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input">
                                <input type="text" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input">
                                <input type="text" name="email" required>
                            </div>
                            <div class="btn-area"><input type="submit" value="Update" class="submit-btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>