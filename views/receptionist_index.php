
<div class="container">
            <div class="taskboard">
                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/appointment.svg'?>)">
                </div>
                <div class="right" style="background:#023047">
                    <div class="s-title">
                        Appointments
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url().'/appointment/onpremise' ?>>Make Appointment</a></li>
                            <li><a href=<?php echo Router::site_url().'/patient_Appointment/view_recept' ?>>View Appointments</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/schedule.svg'?>)">
                </div>
                <div class="right" style="background:#023047">
                    <div class="s-title">
                        Doctor Schedule
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url().'/doctor_Schedule/index' ?>>Doctor Schedule</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

            </div>

            <div class="contact-box" id="profile-board" >
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/dashboard.svg' ?>)"></div>
                <div class="right" id="profile">
                    <div class="title" style="border:none; color:  #cb0112">Receptionist Profile</div>
                    <div class="field">Name:</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Contact:</div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Email:</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Address:</div><div class="val_field"><?php echo $_SESSION['address']?></div>
                </div>
            </div>

        </div>
    </body>
</html>