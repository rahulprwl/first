<html>
<head>
<title>Metro Managment system</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="Container">
	<div id="headingmain">
	<h1>Metro Managment System</h1></div>
  <div id="header_"> 
    <ul class="navi">
      <li><a href="index.html">Home Page</a></li>
      <li><a href="passenger.html">Passenger login</a></li>
      <li><a href="slin.php">Staff Login</a></li>
      <li><a href="#">Photos Gallery</a></li>
      <li><a href="#">Latest Events</a></li>
    </ul>
	</div>
	</div>
	</div>
	</div>
<?php
$conec=mysqli_connect("localhost","root","","ra2");
$que="select * from passenger;";
$res1=mysqli_query($conec,$que);
echo "The passenger List is as follows - ";
echo "<table><tr><td>Name</td><td>DOB</td><td>Passenger id</td></tr>";
while($re=mysqli_fetch_array($res1))
{
	echo "<tr><td>".$re["passenger_dob"]."</td><td>".$re["first_name"]."</td><td>".$re["passener_id"]."</td></tr>";
}
?>
</body>
