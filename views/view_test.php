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
        <div class="topic">View Lab Tests</div>
        <div class = "search-bar">
                
                <form action="#"> 
                    <div class="site-search"> 
                    <input type="text" placeholder="Test Id" name="id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                    <input type="date" placeholder="Test Name" name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                    <button type = "submit">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </form> 
                </div>      <!--search-bar-->  
                
                    <tr>
                        <th>Test ID</th>
                        <th>Test Date</th>
                        <th>Test Category</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><a href=<?php echo Router::site_url().'/labtest/update' ?> style="color:black"><button type = "t-btn">Update</a></td>
                        <td><a href=<?php echo Router::site_url().'/labtest/delete' ?> style="color:black"><button type = "t-btn">Delete</a></td>
                </tr>
                    
                </table>
               
            </div> <!--container-2-->
        </div><!--container-->
        

    </body>
</html>
