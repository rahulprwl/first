<?php
$qua=$_GET['qua'];
$conec=mysqli_connect("localhost","root","","ra2");
if(strlen($qua)==0)
	$qu="select * from staff";
else
	$qu="select * from passenger where first_name like '%".$qua."%' or last_name like '%".$qua."%' or middle_name like '%".$qua."%';";
$res=mysqli_query($conec,$qu);
if(mysqli_num_rows($res)==0)
{
	echo "<br/> No Record match the query";
}
else
{
	echo " <table border='0'><th><td class='hed'>First Name</td><td class='hed'>Last name</td><td class='hed'>Passenger id</td></th>";
	$i1=1;
	while($re=mysqli_fetch_array($res))
	{
		echo "<tr><td>".$i1++."</td><td>".$re['first_name']."</td><td>".$re['last_name']."</td><td>".$re['passener_id']."</td></tr>";
	}
	echo "</table>";
}
mysqli_close($conec);
?>
