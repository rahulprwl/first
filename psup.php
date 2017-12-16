<?php
$conec=mysqli_connect('localhost','root','','ra2');
$pid=rand(100,205);
$qu="insert into passenger values('$pid','".$_POST['fname']."','".$_POST['mname']."','".$_POST['lname']."','".$_POST['dob']."','".$_POST['sex']."',NULL)";
if($conec->query($qu)===TRUE)
	echo " Data inserted";
else
	echo $conec->error;
header('location:/dbms/index.html');
?>
