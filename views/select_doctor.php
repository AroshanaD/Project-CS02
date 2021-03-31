<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
        <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js'?>"></script>
        <script src=<?php echo Router::base_url().'/files/js/autofill_spec.js'?> type="text/javascript"></script>
        <script src=<?php echo Router::base_url().'/files/js/select_doctor.js'?> type="text/javascript"></script>
    </head>

    <body>
        <div class ="container-5">
            <div class="nav">
                <?php include 'header.php'; ?>
            </div>
                
            <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

            <div>
                <div class="table" >
                    <div class="topic" style="margin:0;width:100%;text-align:center">Select Doctor</div>
                    <table>
                    
                    </table>
                </div><!--container-2-->
                <div style="width:100%;text-align:center">
                    <button class="btn" id="back">Back</button>
                </div>
            </div>
            <div class="footer">All rights are reserved</div>
        </div>
        
    </body>
</html>