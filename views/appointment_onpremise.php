<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <script src="<?php echo Router::base_url() . '/files/js/jquery-3.5.1.js' ?>"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src=<?php echo Router::base_url() . '/files/js/autofill_spec.js' ?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url() . '/files/js/validation.js' ?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url() . '/files/js/appointment_onpremise.js' ?> type="text/javascript"></script>
</head>

<body>
    <div class="container-9" style="background-color:#3e37c96e">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
        include $path; ?>

        <div class=form id="selection" >
            <div class="topic-small" style="color:white; font-size:17px">Select Doctor And Date</div>
            <div class="form-container3" style="width:90%; background-color:transparent">
                <div id="form-1" style="background-color:transparent;padding:0">
                    <div class="input" >
                        <select style="background-color:white" name="specialization" id="search_spec" required >
                            <option value="Any">Any Specialization</option>
                        </select>
                    </div>
                    <div class="input" >
                        <input style="background-color:white" type="date" id="date" name="date" placeholder="Select Date" required>
                    </div>
                    <div id="form-message"></div>
                </div>
                <div id="form-2" style="background-color:transparent;padding:0">
                    <div class="input" >
                        <select style="background-color:white" name="doctor" id="doctor" required>
                            <option value="" hidden selected>Select doctor</option>
                        </select>
                    </div>
                    <div class="input" >
                        <input style="background-color:white" type="text" id="seat" name="seat" placeholder="Available Seat No" required>
                    </div>    
                </div>
                
            </div>
        </div>
        <div class="table" style=" margin:0;" >
            <div class="topic-small" style="border:none ;color:white; font-size:17px">Week Schedule</div>
            <div class="table" style="width: 100%; border: none;">
                <table style="width:fit-content">

                </table>
            </div>
        </div>
        <form class="form"  style="background-color:white;">
            <div class="topic" style="width: 100%;text-align:center;margin:0">Fill Patient Details</div>
            <div class="form-container3" style="width:60%; padding: 0" >
                <div id="form-1">
                    <div class="label">
                        <label for="contact">Contact*</label>
                    </div>
                    <div class="input">
                        <input type="tel" name="contact" id="contact" required>
                    </div>
                    <div class="label">
                        <label for="email">Email</label>
                    </div>
                    <div class="input">
                        <input type="email" name="email" id="email">
                    </div>
                    <div class="label">
                        <label for="appoint_no">Appointment no</label>
                    </div>
                    <div class="input">
                        <input type="float" id="appoint_no" name="appoint_no" disabled>
                    </div>
                    <div class="label">
                        <label for="doc_charges">Doctor Charges</label>
                    </div>
                    <div class="input">
                        <input type="float" id="d_charges" name="d_charges" disabled>
                    </div>
                    <div class="label">
                        <label for="tax">Tax</label>
                    </div>
                    <div class="input">
                        <input type="float" id="tax" name="tax" value=250 required disabled>
                    </div>
                    <div class="label">
                        <label for="total">Total Amount</label>
                    </div>
                    <div class="input">
                        <input type="float" id="total" name="total" required disabled>
                    </div>
                </div>
                <div id="form-2">
                    <!--div class="label">
                        <label for="id">NIC</label>
                    </div>
                    <div class="input">
                        <input type="text" name="id" id="id" required>
                    </div-->
                    <div class="label">
                        <label for="name">First Name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="f_name" id="f_name" required>
                    </div>
                    <div class="label">
                        <label for="name">Last Name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="l_name" id="l_name" required>
                    </div>
                    <div class="label">
                        <label for="age">Birthday</label>
                    </div>
                    <div class="input">
                        <input type="date" name="birthday" id="birthday" required>
                    </div>
                    <div class="label">
                        <label for="gender">Gender</label>
                    </div>
                    <div class="input">
                        <input type="text" name="gender" id="gender" required>
                    </div>
                    <div class="label">
                        <label for="address">Address</label>
                    </div>
                    <div class="input">
                        <input type="text" name="address" id="address" required>
                    </div>
                    <input type="submit" value="Proceed" class="btn" name="submit" id="submit">
                    <div id="form-message"></div>
                </div>
            </div>
        </form>
        <div class="footer">All rights are reserved</div>
    </div>
    </div>
</body>

</html>