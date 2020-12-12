<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <script rel="text/javascript" src="/project-cs02/files/js/schedule.js"></script>
    </head>

    <body>
        <div class="container-2">
            <div class="nav">
                <a href=<?php echo Router::site_url().'/user/logout' ?> style="float:right">Log Out</a>
                <a href=<?php echo Router::site_url().'/user/dashboard'?> style="float:right">Dashboard</a>
                <button id="nav-icon">   
                </button>
                <button id="close-icon">
                </button>
            </div>
              
            <?php include 'Supervisor_sidebar.php';?>
             
            <form class="form">
                <div class="form-container">
                    <div id="form-img"> 
                    </div>
                    <div id="form-1">
                        <div class="label">
                            <label for="doc_id">Doctor Id</label>
                        </div>
                        <div class="input">
                            <input type="text" name="doc_id" required>
                        </div>
                        <div class="label">
                            <label for="doc_fname">First name</label>
                        </div>
                        <div class="input">
                            <input type="text" name="doc_fname" required>
                        </div>
                        <div class="label">
                            <label for="doc_lname">Last name</label>
                        </div>
                        <div class="input">
                            <input type="text" name="doc_lname" required>
                        </div>

                    </div>
                    <div id="form-2">
                        <div class="label">
                            <label for="sche_id">Schedule Id</label>
                        </div>
                        <div class="input">
                            <input type="text" name="sche_id" required>
                        </div>
                        <div class="label">
                            <label for="sche_date">Schedule Date</label>
                        </div>
                        <div class="input">
                            <input type="date" name="sche_date" required>
                        </div>
                        <div class="label">
                            <label for="sche_time">Schedule Time</label>
                        </div>
                        <div class="input">
                            <input type="time" name="sche_time" required>
                        </div>
                        <input type="submit" name="Add" value="Add" class="btn">
                         <div id="form-message"></div>

                    </div>
                </div>
            </form>
            <div class="footer">All rights are reserved</div>
          </div>
    </body>
</html>
