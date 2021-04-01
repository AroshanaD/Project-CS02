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
                <div id="welcome-txt">Welcome, <?php echo $_SESSION['f_name']?></div>
              </div>
              <div id="dashboard-title">Dashboard</div>
            </div>
            <div class="databoard-1">
                <div id="databord-title">Lab tests</div>
                <div id="databord-value">23</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-flask fa-5x"></i></div>
            </div>
            <div class="databoard-2">
                <div id="databord-title">Today Lab Tests</div>
                <div id="databord-value">11</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-vial fa-5x"></i></div>
            </div>
            
            <div class="databoard-3">
                <div id="databord-title">Lab Reports To Be Delivered</div>
                <div id="databord-value">43</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="far fa-file-alt fa-5x"></i></div>
            </div>
            <div class="taskboard">
              <a href=<?php echo Router::site_url().'/patientTest/create_test' ?> class="task-large">Create Test
                <p style="algin:center; color:grey; font-weight:normal ; font-size:14px">
                  Now very easy to<br>
                  create tests <br>
                  for patients<br>
                </p>
              </a>
              <a href=<?php echo Router::site_url().'/patientTest/view' ?> class="task-large">Patient Tests
              <p style="algin:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can find <br>
                  details of previous <br>
                  lab tests of patient!!
                </p>
              </a>
              <a href=<?php echo Router::site_url()."/labtest/view" ?> class="task-large">Lab Tests
              <p style="algin:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can findout <br>
                  various labtest details<br>
                  details!!
                </p>
                </a>
            </div>
            <div class="footer">@ All rights are reserved</div> 
          <div>
         
    </body>

</html>