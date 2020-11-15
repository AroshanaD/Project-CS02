<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="style.css">
        </head>
        <body>

    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
        <div class ="container">
            <div class = "container-t">
                <div class="topic">View Lab Tests</div>
                <div class = "search-bar">
                    <div class="site-search"> 
                        <input type="text" placeholder="Test Id" name="id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                        <input type="text" placeholder="Test Name" name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                        <div class="site-search"> 
                    <button type = "submit" style="font-size:18px">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </div>      <!--search-bar-->  
                <table class="view-table">
                    <thead>
                        <tr id="test-table">
                            <th>Test ID</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Patient Name</th>
                            <th>Patient Age</th>
                            <th>Contact</th>
                            <th>Cost</th>
                            <th>Availability</th>
                        </tr>
                    </thead>
                    <tbody> 
                        
                    </tbody>
                </table>
                    
                
               
            </div> <!--container-2-->
        </div><!--container-->
        

    </body>
</html>
