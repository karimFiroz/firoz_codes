<?php
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("my_db", $con); 
$result = mysql_query("SELECT * FROM Persons ORDER BY age"); 
while($row = mysql_fetch_array($result)) 
{ 
echo $row['firstName']; 
echo " " . $row['lastName']; 
echo " " . $row['age']; 
echo "<br />"; 
} 
mysql_close($con); 
?> 

<?php
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("my_db", $con); 
$result = mysql_query("SELECT * FROM Persons ORDER BY age desc"); 
while($row = mysql_fetch_array($result)) 
{ 
echo $row['firstName']; 
echo " " . $row['lastName']; 
echo " " . $row['age']; 
echo "<br />"; 
} 
mysql_close($con); 
?> 