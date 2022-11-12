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
$query="select * from registration";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
if($total!=0)
{
	?>
	<center>
	<div id="PrintableContents">
	<header>
	<h1><strong>my project</strong></h1><br><br>
	</header><hr><br><br>
	<h2><strong>Registration Details</strong></h2>	
	<table width="800" border="1" align="center">
<tr align="center">
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Address</th>
<th>Mobile</th>
<th>Password</th>
<th>Operations</th>
</tr>
	<?php
	while($result=mysqli_fetch_assoc($data))
	{
	
		echo "<tr>
				<td>".$result['First_name']."</td>
				<td>".$result['Last_name']."</td>
				<td>".$result['Email']."</td>
				<td>".$result['Address']."</td>
				<td>".$result['Mobile']."</td>
				<td>".$result['Password']."</td>
				<td><a href='delete.php?t1=$result[Email]' onclick='return checkdelete()'>Delete</a></td>
				</tr>";
	}
}
?>
</table>
<script>

function checkdelete()
{
	return confirm('you want to delete ??');
}
</script>
<br><br>
<center>

</center>
<br>	


</footer>
	