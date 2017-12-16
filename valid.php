<?php
$use=$_GET['user'];
$pass=$_GET['pass'];
$con=mysqli_connect(´localhost´,´root´,´´,´cse2004´);
echo"25";
$qu="select * from passenger where Id='".$use."' and pass='".$pass."';";
$res=mysqli_query($con,$qu);
if(mysqli_num_rows($res))
{
	echo¨You appear to be a valid user¨;
}
else 
{
	echo¨Please Sign UP¨;
}
?>
