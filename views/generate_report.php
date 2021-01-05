<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js' ?>"></script>
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
    </head>

    <body>
        <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>
              
            <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>
             
            <form class="form">
                <div class="form-container1">
                    <div id="form-img"> 
                    </div>
                    <div id="form-1">
                        <div class="label">
                            <label for="staff">Report type</label>
                        </div>
                        <div class="input">
                            <select name="category" id="category" required>
                                <option value="" disabled hidden selected> Select Category </option>
                                <option value="pharmacist">weekly report</option>
                                <option value="lab_technician">monthly report</option>
                                <option value="receptionist">yearly report</option>
                            </select>
                        </div>
                        <div class="label">
                            <label for="start_date">Since</label>
                        </div>
                        <div class="input" id="id_f">
                            <input type="date" name="start_date" id="start_date"  required>
                        </div>
                        <div class="label">
                            <label for="last_date">To</label>
                        </div>
                        <div class="input" id="id_f">
                            <input type="date" name="last_date" id="last_date"  required>
                        </div> 
                        <input type="submit" name="Add" value="Generate" class="btn">
                        <div id="form-message"></div> 
                    </div>
                </div>
            </form>
            <div class="footer">All rights are reserved</div>
          </div>
    </body>
</html>
