<html>
<body>
<center> <h1 style="font-family:verdana;"><a href="home.html">
G.I.E.T. University</a><br>
 Gunupur<br></h1></center>
<?php
      $con=mysqli_connect("localhost","root","","GIET_UNIVERSITY");
  //check connection 
if(mysqli_connect_errno())
  {
    echo "Failed to connect to mysql:" . mysqli_connect_error();

}
$res= mysqli_query ($con,"SELECT fullname,fathersname,emailid,gender,DOB,mobile_no,address,10th_board,10th_per,10th_YOP,12th_board,12th_per,12th_YOP,category FROM online_form ");
 
echo"<table border='1' align='center' width='500'>
<tr>
<th>name</th>
<th>fathersname</th>
<th>e-mail</th>
<th>gender</th>
<th>dob</th>
<th>mobile_no</th>
<th>address</th>
<th>10'th board</th>
<th>10 %</th>
<th>10 yop</th>
<th>12 board</th>
<th>12 %</th>
<th>12 yop</th>
<th>category</th>
</tr>";
  
 while($row= mysqli_fetch_array($res))
 {
  echo"<tr>";
  echo"<td>" . $row['fullname'] . "</td>";      
    echo"<td>" . $row['fathersname'] . "</td>";      
	  echo"<td>" . $row['emailid'] . "</td>";      
	    echo"<td>" . $row['gender'] . "</td>";      
		  echo"<td>" . $row['DOB'] . "</td>";      
    echo"<td>" . $row['mobile_no'] . "</td>"; 
	echo"<td>" . $row['address'] . "</td>"; 
    echo"<td>" . $row['10th_board'] . "</td>";     
 echo"<td>" . $row['10th_per'] . "</td>";  
 echo"<td>" . $row['10th_YOP'] . "</td>";  
 echo"<td>" . $row['12th_board'] . "</td>";   
  echo"<td>" . $row['12th_per'] . "</td>";    
  echo"<td>" . $row['12th_YOP'] . "</td>";   
   echo"<td>" . $row['category'] . "</td>";  
  echo"</tr>";  
}
echo"</table>";
mysqli_close($con);
?>
<table style="width:300%">
<style>
table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 20px;
  text-align: left;
}
table#t01 tr:nth-child(even) {
  background-color: #eee;
}
table#t01 tr:nth-child(odd) {
 background-color: #fff;
}
table#t01 th {
  background-color: black;
  color: white;
}
</style>
<table id="t01">
  <tr>
  	<th><a href="home.html">Home</a></th>
    <th><a href="loginform.php">Admin</a></th>
	<th><a href="campuslife.html">Campus Life</a></th>
	<th><a href="onlineform.html">Admission</a></th>
	<th>Contact Us:-
	<br>Gunupur-765022,<br>Rayagada,<br>Orissa
	<br>06857-250170,250172,250157<br>enquiry@giet.edu
	</th>

  </tr>
  </table>
</body>
</html>