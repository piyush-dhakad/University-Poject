<form method=post action="">
.net<input type="text"  class="form-control py-2" name="t1"><br>
cgm<input type="text"  class="form-control py-2" name="t2"><br>
dmw<input type="text"  class="form-control py-2" name="t3"><br>
project<input type="text" " class="form-control py-2" name="t4"><br>
result<input type="text"  class="form-control py-2" name="t5"><br>
<input type="submit" value="submit" class="form-control py-2" name="submit">
</form>

<?php
$con=mysqli_connect("localhost","root","","project");
$t1=$_POST["t1"];
$t2=$_POST["t2"];
$t3=$_POST["t3"];
$t4=$_POST["t4"];
$t5=$_POST["t5"];

$que="insert into result(`net`,`cgm`,`dmw`,`project`,`result`) values('".$t1."','".$t2."','".$t3."','".$t4."','".$t5."')";
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