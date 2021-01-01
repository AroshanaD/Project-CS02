<!DOCTYPE html>

    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
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
                <div id="databord-title">Lab tests</div>
                <div id="databord-value">76</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-flask fa-5x"></i></div>
            </div>
            <div class="databoard-2">
                <div id="databord-title">Patients</div>
                <div id="databord-value">128</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-hospital-user fa-5x"></i></div>
            </div>
            
            <div class="databoard-3">
                <div id="databord-title">Doctors</div>
                <div id="databord-value">30</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-user-md fa-5x"></i></div>
            </div>
            <div class="taskboard">
              <a href=<?php echo Router::site_url().'/patientTest/create_test' ?> class="task-large">Create Test
                <p style="algin:center; color:grey; font-weight:normal">
                  Now very easy to<br>
                  create tests <br>
                  for patients<br>
                </p>
              </a>
              <a href=<?php echo Router::site_url().'/patientTest/view' ?> class="task-large">Patient Tests</a>
              <a href=<?php echo Router::site_url()."/labtest/view" ?> class="task-large">Lab tests</a>
            </div>
            <div class="footer">@ All rights are reserved</div> 
          <div>
         
    </body>

</html>