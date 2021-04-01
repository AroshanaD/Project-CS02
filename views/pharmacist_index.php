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
                <div id="welcome-txt">Welcome, <?php echo $_SESSION['f_name']?></div>
              </div>
              <div id="dashboard-title">Dashboard</div>
            </div>
            <div class="databoard-1">
                <div id="databord-title">Medicine Stock</div>
                <div id="databord-value">7600</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-capsules fa-5x"></i></div>
            </div>
            <div class="databoard-2">
                <div id="databord-title">Vendors</div>
                <div id="databord-value">12</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-user-md fa-5x"></i></div>
            </div>
            
            <div class="databoard-3">
                <div id="databord-title">Today Sales</div>
                <div id="databord-value">12</div>
                <div style="float:right; margin-right:60px; color: #5e60ce"><i class="fas fa-user-tie fa-5x"></i></div>
            </div>
            <div class="taskboard">
              <a href=<?php echo Router::site_url()."/inventory/view" ?> class="task-large">Manage Inventory
              <p style="text-align:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can manage<br>
                  inventory details<br>
                  of medicines!!
                </p>
                </a>
              <a href=<?php echo Router::site_url()."/inventory/view" ?> class="task-large">Manage Vendors
              <p style="text-align:center; color:grey; font-weight:normal ; font-size:14px">
                   Here you can manage<br>
                  vendor details<br>
                  of vedndors!!
                </p>
                </a>
              <a href=<?php echo Router::site_url()."/Inventory/create_bill"?> class="task-large">Create Bills
              <p style="text-align:center; color:grey; font-weight:normal ; font-size:14px">
                  Here you can create <br>
                  pharmacy bills<br>
                </p>
                </a>
            </div>
            <div class="footer">@ All rights are reserved</div> 
          <div>
         
    </body>

</html>