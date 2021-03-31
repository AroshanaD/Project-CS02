<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src="<?php echo Router::base_url() . '/files/js/generate_report.js' ?>"></script>
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
</head>

<body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>

        <form class="form" method="post" action="<?php echo Router::$site_url . '/reports/view_report' ?>">
            <div class="form-container1">
                <div id="form-img">
                </div>
                <div id="form-1">
                    <div class="label">
                        <label for="staff">Report Type</label>
                    </div>
                    <div class="input">
                        <select name="category" id="category" required>
                            <option value="" disabled hidden selected> Select Category </option>
                            <?php if ($_SESSION['user_cat'] == 'supervisor') : ?>
                                <option value="appointment_overview">Appointment Overview</option>
                                <option value="inventory_overview">Inventory Overview</option>
                            <?php endif; ?>
                            <?php if ($_SESSION['user_cat'] == 'doctor') : ?>
                                <option value="doctor_appointment_overview">Appointment Overview</option>
                            <?php endif; ?>
                            <?php if ($_SESSION['user_cat'] == 'pharmacist') : ?>
                                <option value="sales_overview">Sales Overview</option>
                                <option value="inventory_overview">Inventory Overview</option>
                            <?php endif; ?>
                            <?php if ($_SESSION['user_cat'] == 'lab_technician') : ?>
                                <option value="lab_overview">Lab Test Overview</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <div class="label">
                        <label for="start_date">From</label>
                    </div>
                    <div class="input" id="id_f">
                        <input type="date" name="from_date" id="from_date" required>
                    </div>
                    <div class="label">
                        <label for="last_date">To</label>
                    </div>
                    <div class="input" id="id_f">
                        <input type="date" name="to_date" id="to_date" required>
                    </div>
                    <input type="submit" name="Add" value="Generate" class="btn">
                    <div id="form-message"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
</body>

</html>