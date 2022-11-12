<?php
$conn=mysqli_connect("localhost","root","","project");
$t1=$_GET['t1'];
$query="delete from registration  where Email='$t1'";
$data=mysqli_query($conn,$query);
	if($data)
	{
		header('location:display.php');
	}
	else 
	{
		echo "<font color=blue>data could not deleted!!!";
	}
?>