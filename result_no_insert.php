
<?php
$con=mysqli_connect("localhost","root","","project")or die (mysqli_error());
  
$Name=$_POST["name"];
$maths=$_POST["maths"];
$physic=$_POST["physic"];
$hindi=$_POST["hindi"];
$english=$_POST["english"];
$total= $maths + $physic + $hindi+ $english;
$query=  "insert into result (`username`,`maths`,`physic`,`hindi`,`english`,`total`) values('".$Name."','".$maths."','".$physic."','".$hindi."','".$english."','".$total."')"; 
//echo ("insert into homeimg (`name`,`image`,`desc`,`rs`) values('".$Name."','".$file_name."','".$desc."','".$rs."')");
$q=mysqli_query($con,$query);
if($q)
{

//echo "data_insert";	
	header("location:add_new_product.php");
}
else
{
	echo "error";
//header("location:admin_all_product_show.php");
}

 
?>
