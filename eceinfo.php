<html>
<body>
<center> <h1 style="font-family:verdana;"><a href="home.html">
G.I.E.T. University</a><br>
 Gunupur<br></h1>
<img src="Screenshot (54).png"width='300'height='250' alt="Gandhi">
<br></center>
<?php
      $con=mysqli_connect("localhost","root","","GIET_UNIVERSITY");
  //check connection 
if(mysqli_connect_errno())
  {
    echo "Failed to connect to mysql:" . mysqli_connect_error();

}
$res= mysqli_query ($con,"SELECT name,qual,exp,imgage,eno FROM ece");
 
echo"<table border='1' align='center' width='500'>
<tr>
<th>name</th>
<th>qualification</th>
<th>experiance</th>
<th>imgage</th>
<th>eno</th>
</tr>";
  
 while($row= mysqli_fetch_array($res))
 {
  echo"<tr>";
  echo"<td>" . $row['name'] . "</td>";    
  echo"<td>" . $row['qual'] . "</td>";    
  echo"<td>" . $row['exp'] . "</td>";  
   echo"<td><img src ='" . $row['imgage'] . "' width='100' height='100'></td>";  
   echo"<td>" . $row['eno'] . "</td>";  
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