<?php
$conec=mysqli_connect('localhost','root','','ra2');
$qu="delete from ticket where ticket_id='".$_POST['tid']."';";
if($conec->query($qu)===TRUE)
	echo " Data Deleted";
else
	echo $conec->error;
setcookie("tid",$_POST['tid'],time()+(3600*30),"/");
header('location:/dbms/canct.php');
?>
