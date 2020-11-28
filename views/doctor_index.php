
        <div class="container" style="min-height:700px">
            <div class="contact-box" id="profile-board">
                <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/dashboard.svg' ?>)"></div>
                <div class="right" id="profile">
                <div class="title">Doctor Profile</div>
                    <div class="field">Name</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Specialization</div><div class="val_field"><?php echo $_SESSION['specialization_id']?></div>
                    <div class="field">Qualification</div><div class="val_field"><?php echo $_SESSION['qualification']?></div>
                    <div class="field">Contact</div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Email</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                </div>
            </div>
            <div class="taskboard">
                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/appointment.svg'?>)">
                </div>
                <div class="right">
                    <div class="s-title">
                        View Appointments
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url().'/doctor_Schedule/view_appointment' ?>>View Appointments</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

                <div class="contact-box" id="task">
                    <div class="left" style="background-image: url(<?php echo Router::base_url().'/files/icons/statistics.svg'?>)">
                </div>
                <div class="right">
                    <div class="s-title">
                        View Statistics
                    </div>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url()."/statistics/weekly" ?>>Weekly</a></li>
                            <li><a href=<?php echo Router::site_url()."/statistics/monthly" ?>>Monthly</a></li>
                            <li><a href=<?php echo Router::site_url()."/statistics/yearly" ?>>Yearly</a></li>
                        </ul>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>