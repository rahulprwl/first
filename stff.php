<?php
$qua=$_GET['qua'];
$conec=mysqli_connect("localhost","root","","ra2");
if(strlen($qua)==0)
	$qu="select * from staff";
else
	$qu="select * from station where station_name like '%".$qua."%' ;";
$res=mysqli_query($conec,$qu);
if(mysqli_num_rows($res)==0)
{
	echo "<br/> No Record match the query";
}
else
{
	echo " <table border='0'><th><td class='hed'>Station Name</td><td class='hed'>Station Id</td></th>";
	$i1=1;
	while($re=mysqli_fetch_array($res))
	{
		echo "<tr><td>".$i1++."</td><td>".$re['Station_name']."</td><td>".$re['Station_ID']."</td></tr>";
	}
	echo "</table>";
}
mysqli_close($conec);
?>
