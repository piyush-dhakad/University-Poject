<?php
$con=mysqli_connect("localhost","root","","project");

$t1=$_POST["t1"];
$t2=$_POST["t2"];
$t3=$_POST["t3"];
$t4=$_POST["t4"];

$que="insert into contact1(`name`,`mobile`,`email`,`subject`) values('".$t1."','".$t2."','".$t3."','".$t4."')";
$data=mysqli_query($con,$que);
if($data)
{
	echo"thanks for contact us";
}
else
{
	echo "error";
}
?>