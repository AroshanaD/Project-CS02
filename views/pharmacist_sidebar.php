<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
    </head>

    <script>
        $(document).ready(function(){
            $("#nav-icon").click(function(){
                $(".container-1").css("grid-template-areas", "'nav' 'sidebar' 'sidebar' 'footer'");
                $(".sidebar").css("display", "block");
                $(".dashboard").css("display", "none");
                $(".taskboard").css("display", "none");
                $("#nav-icon").css("display", "none");
                $("#close-icon").css("display", "block");
            })

            $("#close-icon").click(function(){
                console.log("close");
                $(".container-1").css("grid-template-areas", "'nav' 'dashboard' 'taskboard' 'footer'");
                $(".sidebar").css("display", "none");
                $(".dashboard").css("display", "flex");
                $(".taskboard").css("display", "flex");
                $("#nav-icon").css("display", "block");
                $("#close-icon").css("display", "none");
            })
        })
    </script>

    <body>
    <div class="sidebar">
            <div>
                <div style="margin-left: var(--small-margin);"><img src='home.png' style="width:20px; height: 20px; "><a href=<?php echo Router::site_url().'/user/dashboard' ?>>Dashboard</a> </div><br>
                    <div class="dropdown">
                        <div style="margin-left: var(--small-margin);"><img src='home.png' style="width:20px; height: 20px; ">  Manage inventory</div>
                        <div class="dropdown-content">
                            <a href=<?php echo Router::site_url()."/Inventory/add"?>>Add Medicine</a>
                            <a href=<?php echo Router::site_url()."/Inventory/view" ?>>View Medicine</a>   
                        </div><br>
                    </div><br>

                    <div class="dropdown">
                        <div style="margin-left: var(--small-margin);"><img src='home.png' style="width:20px; height: 20px; ">  Manage venodrs</div>
                        <div class="dropdown-content">
                            <a href=<?php echo Router::site_url()."/inventory/add?add=vendor" ?>>Add Vendors</a>
                            <a href=<?php echo Router::site_url()."/inventory/view?view=vendor" ?>>View Vendors</a>  
                        </div><br>
                    </div><br>
                    
                    <div class="dropdown">
                        <div style="margin-left: var(--small-margin);"><img src='user.png' style="width:20px; height: 20px; ">  Bills</div>
                        <div class="dropdown-content">
                            <a href=<?php echo Router::site_url()."/Inventory/create_bill"?>>create bills</a>  
                        </div><br>
                    </div><br>

            </div>
    </div>