<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style1.css'?>>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <script src="https://kit.fontawesome.com/1b83d32a6d.js" crossorigin="anonymous"></script>
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
            <i class="fas fa-id-badge"></i>
                <a href=<?php echo Router::site_url() . '/user/dashboard' ?>>Dashboard</a>
            </div>
        </div>
            
        <div class="dropdown">
            <div style="margin: var(--large-margin);"><i class="fas fa-vials"></i>  Patient Lab Test</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url().'/patientTest/create_test' ?>> Create Test</a>
                <a href=<?php echo Router::site_url().'/patientTest/view' ?>> View Test</a>   
            </div>
        </div>
                    
        <div class="dropdown">
            <div style="margin: var(--large-margin);"><i class="fas fa-flask"></i>  Lab Test</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url()."/labtest/add" ?>>Add Test</a>
                <a href=<?php echo Router::site_url()."/labtest/view" ?>>View Test</a>
            </div>
        </div>
        <div class="dropdown">
            <div style="margin: var(--large-margin);"><i class="far fa-chart-bar"></i>  Generate report</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url()."/statistics/report" ?>>Lab Reports Overview</a>  
            </div>
        </div>
                
    </div>