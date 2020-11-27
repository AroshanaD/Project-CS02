<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src=<?php echo Router::base_url().'/files/js/vendors.js'?> type="text/javascript"></script>
    
    <div style="background-image: linear-gradient(to left,  oldlace, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);background-repeat:no-repeat">    
    <div class ="container">
        <div class = "container-t">
        <div class="topic">Vendors</div>
            <div class = "search-bar"> 
                <div class="site-search"> 
                    <input id="name" type="text" placeholder="Name " name="name"> 
                </div>      <!--site-search-->  <!--date-->
                <div class="site-search"> 
                    <button id="search-btn" type = "submit"  name="search" style="font-size:18px">Search</button> 
                </div>      <!--site-search-->  <!--btn-->  
            </div> <!--search-bar-->  
            <div class="table">
                <table>
                    
                
                </table>
            </div>
        </div>      <!--container-2-->
        </div>      <!--container-->
    </body>
</html>
