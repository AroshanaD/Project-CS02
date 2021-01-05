<!DOCTYPE html>

    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="far fa-calendar-check fa-5x "></i></div>
            </div>
            <div class="databoard-2">
                <div id="databord-title">Doctors</div>
                <div id="databord-value">128</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-user-md fa-5x"></i></div>
            </div>
            
            <div class="databoard-3">
                <div id="databord-title">Patients</div>
                <div id="databord-value">530</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-hospital-user fa-5x"></i></div>
            </div>
            <div class="taskboard">
              <a href=<?php echo Router::site_url().'/appointment/search_doctor'?> class="task-large">Make Appointment
              <p style="algin:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can create <br>
                  appointments for doctors<br>
                  based on the request of patient!!
                </p>
                </a>
              <a href=<?php echo Router::site_url().'/appointment/view_details'?> class="task-large">View Appointment
              <p style="algin:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can view <br>
                  the appointment details<br>
                  of relevant patient!!
                </p>
                </a>  
              <a href=<?php echo Router::site_url().'/doctor_Schedule/index' ?> class="task-large">Doctor schedules
              <p style="algin:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can find <br>
                  scheduled details<br>
                  of doctors!!
                </p>
                </a>
            </div>
            <div class="footer">@ All rights are reserved</div> 
          <div>
         
    </body>

</html>