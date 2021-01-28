<?php
$name=$_POST['name'];
$qual=$_POST['qual'];
$exp=$_POST['exp'];
$eno=$_POST['eno'];


$img = "upload/".$eno . ".jpg";

    if($_FILES["file"]["error"]>0) 
	echo"Error:".$_FILE["file"]["error"]."<br>"  ;                                         
      else
{

move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $eno . ".jpg");

}


$con=mysqli_connect("localhost","root","","GIET_UNIVERSITY");  
if(mysqli_connect_error())
 {
          echo"failed to connect".mysqli_connect_error();
 }                                     


$sql="INSERT INTO bsh(name,qual,exp,imgage)
VALUES('$name','$qual','$exp','$img' )";

if(!mysqli_query($con,$sql))
{
    die('Error:'.mysqli_error($con));

}
echo "1 record added";
mysqli_close($con);

?>