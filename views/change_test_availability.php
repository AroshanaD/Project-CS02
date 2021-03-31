<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script type="text/javascript" src="/project-cs02/files/js/test_availability.js"></script>
</head>

<body>
    <div class="container-7">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>

        <form class="details" method="post">
            <div class="details-div1">
                <div class="details-title">Patient Details</div>
                <div class="details-field">Name</div><input class="details-field" id="name" value="<?php echo $_POST['patient_test']['patient_name'] ?>" disabled>
                <div class="details-field">Age</div><input class="details-field" id="age" value="<?php echo $_POST['patient_test']['patient_age'] ?>" disabled>
                <div class="details-field">Gender</div><input class="details-field" id="gender" value="<?php echo $_POST['patient_test']['patient_gender'] ?>" disabled>
                <div class="details-field">Contact</div><input class="details-field" id="contact" value="<?php echo $_POST['patient_test']['patient_contact'] ?>" disabled>
            </div>
            <div class="details-div2">
                <div class="details-title">Lab Test Details</div>
                <input type="hidden" class="details-field" id="t_id" value="<?php echo $_GET['id'] ?>" disabled>
                <div class="details-field">Date</div><input class="details-field" id="date" value="<?php echo $_POST['patient_test']['date'] ?>" disabled>
                <div class="details-field">Time</div><input class="details-field" id="time" value="<?php echo $_POST['patient_test']['time'] ?>" disabled>
                <div class="details-field">Cost</div><input class="details-field" id="cost" value="<?php echo $_POST['patient_test']['cost'] ?>" disabled>
                <div class="details-field">Available</div>
                <input class="details-field" value="<?php $available = $_POST['patient_test']['availability'] == 0 ? "No" : "Yes";
                                                    echo $available; ?>" disabled>
                <div class="details-field">Change Availability</div>
                <select class="details-field" name="availability" id="availability" required>
                    <option value="1">Available</option>
                    <option value="0">Not Available</option>
                </select>
                <input type="submit" value="Update" name="update" class="btn">
            </div>
        </form>

        <div class="test-details">
        </div>

        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>