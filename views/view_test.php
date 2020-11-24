
<script src=<?php echo Router::base_url().'/files/js/labtest.js'?> type="text/javascript"></script>

    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
        <div class ="container">
            <div class = "container-t">
                <div class="topic">View Lab Tests</div>
                <div class = "search-bar">
                    <div class="site-search"> 
                        <input type="text" id="id" placeholder="Test Id" name="id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                        <input type="text" id="name" placeholder="Test Name" name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                        <button id="search-btn" type ="submit" name="search" style="font-size:18px">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </div>      <!--search-bar-->  
                <div class="table">
                    <table>
                    
                    </table>
                </div>
            </div> <!--container-2-->
        </div><!--container-->
        

    </body>
</html>
