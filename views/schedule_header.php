<!DOCTYPE html>
<html>
    <head>
        <title>Doctor Schedule</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/style.css" ?>>
        <link rel="stylesheet" href=<?php echo Router::base_url()."/files/main.css" ?>>
        <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
        <script src="<?php echo Router::base_url().'/files/js/jquery-3.5.1.js'?>"></script>
    </head>

    <body>
        <div class="main-nav" style="background: #023047">
            <div></div>
            <div></div>
           <div style="color:#fb8500">MedCaid Hospitals</div>
           <div>
                <a href=<?php echo Router::site_url().'/main' ?>><button class="main-button">Home</button></a>
                <a href=<?php echo Router::site_url()."/login" ?>><button class="main-button">Login</button></a>
           </div>
       </div>