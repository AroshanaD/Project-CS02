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
                        <div style="margin-left: var(--small-margin);"><img src='home.png' style="width:20px; height: 20px; ">  Patient lab test</div>
                        <div class="dropdown-content">
                                <a href=<?php echo Router::site_url().'/patientTest/create_test' ?>> Create Test</a>
                                <a href=<?php echo Router::site_url().'/patientTest/view' ?>> View Test</a>   
                        </div><br>
                    </div><br>
                    
                    <div class="dropdown">
                        <div style="margin-left: var(--small-margin);"><img src='user.png' style="width:20px; height: 20px; ">  Lab test</div>
                        <div class="dropdown-content">
                            <a href=<?php echo Router::site_url()."/labtest/add" ?>>Add Test</a>
                            <a href=<?php echo Router::site_url()."/labtest/view" ?>>View Test</a>
                        </div><br>
                    </div><br>

                </div>
            </div>