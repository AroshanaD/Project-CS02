<!DOCTYPE html>
<html>
    <head>
    <title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src=<?php echo Router::base_url().'/files/js/view_staff.js'?> type="text/javascript"></script>
        <script src=<?php echo Router::base_url().'/files/js/search.js'?> type="text/javascript"></script>
    </head>
   
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);">
    
    <div class ="container">
        <div class=container-t>
            <div class="topic">View staff</div>
            <select class="search-bar" id="staff" name="staff" required>
                <option value="" selected="true" disabled>Select Category</option>
                <option value="pharmacist">Pharmacist</option>
                <option value="lab_technician ">Lab technician</option>
                <option value="receptionist">Receptionist</option>
                <option value="supervisor">Supervisor</option>
            </select>
            <form method="get" class = "search-bar">
                <div class="site-search"> 
                    <input id="id" type="text" placeholder=" Id" name="id"> 
                </div>      <!--site-search-->  <!--text-->
                <div class="site-search"> 
                    <input id="name" type="text" placeholder=" Name " name="name"> 
                </div>      <!--site-search-->  <!--date-->
                <div class="site-search"> 
                    <button id="search-btn" name="search" type = "submit">Search</button> 
                </div>     <!--site-search-->  <!--btn-->  
            </form>    <!--search-bar-->  
            <table class ="view-table">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact</th>
                    <th>Email</th>
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
