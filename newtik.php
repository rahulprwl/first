<!DOCTYPE html>
<html>
<head>
	<style>
.result{
	border:10px dashed rgb(181,25,14);
	position:fixed;
	left:400px;
	bottom:0px;
	font-size:30px;
	padding:30px;
	background-color:#ffff33;
}
</style>
<title>Metro Managment system</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="Container">
	<div id="headingmain">
	<h1>Metro Managment System</h1></div>
  <div id="header_"> 
    <ul class="navi">
      <li><a href="/dbms/index.html">Home Page</a></li>
      <li><a href="/dbms/passenger.html">Passenger login</a></li>
      <li><a href="/dbms/slin.php">Staff Login</a></li>
      <li><a href="#">Photos Gallery</a></li>
      <li><a href="#">Latest Events</a></li>
    </ul>
  </div>
  <div class="result">
  Your Ticket Id is :  <?php
  echo $_COOKIE["tid"];	
  
  echo "<br>Price = ".$_COOKIE["price"];
  ?>
  </div>
