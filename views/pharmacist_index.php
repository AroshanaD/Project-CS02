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
                <div id="databord-title">Medicines</div>
                <div id="databord-value">76</div>
                <div><img src=<?php echo Router::base_url().'/files/icons/medicine.png'?> style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            <div class="databoard-2">
                <div id="databord-title">Doctors</div>
                <div id="databord-value">128</div>
                <div><img src=<?php echo Router::base_url().'/files/icons/doctor.png'?> style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            
            <div class="databoard-3">
                <div id="databord-title">Vendors</div>
                <div id="databord-value">30</div>
                <div><img src=<?php echo Router::base_url().'/files/icons/vendor.png'?> style="float:right; width: 80px; height: 70px; margin-right: 60px;"></div>
            </div>
            <div class="taskboard" style="background-color: #c7c7c7;">
              <a href=<?php echo Router::site_url()."/inventory/view" ?> class="task-large">Manage Inventory</a>
              <a href=<?php echo Router::site_url()."/inventory/view" ?> class="task-large">Manage Vendors</a>
              <a href=<?php echo Router::site_url()."/Inventory/create_bill"?> class="task-large">Create bills</a>
            </div>
            <div class="footer">@ All rights are reserved</div> 
          <div>
         
    </body>

</html>