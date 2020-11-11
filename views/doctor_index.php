
    <div  style="background-image: url(<?php echo Router::base_url().'/files/icons/undraw_doctor_kw5l.png'?>);">

        <div class="container">
            <div class="block"> 
                <div class="profile-card-details">
                    <div class="title">Doctor Profile</div>
                    <div class="field">Name</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Specialization</div><div class="val_field"><?php echo $_SESSION['specialization_id']?></div>
                    <div class="field">Qualification</div><div class="val_field"><?php echo $_SESSION['qualification']?></div>
                    <div class="field">Contact</div><div class="val_field"><?php echo $_SESSION['contact']?></div>
                    <div class="field">Email</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                </div>
            </div>
        </div>
        <div class="taskboard">
            <div class="col-5">
                <a href="#">
                    <div class="task-card">
                        <p>
                            <img src=<?php echo Router::base_url().'/files/icons/day-view.png'?> alt="view appointment" style="width:50px; height:50px;">
                        </p>
                        View Appointments
                    </div>
                </a>
            </div>
            <div class="col-5">
                    <div class="task-card">
                        <p>
                        <img src=<?php echo Router::base_url().'/files/icons/area-chart.png'?> alt="view statistic" style="width:50px; height:50px;">
                        </p>
                        View Statistics
                    </div>
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