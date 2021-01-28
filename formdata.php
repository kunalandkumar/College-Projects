<html>
<body>
<center> <h1 style="font-family:verdana;"><a href="home.html">
G.I.E.T. University</a><br>
 Gunupur<br></h1></center>
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
$tenb=$_GET['tenb'];
$tenp=$_GET['tenp'];
$tenyop=$_GET['tenyop'];
$twb=$_GET['twb'];
$twp=$_GET['twp'];
$twyop=$_GET['twyop'];
$cat=$_GET['cat'];
$sql="INSERT INTO online_form(fullname,fathersname,emailid,gender,DOB,mobile_no,address,10th_board,10th_per,10th_YOP,12th_board,12th_per,12th_YOP,category)
VALUES('$fn','$ftn','$em','$gen','$dob','$mno','$add','$tenb','$tenp','$tenyop','$twb','$twp','$twyop','$cat')";
if(!mysqli_query($con,$sql))
{
die("Error:".mysqli_error($con));
}
echo"<center>"."<h1>"."Thank's for Registration"."</h1>";
mysqli_close($con);
?>
</body>
</html>