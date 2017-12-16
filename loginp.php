<?php
$pame=$_POST['pid'];
$pid=$_POST['pwdlogin'];
$conec=mysqli_connect('localhost','root','','ra2');
$qu="select * from passenger where passener_id='".$pid."' and first_name='".$pame."';";
$re=mysqli_query($conec,$qu);
echo $qu;
//if(mysqli_num_rows($re)>0)
header('location: /dbms/passnew.html');
?>
