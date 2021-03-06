<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js'?>"></script>
        <script src='/project-cs02/files/js/autofill_spec.js' type="text/javascript"></script>
    </head>

    <body>
        <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>
             
            <form class="form" method="get" action=<?php echo Router::site_url().'/Appointment/select_doctor' ?>>
                <div class="form-container1">
                    <div id="form-img"> 
                    </div>
                    <div id="form-1">
                    <div class="topic">Search Doctor</div>
                    <div class="label">
                        <label for="doctor">Doctor Name</label>
                    </div>
                    <div class="input">
                        <input type="text" name="doctor">
                    </div>
                    <div class="label">
                        <label for="specialization">Specialization</label>
                    </div>
                    <div class="input">
                        <select name="specialization" id="search_spec" required>
                            <option value="Any">Any Specialization</option>
                        </select>
                    </div>
                    <input type="submit" value="Search" class="btn">
                    <div id="form-message"></div> 
                    </div>
                </div>
                
            </form> 
            <div class="footer">All rights are reserved</div>
          </div>
    </body>
</html>
