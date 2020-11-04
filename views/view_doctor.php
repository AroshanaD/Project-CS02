<!DOCTYPE html>
<html>
<head>
    <title>View</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src=<?php echo Router::base_url().'/files/js/autofill_spec.js'?> type="text/javascript"></script>
    </head>

    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);">
    <div class ="container">
        <div class = "container-t">
        <table class ="reg-table">
        <div class="topic">View Doctor</div>
            <div class = "search-bar">
                
                <form action="#"> 
                    <div class="site-search"> 
                        <select name="specialization" id="search_spec" required>
                            <option value="" disabled selected hidden>Select Specialization</option>
                        </select>
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                    <input type="text" placeholder=" Doctor " name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                    <input type="date" placeholder=" Select Date" name="date"> 
                    </div>      <!--site-search-->
                    <div class="site-search"> 
                    <button type = "submit">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </form> 
            </div>      <!--search-bar-->  
                
                <tr>
                    <th>No.</th>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Charges</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Contact</th>
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
                    <td></td>
                    <td></td>
                    <td><a href=<?php echo Router::site_url().'/doctors/update' ?> style="color:black"><button type = "t-btn">Update</a></td>
                    <td><a href=<?php echo Router::site_url().'/doctors/delete' ?> style="color:black"><button type = "t-btn">Delete</a></td>
                </tr>
                    
                </table>
        </div>      <!--container-2-->
        </div>      <!--container-->
    </body>
</html>