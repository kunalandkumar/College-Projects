<html>
<body>
<?php
$con=mysqli_connect("localhost","root","","GIET_UNIVERSITY");
if(mysqli_connect_errno())
{
echo "Failed to connect to Mysql:".mysqli_connect_error();
}
$fn=$_GET['name'];
$roll=$_GET['roll'];
$reg=$_GET['reg'];
$branch=$_GET['branch'];
$placed=$_GET['placed'];
$sql="INSERT INTO placement(name,roll_no,reg_no,branch,placed_at)
VALUES('$fn','$roll','$reg','$branch','$placed')";
if(!mysqli_query($con,$sql))
{
die("Error:".mysqli_error($con));
}
echo"1 record added";
mysqli_close($con);
?>
</body>
</html>