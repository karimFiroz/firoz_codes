<?php include('include/header.php');?>
<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("firozshah", $con); 
$result = mysql_query("SELECT * FROM users uid order by uid"); 

echo "<b><table border='1' cellpadding='5' cellspacing='10'align='center'><b></b><tr>  
<th>uid</th> 
<th>username</th>  
<th>email</th>   
</tr>"; 
while ($row = mysql_fetch_array($result)) 
{ 
echo "<tr>";   
echo "<td>" . $row['uid'] . "</td>"; 
echo "<td>" . $row['username'] . "</td>";  
echo "<td>" . $row['email'] . "</td>";  
echo "</tr>"; 
}
echo "</table>"; 

mysql_close($con); 
?>



<?php include('include/footer.php');?>
