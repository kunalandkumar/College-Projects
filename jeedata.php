<html>
<body>
<?php
$con=mysqli_connect("localhost","root","","GIET_UNIVERSITY");
if(mysqli_connect_errno())
{
echo "Failed to connect to Mysql:".mysqli_connect_error();
}
$fn=$_GET['name'];
$ftn=$_GET['fname'];
$em=$_GET['semail'];
$gen=$_GET['sg'];
$dob=$_GET['dob'];
$mno=$_GET['mno'];
$add=$_GET['add'];
$jroll=$_GET['jroll'];
$jrank=$_GET['jrank'];
$jyop=$_GET['jyop'];
$cat=$_GET['cat'];
$sql="INSERT INTO jee_form(fullname,fathersname,emailid,gender,dob,mobileno,address,jeeroll,jeerank,jeeyop,cat)
VALUES('$fn','$ftn','$em','$gen','$dob','$mno','$add','$jroll','$jrank','$jyop','$cat')";
if(!mysqli_query($con,$sql))
{
die("Error:". mysqli_error($con));
}
echo '<center>'.'<h1>' . "Thanks for Registration" . '</h1>';
mysqli_close($con);
?>
</body>
</html>