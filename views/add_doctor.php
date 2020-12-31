<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script type="text/javascript" src="/project-cs02/files/js/autofill_spec.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/doctor_validate.js"></script>
    <script type="text/javascript" src="/project-cs02/files/js/validation.js"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

        <form class="form">
            <div class="form-container">
                <div id="form-img">
                </div>
                <div id="form-1">
                <div class="topic">ADD DOCTORS</div>
                    <div class="label">
                        <label for="id">Id</label>
                    </div>
                    <div class="input" id="id_f">
                        <input type="text" name="id" id="id" selected disabled required>
                    </div>
                    <div class="label">
                        <label for="f_name">First name</label>
                    </div>
                    <div class="input" id="fname_f">
                        <input type="text" id=fname name="f_name" required>
                    </div>
                    <div class="label">
                        <label for="l_name">Last name</label>
                    </div>
                    <div class="input" id="lname_f">
                        <input type="text" id="lname" name="l_name" required>
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
                        <label for="qualification">Qualification</label>
                    </div>
                    <div class="input" id="text_f">
                        <input type="text" name="qualification" id="qualification" required>
                    </div>
                </div>

                <div id="form-2">
                    <div class="label">
                        <label for="address">Address</label>
                    </div>
                    <div class="input" id="address_f">
                        <input type="text" id="address" name="address" required>
                    </div>
                    <div class="label">
                        <label for="contact">Contact No</label>
                    </div>
                    <div class="input" id="contact_f">
                        <input type="tel" id="contact" name="contact" required>
                    </div>
                    <div class="label">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="input" id="email_f">
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="label">
                        <label for="specialization">Specialization</label>
                    </div>
                    <div class="input">
                        <select name="specialization" id="search_spec" required>
                            <option value="Any">Any Specialization</option>
                        </select>
                    </div>
                    <div class="label">
                        <label for="fee">Fees</label>
                    </div>
                    <div class="input">
                        <input type="number" name="fee" id="fee" required>
                    </div>
                    <input type="submit" name="Add" value="Add" class="btn">
                    <div id="form-message"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>