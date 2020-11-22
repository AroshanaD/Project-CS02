
    <div style="background-image: url(<?php echo Router::base_url().'/files/icons/undraw_authentication_fsn5.png'?>);background-repeat:no-repeat">

        <div class="container">
            <div class = "block">
                <div class="profile-card-details">
                    <div class="title">Receptionist Profile</div>
                    <div class="field">Name:</div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Contact:</div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Email:</div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Address:</div><div class="val_field"><?php echo $_SESSION['address']?></div>
                </div>
            </div>
        </div>
        <div class="taskboard">
            <div class="task-card">
                <p> 
                    <img src=<?php echo Router::base_url().'/files/icons/book.png'?> alt="view appointment" style="width:50px; height:50px;">
                </p>
                <p>
                        Appoinment
                </p>
                <div class="dropdown-content">
                    <ul>
                        <li><a href=<?php echo Router::site_url().'/appointment/onpremise' ?>>Make Appointment</a></li>
                        <li><a href="#">View Appointments</a></li>
                    </ul>
                </div>
            </div>
            <div class="task-card">
                <p>
                    <img src=<?php echo Router::base_url().'/files/icons/overtime.png'?> alt="doctor schedule" style="width:50px; height:50px;">
                </p>
                <p>
                            Doctor Schedule
                </p>
                <div class="dropdown-content">
                    <ul>
                        <li><a href=<?php echo Router::site_url().'/doctor_Schedule/index' ?>>Doctor Schedule</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>