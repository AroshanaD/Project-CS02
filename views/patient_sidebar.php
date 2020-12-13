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
            <div class="dropdown">
                <div style="margin: var(--large-margin);">
                    <img src='home.png' style="width:20px; height: 20px; ">
                    <a href=<?php echo Router::site_url() . '/user/dashboard' ?>>Dashboard</a>
                </div>
            </div>
                
            <div class="dropdown">
                <div style="margin: var(--large-margin);"><img src='home.png' style="width:20px; height: 20px; ">  Appointments</div>
                <div class="dropdown-content">
                    <a href=<?php echo Router::site_url().'/appointment/search_doctor'?>>Make Appointment</a>
                    <a href=<?php echo Router::site_url().'/doctor_Schedule/index'?>>Doctor Schedule</a>
                    <a href=<?php echo Router::site_url().'/appointment/view_details'?>>View Appointment</a>   
                </div>
            </div>
                    
            <div class="dropdown">
                <div style="margin: var(--large-margin);"><img src='user.png' style="width:20px; height: 20px; ">  Lab test</div>
                <div class="dropdown-content">
                    <a href=<?php echo Router::site_url().'/appointment/result' ?>>Lab Test Results</a>  
                </div>
            </div>

            
        </div>