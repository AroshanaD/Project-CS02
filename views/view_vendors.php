<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src=<?php echo Router::base_url().'/files/js/vendors.js'?> type="text/javascript"></script>
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
    
            <div class = "search-bar"> 
                <div class="site-search"> 
                    <input id="name" type="text" placeholder="Name " name="name"> 
                </div>      <!--site-search-->  <!--date-->
                <div class="site-search"> 
                    <button id="search-btn" type = "submit"  name="search" style="font-size:18px">Search</button> 
                </div>      <!--site-search-->  <!--btn-->  
            </div> <!--search-bar-->  

            <div class="table">
                <table>
                    
                
                </table>
            </div>
        </form>
            
            <div class="footer">All rights are reserved</div>
        </div>      <!--container-2-->
    </body>
</html>
