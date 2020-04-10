<?php include('include/header.php');?>

<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
 ?>
 <?php
mysql_select_db("firozshah", $con); 

$result = mysql_query("SELECT * FROM students");

echo "<b><table border='1' align='center'><b></b><tr> 
<th>stdId</th> 
<th>stdName</th> 
<th>fName</th> 
<th>mName</th> 
<th>class</th> 
<th>section</th> 
<th>roll</th> 
<th>bDate</th> 
<th>hDist</th> 
<th>mobileNo</th>  
</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>"; 
echo "<td>" . $row['stdId'] . "</td>"; 
echo "<td>" . $row['stdName'] . "</td>"; 
echo "<td>" . $row['fName'] . "</td>"; 
echo "<td>" . $row['mName'] . "</td>"; 
echo "<td>" . $row['class'] . "</td>";  
echo "<td>" . $row['section'] . "</td>";  
echo "<td>" . $row['roll'] . "</td>";  
echo "<td>" . $row['bDate'] . "</td>";  
echo "<td>" . $row['hDist'] . "</td>";  
echo "<td>" . $row['mobileNo'] . "</td>";  
echo "</tr>"; 
}
echo "</table>"; 

mysql_close($con); 
?>



<?php include('include/footer.php');?>