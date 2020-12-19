<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
    </head>

    <body>
    <div class="nav"> 
                <div class="dropdown" style="float:right;margin-right:69px; margin-top:15px">
                    <img src=<?php echo Router::base_url().'/files/icons/profile.png'?> style="width:40px; height: 40px; ">
                    <div class="dropdown-content" style="position:fixed; min-width:fixed;">
                        <a href='<?php echo Router::site_url()."/user/change_details"?>' style="margin-top:0px; margin-bottom:0px ;min-width:fixed;"><img src=<?php echo Router::base_url().'/files/icons/user.png'?> style="width:20px; height: 20px; "> Profile</a></br>
                        <a href='<?php echo Router::site_url().'/user/logout'?>' style="margin-top:0px; margin-bottom:0px;min-width:fixed;"><img src=<?php echo Router::base_url().'/files/icons/logout.png'?> style="width:20px; height: 20px; "> Log out</a> 
                    </div>
                </div>
                <button id="nav-icon">   
                </button>
                <button id="close-icon">
                </button>
            </div>


