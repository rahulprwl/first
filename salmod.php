<?php
$conec=mysqli_connect('localhost','root','','ra2');
$qu="update staff set salary=".$_POST['sal']." where Staff_ID='".$_POST['sid']."';";
if($conec->query($qu)===TRUE)
	echo " Data Deleted";
else
	echo $conec->error;
setcookie("sid",$_POST['sid'],time()+(3600*30),"/");
setcookie("sal",$_POST['sal'],time()+(3600*30),"/");
header('location:/dbms/salup.php');
?>
