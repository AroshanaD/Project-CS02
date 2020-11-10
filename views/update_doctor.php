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
                    <form method = "POST">
                       <div class="form-box">
                           <div class="title">Update Doctors</div>
                            <div class="label">
                                <label for="id">Id</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['id'] ?>" name="id" required>
                            </div>
                            <div class="label">
                                <label for="f_name">First name</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['f_name'] ?>" name="f_name" required>
                            </div>
                            <div class="label">
                                <label for="l_name">Last name</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['l_name'] ?>" name="l_name" required>
                            </div>
                            <div class="label">
                                <label for="qualification">Qualifications</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['qualification'] ?>" name="qualification" required>
                            </div>
                            <div class="label">
                                <label for="fee">Charges</label>
                            </div>
                            <div class="input">
                                <input type="number" value="<?php echo $_POST['details']['fee'] ?>" name="fee" required>
                            </div>
                            <div class="label">
                                <label for="address">Address</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['address'] ?>" name="address" required>
                            </div>
                            <div class="label">
                                <label for="contact">Contact No</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['contact_no'] ?>" name="contact" required>
                            </div>
                            <div class="label">
                                <label for="email">Email Address</label>
                            </div>
                            <div class="input">
                                <input type="text" value="<?php echo $_POST['details']['email'] ?>" name="email" required>
                            </div>
                            <div class="btn-area"><input type="submit" name="Update" value="Update" class="submit-btn"></div>
                        </div >
                    </form>
                </div>
            </div>
        </div> 
    </body>

</html>