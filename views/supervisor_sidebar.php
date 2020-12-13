<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
</head>

<script>
    $(document).ready(function() {
        $("#nav-icon").click(function() {
            $(".container-1").css("grid-template-areas", "'nav' 'sidebar' 'sidebar' 'footer'");
            $(".sidebar").css("display", "block");
            $(".dashboard").css("display", "none");
            $(".taskboard").css("display", "none");
            $("#nav-icon").css("display", "none");
            $("#close-icon").css("display", "block");
        })

        $("#close-icon").click(function() {
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
            <div style="margin: var(--large-margin);"><img src='home.png' style="width:20px; height: 20px; "> Manage staff</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/staff/add" ?>>Add staff</a>
                <a href=<?php echo Router::site_url() . "/staff/view" ?>>View staff</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><img src='user.png' style="width:20px; height: 20px; "> Manage Doctors</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/doctors/add" ?>>Add doctors</a>
                <a href=<?php echo Router::site_url() . "/doctors/view" ?>>View doctors</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><img src='lock.png' style="width:20px; height: 20px; "> Manage inventory</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/inventory/add?add=medicine" ?>>Add medicine</a>
                <a href=<?php echo Router::site_url() . "/inventory/view" ?>>View medicine</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><img src='logout.png' style="width:20px; height: 20px; "> Manage vendors</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/inventory/add?add=vendor" ?>>Add vendors</a>
                <a href=<?php echo Router::site_url() . "/inventory/view" ?>>View vendors</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><img src='logout.png' style="width:20px; height: 20px; "> Manage Schedules</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/schedules/add" ?>>Add schedules</a>
                <a href=<?php echo Router::site_url() . "/schedules/view" ?>>view schedules</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><img src='logout.png' style="width:20px; height: 20px; "> View Statistics</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/statistics/weekly" ?>>Weekly</a>
                <a href=<?php echo Router::site_url() . "/statistics/monthly" ?>>Monthly</a>
                <a href=<?php echo Router::site_url() . "/statistics/yearly" ?>>Yearly</a>
                <a href=<?php echo Router::site_url() . "/statistics/report" ?>>Generate reports</a>
            </div>
        </div>

    </div>