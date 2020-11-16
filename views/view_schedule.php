<!DOCTYPE html>
<html>
    <head>
    <title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
    </head>
   
    <body style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
    <div class ="container">
    <div class=container-t>

    <div class="topic">View Doctor Schedule</div>
    
            <div class = "search-bar">
                <form action="#"> 
                    <div class="site-search"> 
                    <input type="text" placeholder="Doctor Name" name="d_id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                    <input type="text" placeholder="Specialization Name " name="s_id"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                    <button type = "submit">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                       
                </form> 
                </div>      <!--search-bar-->  
                <table class ="view-table">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><a href=<?php echo Router::site_url().'/schedules/update' ?> style="color:black"><button type = "t-btn">Update</a></td>
                    <td><a href=<?php echo Router::site_url().'/schedules/delete' ?> style="color:black"><button type = "t-btn">Delete</a></td>
                </tbody>
            </table>
            
        </div>      <!--container-2-->
        </div>      <!--container-->
    </body>
    
</html>
