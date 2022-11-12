<?php
$con=mysqli_connect("localhost","root","","project");

$t1=$_POST["t1"];
$t2=$_POST["t2"];
$t3=$_POST["t3"];
$t4=$_POST["t4"];
$t5=$_POST["t5"];
$t6=$_POST["t6"];

$que="insert into registration(`First_name`,`Last_name`,`Email`,`Address`,`Mobile`,`Password`) values('".$t1."','".$t2."','".$t3."','".$t4."','".$t5."','".$t6."')";
$data=mysqli_query($con,$que);
if($data)
{
	echo"data inserted";
}
else
{
	echo "error";
}
?>