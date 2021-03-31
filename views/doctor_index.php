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
                <div id="welcome-txt" >Welcome, <?php echo "Dr. ".$_SESSION['f_name']?></div>
              </div>
              <div id="dashboard-title">Dashboard</div>
            </div>
            <div class="databoard-1">
                <div id="databord-title">Today Sessions</div><br>
                <div id="databord-value" style="font-size:20px;font-weight:bold"> <?php if($_SESSION['user_stat']){echo $_SESSION['user_stat']['sessions'];}
                else{echo "---";}?></div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="far fa-calendar-check fa-5x "></i></div>
            </div>
            <div class="databoard-2">
                <div id="databord-title">Session Time </div><br>
                <div id="databord-value" style="font-size:20px;font-weight:bold"><?php if($_SESSION['user_stat']){echo $_SESSION['user_stat']['time'];}
                else{echo "---";}?></div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-user-md fa-5x"></i></div>
            </div>
            
            <div class="databoard-3">
                <div id="databord-title">No.of Appointments</div>
                <div id="databord-value" style="font-size:20px;font-weight:bold"><?php if($_SESSION['user_stat']){echo $_SESSION['user_stat']['appointments'];}
                else{echo "---";}?></div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-user-md fa-5x"></i></div>
            </div>
            <div class="taskboard">
              <a href=<?php echo Router::site_url().'/patient_Appointment/view_recept' ?> class="task-large">Appointments
                <p style="text-align:center; color:grey; font-weight:normal ; font-size:14px">
                <b>View your appointments!!</b><br><br>
                  Here you can find <br>
                  appointment details<br>
                  of your patient!!
                </p>
              </a>
              <a href=<?php echo Router::site_url()."/statistics/weekly" ?> class="task-large">View Statistics
                <p style="text-align:center; color:grey; font-weight:normal; font-size:14px">
                  Our Hospital analyis the <br>
                  appointment details and<br>
                  Patients details!!
                </p>
              </a>
              <a href=<?php echo Router::site_url()."/statistics/report" ?> class="task-large">Generate Reports
                <p style="text-align:center; color:grey; font-weight:normal ; font-size:14px">
                <b>Generate appointments reports!!</b><br><br>
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