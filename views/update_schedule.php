<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    <script rel="text/javascript" src="/project-cs02/files/js/schedule.js"></script>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

        <form class="form" method="POST">
            <div class="form-container">
                <div id="form-img">
                </div>
                <div id="form-1">
                <div class="topic">Update Schedule</div>
                    <div class="label">
                        <label for="doc_id">Doctor Id</label>
                    </div>
                    <div class="input">
                        <input type="text" name="doc_id" value="<?php echo $_POST['details']['doctor_id'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="doc_fname">First name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="doc_fname" value="<?php echo $_POST['details']['first_name'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="doc_lname">Last name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="doc_lname" value="<?php echo $_POST['details']['last_name'] ?>" disabled required>
                    </div>

                </div>
                <div id="form-2">
                    <div class="label">
                        <label for="sche_id">Schedule Id</label>
                    </div>
                    <div class="input">
                        <input type="text" name="sche_id" value="<?php echo $_POST['details']['id'] ?>" disabled required>
                    </div>
                    <div class="label">
                        <label for="sche_date">Schedule Date</label>
                    </div>
                    <div class="input">
                        <select name="day" id="category" placeholder="Schedule day"  required>
                                <option value="<?php echo $_POST['details']['date'] ?>"><?php echo $_POST['details']['date'] ?></option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                         </select>
                    </div>
                    <div class="label">
                        <label for="sche_time">Schedule Time</label>
                    </div>
                    <div class="input">
                        <input type="time" name="sche_time" value="<?php echo $_POST['details']['time'] ?>" required>
                    </div>
                    <div class="label">
                        <label for="maxpatient">Maximum no of patient</label>
                    </div>
                    <div class="input">
                        <input type="text" name="maxpatient" value="<?php echo $_POST['details']['max_patient'] ?>" required>
                    </div>
                    
                    <input type="submit" name="Update" value="Update" class="btn">
                    <div id="form-message"></div>

                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>