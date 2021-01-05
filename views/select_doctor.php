<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
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
                    <table>
                    
                    </table>
                </div><!--container-2-->
            </div>
            <div class="footer">All rights are reserved</div>
        </div>
        
    </body>
</html>