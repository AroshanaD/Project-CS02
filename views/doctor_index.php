<!DOCTYPE html>

    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
    </head>

    <body>
        <div class="container-1" style="background-image:url(<?php echo Router::base_url().'/files/icons/doctor.jpg'?>); background-repeat:no-repeat">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

            <div class="dashboard">
              <div id="welcome-board">
                <div id="welcome-txt" style="color:black">Welcome, Dasun!</div>
              </div>
              <div id="dashboard-title" style="color:black">Dashboard</div>
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
                <div id="databord-value">30</div>
                <div><img src=<?php echo Router::base_url().'/files/icons/patient.png'?> style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            <div class="taskboard" style="background-color: #cececee1">
              <a href=<?php echo Router::site_url().'/patient_Appointment/view_recept' ?> class="task-large">Appointments
                <p style="algin:center; color:grey; font-weight:normal">
                  Here you can find <br>
                  appointment details<br>
                  of your patient!!
                </p>
            
              </a>
              <a href=<?php echo Router::site_url()."/statistics/weekly" ?> class="task-large">View Statistics
                <p style="algin:center; color:grey; font-weight:normal">
                  Our Hospital analyis the <br>
                  appointment details and<br>
                  Patients details!!
                </p>
              </a>
              <a href=<?php echo Router::site_url()."/statistics/report" ?> class="task-large">generate reports
                <p style="algin:center; color:grey; font-weight:normal">
                  Here you can get a<br>
                  complete report<br>
                  of your patients and appointments!!
                </p>
              </a>
            </div>
            <div class="footer">@ All rights are reserved</div> 
          <div>
         
    </body>

</html>