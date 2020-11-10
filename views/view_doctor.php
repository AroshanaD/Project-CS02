<!DOCTYPE html>
<html>
<head>
    <title>View</title>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src=<?php echo Router::base_url().'/files/js/autofill_spec.js'?> type="text/javascript"></script>
        <script src=<?php echo Router::base_url().'/files/js/doctors.js'?> type="text/javascript"></script>
    </head>

    <body style="background-image: linear-gradient(to left,  #fec007de, rgba(255, 255, 255, 0)), url(<?php echo Router::base_url().'/files/icons/schedule_picture.png'?>);">
    <?php include 'navigation.php';?>
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
            </div>      <!--search-bar-->  
            <table class="view-table">
                <thead>
                    <tr id="doctor-table">
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
                </thead>
                <tbody>

                </tbody>
                </table>
        </div>      <!--container-2-->
        </div>      <!--container-->
    </body>
</html>