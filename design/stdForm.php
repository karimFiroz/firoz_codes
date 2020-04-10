<?php include('include/header.php');?>
<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("firozshah", $con); 
$result = mysql_query("SELECT * FROM students stdId order by stdId"); 
echo "<b><table  background_color='blue'bgcborder='10' border='1' cellpadding='10' cellspacing='10'align='center'><b></b><tr>  
<th>sl</th> 
<th>stdId</th> 
<th>stdName</th> 
<th>fName</th> 
<th>mName</th> 
<th>clss</th> 
<th>section</th> 
<th>roll</th> 
<th>bDate</th> 
<th>hDist</th>  
<th>mobileNo</th>  
</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>";   
echo "<td>" . $row['sl'] . "</td>"; 
echo "<td>" . $row['stdId'] . "</td>"; 
echo "<td>" . $row['stdName'] . "</td>"; 
echo "<td>" . $row['fName'] . "</td>";  
echo "<td>" . $row['mName'] . "</td>";  
echo "<td>" . $row['clss'] . "</td>";  
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
