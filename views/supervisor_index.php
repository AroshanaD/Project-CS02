<!DOCTYPE html>

<head>
  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container-1">
    <div class="nav">
      <?php include 'header.php'; ?>
    </div>

    <?php $path = $_SESSION['user_cat'] . "_sidebar.php";
    include $path; ?>

    <div class="dashboard">
      <div id="welcome-board">
        <div id="welcome-txt">Welcome, <?php echo $_SESSION['f_name']?></div>
      </div>
      <div id="dashboard-title">Dashboard</div>
    </div>
    <div class="databoard-1">
      <div id="databord-title">No.of Appointments</div><br>
      <div id="databord-value" style="font-size:30px;font-weight:bold"> <?php if ($_SESSION['user_stat']) {
                                                                          echo $_SESSION['user_stat']['appointments'];
                                                                        } else {
                                                                          echo "---";
                                                                        } ?></div>
      <div style="float:right; margin-right:60px; color: #5e60ce"><i class="far fa-calendar-check fa-5x "></i></div>
    </div>
    <div class="databoard-2">
      <div id="databord-title">No.of Sessions</div><br>
      <div id="databord-value" style="font-size:30px;font-weight:bold"><?php if ($_SESSION['user_stat']) {
                                                                          echo $_SESSION['user_stat']['sessions'];
                                                                        } else {
                                                                          echo "---";
                                                                        } ?></div>
      <div style="float:right; margin-right:60px; color: #5e60ce"><i class="far fa-calendar-check fa-5x "></i></div>
    </div>

    <div class="databoard-3">
      <div id="databord-title">No.of Doctors</div>
      <div id="databord-value" style="font-size:30px;font-weight:bold ;margin-top:20px"><?php if ($_SESSION['user_stat']) {
                                                                          echo $_SESSION['user_stat']['doctors'];
                                                                        } else {
                                                                          echo "---";
                                                                        } ?></div>
      <div style="float:right; margin-right:60px; color: #5e60ce;margin-top:20px"><i class="fas fa-user-md fa-5x"></i></div>
    </div>
    <div class="taskboard">
      <a href=<?php echo Router::site_url() . "/staff/view" ?> class="task">Manage Staff

      </a>
      <a href=<?php echo Router::site_url() . "/doctors/view" ?> class="task">Manage Doctors

      </a>
      <a href=<?php echo Router::site_url() . "/inventory/view" ?> class="task">Manage Inventory

      </a>
      <a href=<?php echo Router::site_url() . "/inventory/view" ?> class="task">Manage Vendors

      </a>
      <a href=<?php echo Router::site_url() . "/schedules/view" ?> class="task">Manage Schedules

      </a>
      <a href=<?php echo Router::site_url() . "/statistics/report" ?> class="task">Generate Reports

      </a>
    </div>
    <div class="footer">@ All rights are reserved</div>
    <div>

</body>

</html>