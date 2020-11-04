<!DOCTYPE html>
<html>
    <head>
        <title>View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
    </head>
    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);">
        
        <div class ="container">
        <div class = "container-t">
        <table class ="reg-table">
        <div class="topic">Search Doctor</div>
            <div class = "search-bar">
            <form action="#"> 
                    <div class="site-search"> 
                    <input type="text" placeholder=" Select Specialization" name="specialization"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                    <input type="text" placeholder=" Doctor " name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                        <select id="day" name="day">
                        <option value="monday">Monday</option>
                        <option value="tuesday">Tuesday</option>
                        <option value="wednesday">Wednesday</option>
                        <option value="thursday">Thursday</option>
                        <option value="friday">Friday</option>
                        <option value="saturday">Saturday</option>
                        <option value="sunday">Sunday</option>
                        </select>
                    </div>      <!--site-search-->
                    <div class="site-search"> 
                    <button type = "submit">GO</button> 
                </div>      <!--site-search-->  <!--btn-->

            </form>
            </div>  <!--search-bar-->
        
                <tr>
                    <th>No.</th>
                    <th>Schedule Id</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Specialization</th>
                    <th>Doctor</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><button type = "t-btn">Update</td>
                    <td><button type = "t-btn">Delete</td>
                </tr>
            </table>
            </div>      <!--container-2-->
        </div>      <!--container-->
    </body>
</html>