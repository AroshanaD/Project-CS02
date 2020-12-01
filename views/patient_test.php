<script src=<?php echo Router::base_url().'/files/js/patient_test.js'?> type="text/javascript"></script>

    <div style="background-color: white, url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
        <div class ="container">
            <div class = "container-t">
                <div class="topic1">View Lab Tests</div>
                <div class = "search-bar">
                    <div class="site-search"> 
                        <input type="text" placeholder="Test Id" name="id"> 
                    </div>      <!--site-search-->  <!--text-->
                    <div class="site-search"> 
                        <input type="text" placeholder="Test Name" name="name"> 
                    </div>      <!--site-search-->  <!--date-->
                    <div class="site-search"> 
                        <input type="Date" placeholder="Test Date" name="date"> 
                    </div> 
                    <div class="site-search"> 
                        <button type = "submit" style="font-size:18px">Search</button> 
                    </div>      <!--site-search-->  <!--btn-->
                </div>      <!--search-bar--> 
                <div class="table"> 
                    <table>
                    
                    </table>
                </div>
            </div> <!--container-2-->
        </div><!--container-->
        <script>

        </script>

    </body>
</html>
