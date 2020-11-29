<!DOCTYPE html>
<html>
    <head>
        <title><?php $url = explode('/',rtrim($_SERVER['REQUEST_URI'],'/'));
                if($url[3]&&$url[4]){echo ucwords($url[3]).'|'.ucwords($url[4]);}; ?></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href=<?php echo Router::base_url().'/files/style.css'?>>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    </head>
    <body>
    <style>
        .navbar {
            overflow: hidden;
            background-color:  #023047;
        }
        
        .navbar a {
            float: left;
            display: block;
            color: #fb8500;
            text-align: center;
            padding: 12px 16px;
            text-decoration: none;
            font-size: 23px;
        }
        
        .navbar a:hover {
            background-color: #ddd;
            color: black;
            padding: 14px 16px;
        }
        
        .navbar a.active {
            background-color:#f5f3f4;
            color: #fb8500;
            padding: 14px 16px;
        }
        
        .navbar >p{
            display: block;
            color: #fb8500;
            text-align: center;
            font-weight:bolder;
            font-family:'Lato',sans-serif;
        
        }
        
        @media screen and (max-width: 600px) {
            .navbar a:not(:first-child) {display: none;}
        }
        
        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 20px;
        }
        
        .sidebar a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 16px;
            color: white;
            display: block;
            transition: 0.3s;
        }
        
        .sidebar a:hover {
            color: black;
            background-color: white;
        }
        
        .sidebar .close_btn {
            position: absolute;
            top: 0;
            left: auto;
            font-size: 36px;
        }
        
        @media screen and (max-height: 450px) {
            .sidebar{padding-top: 15px;}
            .sidebar a {font-size: 14px;}
        }
    </style>

    <div class="navbar">
  
        <a href="javascript:void(0)" onclick="openSidebar()" ><img src=<?php echo Router::base_url().'../files/icons/nav.png'?> style="width:30px; height:15px ;margin-top=0px"></a>
        <a href=<?php echo Router::site_url().'/main' ?> class="active">Home</a>
        <a href="javascript:void(0)" onclick="Back()">Back</a>
        <p style="font-size:21px; color:#fb8500; margin-bottom:10px">MedCaid Hospital</p>
  <!--a href="javascript:void(0);" class="icon" onclick="myFunction()"-->
    <!--i class="fa fa-bars"></i-->
        </a>
    </div>

    <div id="sidebar" class="sidebar">
        <a href="javascript:void(0)" style="font-size:36px; text-align:right; padding-right: 50px" onclick="closeSidebar()">&times;</a>
        <a href=<?php echo Router::site_url().'/main' ?>>Home</a>
        <a href=<?php echo Router::site_url().'/user/dashboard' ?>>Dashboard</a>
        <a href=<?php echo Router::site_url().'/user/change_password' ?>>Change Password</a>
        <a href=<?php echo Router::site_url().'/user/change_details' ?>>Change Profile</a>
        <a href=<?php echo Router::site_url().'/user/logout' ?>>Log Out</a>
        <a href="javascript:void(0) " onclick="Back()">Back</a>
    </div>

    <script>
    function openSidebar() {
    document.getElementById("sidebar").style.width = "200px";
    }

    function closeSidebar() {
    document.getElementById("sidebar").style.width = "0";
    }

    function Back() {
    window.history.back();
    }
    </script>