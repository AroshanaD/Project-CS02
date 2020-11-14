
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
        <div class ="container">
            <div class = "container-t">
                <div class="topic">View Lab Tests</div>
                <div class = "search-bar">
                    <div class="site-search"> 
                        <input type="text" placeholder="Test Id" name="id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                        <input type="date" placeholder="Test Name" name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                        <div class="site-search"> 
                    <button type = "submit" style="font-size:18px">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </div>      <!--search-bar-->  
                <table class="view-table">
                    <thead>
                        <tr>
                            <th>Test ID</th>
                            <th>Test Date</th>
                            <th>Test Category</th>
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
                    
                
               
            </div> <!--container-2-->
        </div><!--container-->
        

    </body>
</html>
