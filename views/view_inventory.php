<!DOCTYPE html>
<html>
<title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src=<?php echo Router::base_url().'/files/js/inventory.js'?> type="text/javascript"></script>
    </head>
    
    <body style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">    
    <div class ="container">
        <div class = "container-t">
        <div class="topic">Inventory</div>
            <div class = "search-bar"> 
                <div class="site-search">
                    <input id="id" type="text" placeholder="ID" name="id"> 
                </div>      <!--site-search-->  <!--text-->
                <div class="site-search"> 
                    <input id="name" type="text" placeholder="Name " name="name"> 
                </div>      <!--site-search-->  <!--date-->
                <div class="site-search"> 
                    <button id="search-btn" type = "submit"  name="search" style="font-size:18px">Search</button> 
                </div>      <!--site-search-->  <!--btn-->  
            </div> <!--search-bar-->  
            <table class ="view-table">
                <thead>
                    <tr id="inventory-table">
                        <th>No</th>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Vendor</th>
                        <th>Description</th>
                        <th>Unit Price</th>
                        <th>Quantity</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>      <!--container-2-->
        </div>      <!--container-->
    </body>
</html>
