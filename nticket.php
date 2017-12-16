<?php
$conec=mysqli_connect("localhost","root","","ra2");
$q1="select distance from station where Station_ID='".$_POST['sscode']."';";
$res=mysqli_query($conec,$q1);
$r=mysqli_fetch_array($res);
$d1=$r["distance"];
$q1="select distance from station where Station_ID='".$_POST['dscode']."';";
$res=mysqli_query($conec,$q1);
$r=mysqli_fetch_array($res);
$d2=$r["distance"];
$price=abs(($d1-$d2)*5);
$tid=rand(1000,10000);
$qu="insert into ticket values('".$tid."','".$price."','".date('d-m-y')."','".date('d-m-y')."','".$_POST['sscode']."','".$_POST['dscode']."','".$_POST['pid']."');";
echo $qu;
//$res=mysqli_query($conec,$qu);
if($conec->query($qu)===TRUE)
	echo " Data inserted";
else
	echo $conec->error;
setcookie("tid",$tid,time()+(86400*30),"/");
setcookie("price",$price,time()+(86400*30),"/");
header('location: /dbms/newtik.php');
?>
