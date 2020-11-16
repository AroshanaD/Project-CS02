
    <script src=<?php echo Router::base_url().'/files/js/autofill_spec.js'?> type="text/javascript"></script>
    <script src=<?php echo Router::base_url().'/files/js/doctors.js'?> type="text/javascript"></script>

    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">
    <div class ="container">
        <div class = "container-t">
            <div class="topic">View Doctor</div>
            <div class="site-search"> 
                <select name="specialization" id="search_spec">
                    <option value="" disabled selected hidden>Select Specialization</option>
                    <option value="" >Any Specialization</option>
                </select>
            </div>  
            <div class = "search-bar">
                <div class="site-search"> 
                    <input type="text" id="id" placeholder="Doctor Id" name="id"> 
                </div> <!--site-search-->  <!--text-->
                <div class="site-search"> 
                    <input type="text" id="name" placeholder="Doctor Name" name="name"> 
                </div>      <!--site-search-->  <!--date--> <!--site-search-->
                <div class="site-search"> 
                    <button id="search-btn" type="submit">Search</button> 
                </div>      <!--site-search-->  <!--btn-->
            </div>   <!--search-bar-->  
            <div class="table">
                <table>
                  
                </table>
            </div><!--container-2-->
        </div>
    </div>
    </div>      <!--container-->
    </body>
</html>