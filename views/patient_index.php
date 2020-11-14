
    <div style="background-image: url(<?php echo Router::base_url().'/files/icons/undraw_authentication_fsn5.png'?>);background-repeat:no-repeat">
        <div class="container">
            <div class="block">
                <div class="profile-card-details">
                    <div class="title">Patient Profile</div>
                    <div class="field">Name    </div><div class="val_field"><?php echo $_SESSION['f_name'].' '.$_SESSION['l_name']?></div>
                    <div class="field">Gender </div><div class="val_field"><?php echo $_SESSION['gender']?></div>
                    <div class="field">Birthday </div><div class="val_field"><?php echo $_SESSION['birthday']?></div>
                    <div class="field">Contact </div><div class="val_field"><?php echo $_SESSION['contact_no']?></div>
                    <div class="field">Email   </div><div class="val_field"><?php echo $_SESSION['email']?></div>
                    <div class="field">Address </div><div class="val_field"><?php echo $_SESSION['address']?></div>
                </div>
            </div>
        </div>
        <div class="databoard">
            <div class="data-card">
                Appointments
            </div>
            <div class="data-card">
                Lab Tests
            </div>
        </div>
        <div class="taskboard">
            <div class="task-card">
                <p>
                    <img src=<?php echo Router::base_url().'/files/icons/book.png'?> alt="view appointment" style="width:50px; height:50px;">
                </p>
                <p>
                            Appointments
                </p>
                <div class="dropdown-content">
                    <ul>
                        <li><a href=<?php echo Router::site_url().'/appointment/search_doctor'?>>Make Appointment</a></li>
                        <li><a href=<?php echo Router::site_url().'/doctor_Schedule/index'?>>Doctor Schedule</a></li>
                    </ul>
                </div>
            </div>
                <div class="task-card">
                    <p>
                        <img src=<?php echo Router::base_url().'/files/icons/test-passed.png'?> alt="view lab test" style="width:50px; height:50px;">
                    </p>
                    <p>
                        View Lab Test Results
                    </p>
                    <div class="dropdown-content">
                        <ul>
                            <li><a href=<?php echo Router::site_url().'/appointment/search_doctor'?>>Lab Test Results</a></li>
                        </ul>
                    </div>
                </div>
        </div>
    </body>
</html>