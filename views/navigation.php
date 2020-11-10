<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: 'Montserrat', sans-serif;
}

.navbar {
  overflow: hidden;
  background-color:  #ff0055;;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
  padding: 14px 16px;
}

.navbar a.active {
  background-color: #333;
  color: white;
  padding: 14px 16px;
}

.navbar >p{
  display: block;
  color: white;
  text-align: center;
  font-size:15px;
  font-weight:bolder;
  font-family: 'Chilanka',cursive;

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
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .close_btn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidebar{padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>

<div class="navbar">
  
<a href="javascript:void(0)" onclick="openSidebar()" ><img src=<?php echo Router::base_url().'../files/icons/nav.png'?> style="width:30px; height:15px ;margin-top=0px"></a>
  <a href="javascript:void(0)" onclick="Back()">Go Back</a>
  <a href="#" class="active">Home</a>
  <p class="title">MedCaid Hospital</p>
  <!--a href="javascript:void(0);" class="icon" onclick="myFunction()"-->
    <!--i class="fa fa-bars"></i-->
  </a>
</div>

<div id="sidebar" class="sidebar">
  <a href="javascript:void(0)" class="close_btn" onclick="closeSidebar()">&times;</a>
  <a href="#">Home</a>
  <a href="#">Dashboard</a>
  <a href="#">Settings</a>
  <a href="#">Log Out</a>
  <a href="javascript:void(0) " onclick="Back()">Go Back</a>
</div>

<script>
function openSidebar() {
  document.getElementById("sidebar").style.width = "250px";
}

function closeSidebar() {
  document.getElementById("sidebar").style.width = "0";
}

function Back() {
  window.history.back();
}
</script>

</body>
</html>
