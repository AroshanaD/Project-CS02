<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=<?php echo Router::base_url() . '/files/style1.css' ?>>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://kit.fontawesome.com/1b83d32a6d.js" crossorigin="anonymous"></script>
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
                <i class="fas fa-id-badge"></i>
                <a href=<?php echo Router::site_url() . '/user/dashboard' ?>>Dashboard</a>
            </div>
        </div>
        <div class="dropdown">
            <div style="margin: var(--large-margin);"><i class="fas fa-users"></i> Manage staff</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/staff/add" ?>>Add staff</a>
                <a href=<?php echo Router::site_url() . "/staff/view" ?>>View staff</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><i class="fas fa-user-md"></i> Manage Doctors</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/doctors/add" ?>>Add doctors</a>
                <a href=<?php echo Router::site_url() . "/doctors/view" ?>>View doctors</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><i class="fas fa-dolly-flatbed"></i> Manage inventory</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/inventory/add_grn" ?>>Add GRN</a>
                <a href=<?php echo Router::site_url() . "/inventory/view_stock" ?>>View medicine</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><i class="fas fa-user-tie"></i> Manage vendors</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/inventory/add_vendor" ?>>Add vendors</a>
                <a href=<?php echo Router::site_url() . "/inventory/view_vendor" ?>>View vendors</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><i class="fas fa-calendar-alt"></i> Manage Schedules</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/doctors/view" ?>>Add schedules</a>
                <a href=<?php echo Router::site_url() . "/schedules/view" ?>>view schedules</a>
            </div>
        </div>

        <div class="dropdown">
            <div style="margin: var(--large-margin);"><i class="far fa-chart-bar"></i> View Statistics</div>
            <div class="dropdown-content">
                <a href=<?php echo Router::site_url() . "/statistics/weekly" ?>>Weekly</a>
                <a href=<?php echo Router::site_url() . "/statistics/monthly" ?>>Monthly</a>
                <a href=<?php echo Router::site_url() . "/statistics/yearly" ?>>Yearly</a>
                <a href=<?php echo Router::site_url() . "/statistics/report" ?>>Generate reports</a>
            </div>
        </div>

    </div>