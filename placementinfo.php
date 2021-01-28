<html>
<body>
<center> <h1 style="font-family:verdana;"><a href="file:///C:/wamp/www/project/home.html">
G.I.E.T. University</a><br>
 Gunupur<br></h1></center>
<?php
      $con=mysqli_connect("localhost","root","","GIET_UNIVERSITY");
  //check connection 
if(mysqli_connect_errno())
  {
    echo "Failed to connect to mysql:" . mysqli_connect_error();

}
$res= mysqli_query ($con,"SELECT name,roll_no,reg_no,branch,placed_at FROM placement");
 
echo "<table border='1' align='center' width='500'>
<tr>
<th>name</th>
<th>roll_no</th>
<th>reg_no</th>
<th>branch</th>
<th>placed_at</th>
</tr>";
  
 while($row= mysqli_fetch_array($res))
 {
  echo"<tr>";
  echo"<td>" . $row['name'] . "</td>";    
  echo"<td>" . $row['roll_no'] . "</td>";    
  echo"<td>" . $row['reg_no'] . "</td>";  
   echo"<td>" . $row['branch'] . "</td>";  
   echo"<td>" . $row['placed_at'] . "</td>";  
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