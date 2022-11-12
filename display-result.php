<?php
session_start();
?>
<style>

		*
		{
			margin:0px;
			padding:0px;
		}
		
		body{
			
		background-color:white;
		}
		footer
		{
			background-color:gold;
		}
header
{
	background-color:black;
	color:white;
}
		
			
			h1
			{
				color:white;
			}
			
			h2
			{
				color:blue;
				
			}
			
			button
			{
				padding:10px;
				border-radius:10px;
				background-color:darkorange;
				font-size:25;
				border:2px solid green;
				cursor: pointer;
			}
			button:hover
			{
				pointer:curser;
				background-color:green;
				border:2px solid orange;
				color:white;
			}
</style>
<?php

$conn=mysqli_connect("localhost","root","","project");
$user=$_SESSION['user_name'];
$password=$_SESSION['password'];
$query="select * from  result where username='$user'";
$data=mysqli_query($conn,$query);
$r=mysqli_fetch_assoc($data);
?>

	<center>
	<div id="PrintableContents">
	<header>
	<h1><strong>my project</strong></h1><br><br>
	</header><hr><br><br>
	<h2><strong>Result Details</strong></h2>	
	<table class="table"  width="800" border="1" >
        <tr align="center">
            <td>Name</td> <td><?php echo $r['username'];?></td>
        </tr>
        <tr align="center">
            <td>SUBJECT</td> <td>MARKS</td>
        </tr>
        <tr align="center">
            <td>Maths</td> <td><?php echo $r['maths'];?></td>
        </tr>
        <tr align="center">
            <td>Physic</td> <td><?php echo $r['physic'];?></td>
        </tr>
        
        <tr align="center">
            <td>Hindi</td> <td><?php echo $r['hindi'];?></td>
        </tr>
        <tr align="center">
            <td>English</td> <td><?php echo $r['english'];?></td>
        </tr>
        
        <tr align="center">
            <td>Total</td> <td><?php echo $r['total'];?></td>
        </tr>
        
        </table> 
<br><br>
	