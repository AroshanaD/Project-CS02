<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <script src=<?php echo Router::base_url().'/files/js/patient_test.js'?> type="text/javascript"></script>
    </head>

    <body>
    <div class="container-2">
        <div class="nav">
            <?php include 'header.php'; ?>
        </div>

        <?php $path=$_SESSION['user_cat']."_sidebar.php"; include $path; ?>

        <form class="form">

                <div class = "search-bar">
                    <div class="site-search"> 
                        <input type="text" placeholder="Test Id" name="id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                        <input type="text" placeholder="Test Name" name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                        <input type="Date" placeholder="Test Date" name="date"> 
                    </div> 
                    <div class="site-search"> 
                        <button type = "submit" style="font-size:18px">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </div>      <!--search-bar--> 

                <div class="table"> 
                    <table>
                    
                    </table>

                    <div>
                        <input type="submit" value="Next" class="next-btn">
                        <input type="submit" value="Previous" class="next-btn">
                    </div>
                </div>

            </form>
            
            <div class="footer">All rights are reserved</div>
        </div>      <!--container-2-->
    </body>
</html>
