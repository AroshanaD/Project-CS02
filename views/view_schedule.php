<!DOCTYPE html>
<html>
    <head>
    <title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
    </head>
   
    <body style="background-color: white, url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
    <div class ="container">
        <div class=container-t>
        <div class="topic1">View Doctor Schedule</div>
        <div class = "search-bar">
                    <div class="site-search"> 
                    <input type="text" placeholder="Doctor Name" name="d_id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                    <input type="text" placeholder="Specialization" name="s_id"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                    <button type = "submit">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                        
                </div>      <!--search-bar--> 
                <div class="table"> 
                    <table>
                        <tr class="head_row">
                            <td>No.</td>
                            <td>Id</td>
                            <td>Doctor</td>
                            <td>Date</td>
                            <td>Time</td>
                            <td>Update</td>
                            <td>Delete</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><a href=<?php echo Router::site_url().'/schedules/update' ?> style="color:black"><button type = "t-btn">Update</a></td>
                            <td><a href=<?php echo Router::site_url().'/schedules/delete' ?> style="color:black"><button type = "t-btn">Delete</a></td>
                        </tr>
                    </table>
                </div>
        </div>      <!--container-2-->
    </div>      <!--container-->
</body>
    
</html>
