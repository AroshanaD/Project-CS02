
    <script src=<?php echo Router::base_url().'/files/js/appointment_view.js'?> type="text/javascript"></script>
    <div style="background-color: white, url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
        <div class ="container">
            <div class = "container-t">
                <div class="topic1">View Appointments</div>
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
                </div> 
                     <!--search-bar--> 

                <div class="table"> 
                    <table class="table">
                    
                    </table>
                </div>    
                
               
            </div> <!--container-2-->
        </div><!--container-->
        <script>
            
        </script>

    </body>
</html>
