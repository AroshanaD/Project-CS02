
    <div  style="background-image: url(<?php echo Router::base_url().'/files/icons/undraw_doctor_kw5l.png'?>);background-repeat:no-repeat">

        <div class="container">
            <div class="block"> 
                <div class="profile-card-details">
                    <div class="title">Doctor Profile</div>
                    <div class="field">Name</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Specialization</div><div class="val_field"><?php echo $_SESSION['specialization_id']?></div>
                    <div class="field">Qualification</div><div class="val_field"><?php echo $_SESSION['qualification']?></div>
                    <div class="field">Contact</div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Email</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                </div>
            </div>
        </div>
        <div class="taskboard">
            <div class="task-card">
                <p>
                    <img src=<?php echo Router::base_url().'/files/icons/day-view.png'?> alt="view appointment" style="width:50px; height:50px;">
                </p>
                <p>
                            View Appointments
                </p>
                <div class="dropdown-content">
                    <ul>
                        <li><a href=<?php echo Router::site_url().'/appointment/view_appointment' ?>>View Appointments</a></li>
                    </ul>
                </div>
            </div>
            <div class="task-card">
                <p>
                    <img src=<?php echo Router::base_url().'/files/icons/area-chart.png'?> alt="view statistic" style="width:50px; height:50px;">
                </p>
                <p>
                            View Statistics
                </p>
                <div class="dropdown-content">
                    <ul>
                        <li><a href=<?php echo Router::site_url().'/statistics/weekly' ?>>weekly</a></li>
                        <li><a href=<?php echo Router::site_url().'/statistics/monthly' ?>>Monthly</a></li>
                        <li><a href=<?php echo Router::site_url().'/statistics/yearly' ?>>Yearly</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>