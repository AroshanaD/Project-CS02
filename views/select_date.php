<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <script src=<?php echo Router::base_url() . '/files/js/autofill_spec.js' ?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url() . '/files/js/select_date.js' ?> type="text/javascript"></script>
</head>

<body>
    <div class="container-10">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>
        <div class="form" style="background-color:white; border-top: var(--border-line); border-bottom: var(--border-line)">
            <form id="selectdate-form">
                <div class="topic" style="text-align:center">
                    Select Appointment Date
                </div>
                <div class="form-container1" style="margin-bottom:0px">
                    <div id="form-img" style="background-image: url(<?php echo Router::base_url() . '/files/icons/calendar.svg' ?>); width: 250px; height: 150px; background-size:cover"></div>
                    <div id="form-1" style="width: 250px">
                        <div class="input">
                            <input type="date" name="date" id="date" required>    
                        </div>
                        <div><input type="submit" value="Select" class="btn" id="date_select"></div>
                        <div id="form-message"></div>
                    </div>
                </div>
            </form>
        </div>
        <div class="details">
            <div class="details-div1">
                <div class="title" style="font-size:17px">Doctor Details</div>
                <div class="field" style="width:100%">Name</div>
                <div class="field" style="width:100%">Specialization</div>
                <div class="field" style="width:100%">Qualification</div>
                <div class="field" style="width:100%">Fee</div>
            </div>
            <div class="details-div2">
                <div class="field" style="width:100%"></div>
                <div class="field" style="width:100%"></div>
                <div class="field" style="width:100%">
                    <?php echo "Dr. " . $_SESSION['appointment']['doctor_name'] ?>
                </div>
                <div class="field" style="width:100%">
                    <?php echo $_SESSION['appointment']['doctor_specialization'] ?>
                </div>
                <div class="field" style="width:100%">
                    <?php echo $_SESSION['appointment']['doctor_qualification'] ?>
                </div>
                <div class="field" style="width:100%">
                    <?php echo "Rs." . $_SESSION['appointment']['doctor_fee'] ?>
                </div>
            </div>
        </div>
        <div class="table" style="background-color: white; height: auto; align-items: center ;margin-top:5px">
            <div class="title" style="width:100%; text-align:center;font-size:17px">Week Schedule</div>
            <table style="width:fit-content; box-shadow: none">

            </table>
            <div style="width:100%;text-align:center;margin-top: 10px">
                    <button class="btn" id="back">Back</button>
            </div>
        </div>
        <div class="footer">All rights are reserved</div>
    </div>

</body>

</html>