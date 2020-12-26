<!DOCTYPE html>

    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
    </head>

    <body>
        <div class="container-1">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>
            
            <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

            <div class="dashboard">
              <div id="welcome-board">
                <div id="welcome-txt">Welcome, Dasun!</div>
              </div>
              <div id="dashboard-title">Dashboard</div>
            </div>
            <div class="databoard-1">
                <div id="databord-title">Appointments</div>
                <div id="databord-value">76</div>
                <div><img src=<?php echo Router::base_url().'/files/icons/appointment.png'?> style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            <div class="databoard-2">
                <div id="databord-title">Doctors</div>
                <div id="databord-value">128</div>
                <div><img src=<?php echo Router::base_url().'/files/icons/doctor.png'?> style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            
            <div class="databoard-3">
                <div id="databord-title">Patients</div>
                <div id="databord-value">530</div>
                <div><img src=<?php echo Router::base_url().'/files/icons/patient.png'?> style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            <div class="taskboard">
              <a href=<?php echo Router::site_url().'/appointment/search_doctor'?> class="task-large">Make Appointment</a>
              <a href=<?php echo Router::site_url().'/appointment/view_details'?> class="task-large">View Appointment</a>  
              <a href=<?php echo Router::site_url().'/doctor_Schedule/index' ?> class="task-large">Doctor schedules</a>
            </div>
            <div class="footer">@ All rights are reserved</div> 
          <div>
         
    </body>

</html>