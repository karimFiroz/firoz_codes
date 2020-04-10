<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
}
mysql_select_db("my_db", $con);

mysql_query("INSERT INTO Persons (id,firstName, lastName, age)
VALUES 
(3,'Ayesha', 'pervin', 37)");			
			
mysql_close($con);
?>