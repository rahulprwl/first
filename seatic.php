<?php
$qua=$_GET['qua'];
$conec=mysqli_connect("localhost","root","","ra2");
if(strlen($qua)==0)
	$qu="select * from staff";
else
	$qu="select * from ticket,passenger where passenger.passener_id=ticket.passenger_id and ticket_id like '%".$qua."%';";
$res=mysqli_query($conec,$qu);
if(mysqli_num_rows($res)==0)
{
	echo "<br/> No Record match the query";
}
else
{
	echo " <table border='0'><th><td class='hed'>First Name</td><td class='hed'>Last name</td><td class='hed'>Passenger id</td><td>Ticket ID</td><td>From station</td><td>To Station</td></th>";
	$i1=1;
	while($re=mysqli_fetch_array($res))
	{
		$qu1="select * from station where station_ID like'%".$re['station_id_from']."%';";
		$red=mysqli_query($conec,$qu1);
		$reda=mysqli_fetch_array($red);
		$qu1="select * from station where station_ID='".$re['station_id_to']."';";
		$redd=mysqli_query($conec,$qu1);
		$redab=mysqli_fetch_array($redd);
		echo "<tr><td>".$i1++."</td><td>".$re['first_name']."</td><td>".$re['last_name']."</td><td>".$re['passener_id']."</td><td>".$re['ticket_id']."</td><td>".$reda['Station_name']."</td><td>".$redab['Station_name']."</td></tr>";
	}
	echo "</table>";
}
mysqli_close($conec);
?>
