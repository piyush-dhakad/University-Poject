        
        <?php
$con=mysqli_connect("localhost","root","","project")or die(mysqli_error());

$query=mysqli_query($con,"select * from registration");

?>
<div class="container" style="margin-top:30px">
    <div class="row">
    
        
    
<table class="table" align="center" style="background-color: #fff;" border="2px solid red">
<tr  align="center">
<th>No.</th>
<th>Name</th>
<th>Last name</th>
<th>Email</th>
<th>Address</th>
    <th>Choice</th>

</tr>
<?php 
$i=1;
while($S=mysqli_fetch_assoc($query))
{
	
 ?>
<tr align="center">
<td><?php echo $i ; ?></td>
<td><?php echo $S["First_name"]; ?></td>
<td><?php echo $S["Last_name"]; ?></td>
<td><?php echo $S["Email"]; ?></td>
<td><?php echo $S["Address"]; ?></td>
<td>
<a href="delete_product.php?id=<?php echo $S["id"]; ?>" onclick="return confirm('Are you want to Delete');">Delete</a>
<a href="insert_user_number.php?id=<?php echo $S["id"]; ?>" >Insert result</a>
 </td>
    
</tr>



<?php
$i++;
}
?>
</table>
<br>


        
