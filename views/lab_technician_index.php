<!DOCTYPE html>

    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="container-1">
            <div class="nav">
                <a href=<?php echo Router::site_url().'/user/logout' ?> style="float:right">Log Out</a>
                <a href=<?php echo Router::site_url().'/user/dashboard'?> style="float:right">Dashboard</a>
                <button id="nav-icon">   
                </button>
                <button id="close-icon">
                </button>
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
                <div><img src='diagnosis.png' style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            <div class="databoard-2">
                <div id="databord-title">Patients</div>
                <div id="databord-value">128</div>
                <div><img src='stethoscope (3).png' style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            
            <div class="databoard-3">
                <div id="databord-title">Doctors</div>
                <div id="databord-value">30</div>
                <div><img src='seller.png' style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            <div class="taskboard" style="background-color: #c7c7c7;">
              <a href=<?php echo Router::site_url().'/patientTest/create_test' ?> class="task">Create Test</a>
              <a href=<?php echo Router::site_url().'/patientTest/view' ?> class="task">View Patient Tests</a>
              <a href=<?php echo Router::site_url().'/labtest/add' ?> class="task">Add New Lab Test</a>
              <a href=<?php echo Router::site_url()."/labtest/view" ?> class="task">View Lab tests</a>
            </div>
            <div class="footer">@ All rights are reserved</div> 
          <div>
         
    </body>

</html>