
    <script src=<?php echo Router::base_url().'/files/js/staff.js'?> type="text/javascript"></script>
   
    <div style="background-color: white, url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
    <div class ="container">
        <div class=container-t>
            <div class="topic1">View staff</div>
            <div class="search-bar">
            <div clas="site-search">
                <select id="staff" name="staff" required>
                    <option value="" selected="true" disabled>Select Category</option>
                    <option value="pharmacist">Pharmacist</option>
                    <option value="lab_technician ">Lab technician</option>
                    <option value="receptionist">Receptionist</option>
                    <option value="supervisor">Supervisor</option>
                </select>
            </div>
            </div>
            <div class = "search-bar">
                <div class="site-search"> 
                    <input id="id" type="text" placeholder=" Id" name="id"> 
                </div>      <!--site-search-->  <!--text-->
                <div class="site-search"> 
                    <input id="name" type="text" placeholder=" Name " name="name"> 
                </div>      <!--site-search-->  <!--date-->
                <div class="site-search"> 
                    <button id="search-btn" name="search" type = "submit">Search</button>
                </div>     <!--site-search-->  <!--btn-->  
            </div>    <!--search-bar-->  
            <div class="table">
                <table id="tb">
                    
                </table>
            <div>
        </div>      <!--container-2-->
        </div>      <!--container-->
        <script>
            
        </script>
    </body>
    
</html>
