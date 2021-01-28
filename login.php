<html>
<body>
<?php
$uid=$_GET['eno'];
$pwd=$_GET['pwd'];
$con=mysqli_connect("localhost","root","","GIET_UNIVERSITY"); 
//Check connection
if(mysqli_connect_errno())
{
  echo"Failed to conect to MySQL: ";
  mysqli_connect_error();
}
$res = mysqli_query($con,"SELECT Firstname FROM adminlog where eno='$uid' and pwd='$pwd' ");
if ($row = mysqli_fetch_array($res)) 
{
                       session_start();
                       $_SESSION['uid']=$uid;
                       $_SESSION['un']=$row['Firstname'];
                       header('Location: http://localhost:80/project/admin.php');
}
else
{
echo "Invalid id/pwd";
}
?>
</body>
</html>
 