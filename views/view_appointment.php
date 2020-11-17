<!DOCTYPE html>
<html>
<head>
<title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
        
        
    </head>
    <body>
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
        <div class ="container">
            <div class = "container-t">
                <div class="topic">View Appointments</div>
                <div class = "search-bar">
                <div class="site-search"> 
                        <input type="text" id="id" placeholder="Appointment Id" name="id"> 
                    </div>      <!--site-search-->  <!--id-->
                    <div class="site-search"> 
                        <input type="date/time" id="date" placeholder="Appointment Date" name="date"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                        <button id="search-btn" type ="submit" name="search" style="font-size:18px">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </div>      <!--search-bar-->  
                <table class="table">
                    
                <tr id="test-table">
                            <th>No.</th>
                            <th>Appointment ID</th>
                            <th>Appointment Date</th>
                            <th>Appointment Time</th>
                            <th>Patient Name</th>
                            <th>Patient Age</th>
                            <th>Patient Contact</th>
                            <th>Patient Id</th>
                        </tr>
                    
                </table>
                    
                
               
            </div> <!--container-2-->
        </div><!--container-->
        

    </body>
</html>
