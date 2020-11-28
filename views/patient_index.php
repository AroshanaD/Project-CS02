
<div class="container" style="min-height:700px">
            <div class="contact-box" id="profile-board">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/dashboard.svg' ?>)"></div>
                <div class="right" id="profile">
                    <div class="title">Patient Profile</div>
                    <div class="field">Name    </div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Gender </div><div class="val_field"><?php echo $_SESSION['gender']?></div>
                    <div class="field">Birthday </div><div class="val_field"><?php echo $_SESSION['birthday']?></div>
                    <div class="field">Contact </div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Email   </div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Address </div><div class="val_field"><?php echo $_SESSION['address']?></div>
                </div>
            </div>
            <div class="taskboard">
                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/appointment.svg'?>)">
                </div>
                <div class="right">
                    <div class="s-title">
                        Appointments
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url().'/appointment/search_doctor'?>>Make Appointment</a></li>
                            <li><a href=<?php echo Router::site_url().'/doctor_Schedule/index'?>>Doctor Schedule</a></li>
                            <li><a href=<?php echo Router::site_url().'/appointment/view_details'?>>View Appointment</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/lab.svg'?>)">
                </div>
                <div class="right">
                    <div class="s-title">
                        Lab Test 
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url().'/appointment/result' ?>>Lab Test Results</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>