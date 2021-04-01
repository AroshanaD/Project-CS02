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
                <div id="welcome-txt" style="color:black">Welcome, <?php echo $_SESSION['f_name']?></div>
              </div>
              <div id="dashboard-title" style="color:black">Dashboard</div>
            </div>
            <div class="databoard-1">
                <div id="databord-title">Up Coming Appointment Date</div><br>
                <div id="databord-value" style="font-size:20px;font-weight:bold"> <?php if($_SESSION['user_stat']){echo $_SESSION['user_stat']['date'];}
                else{echo "---";}?></div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="far fa-calendar-check fa-5x "></i></div>
            </div>
            <div class="databoard-2">
                <div id="databord-title">Up Coming Appointment Time </div><br>
                <div id="databord-value" style="font-size:20px;font-weight:bold"><?php if($_SESSION['user_stat']){echo $_SESSION['user_stat']['time'];}
                else{echo "---";}?></div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-clock fa-5x"></i></div>
            </div>
            
            <div class="databoard-3">
                <div id="databord-title">Up Coming Appointment Doctor</div>
                <div id="databord-value" style="font-size:20px;font-weight:bold"><?php if($_SESSION['user_stat']){echo "Dr.".$_SESSION['user_stat']['f_name']." ".$_SESSION['user_stat']['l_name'];}
                else{echo "---";}?></div>
                <div style="float:right; margin-right:60px; color: #5e60ce;"><i class="fas fa-user-md fa-5x"></i></div>
            </div>
            <div class="taskboard">
              <a href=<?php echo Router::site_url().'/appointment/search_doctor'?> class="task-large">Appointments
              <p style="text-align:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can find <br>
                  your appointment details<br><br>
                  <b>make your appointment here!!</b>
                </p>
              </a>
              <a href=<?php echo Router::site_url().'/doctor_Schedule/index'?> class="task-large">Doctor Schedules
              <p style="text-align:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can find your <br>
                  scheduled appointment details<br><br>
                  <b>Find doctor schedules here!!</b>
                </p>
              </a>
              <a href=<?php echo Router::site_url().'/patientTest/patientResult_View' ?> class="task-large">Lab Tests
              <p style="text-align:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can find <br>
                  your lab test <br>
                  availability details!!<br><br>
                  <b>View your available labtests!!</b>
                </p>
              </a>
            </div>
            <div class="footer">@ All rights are reserved</div> 
          <div>
         
    </body>

</html>