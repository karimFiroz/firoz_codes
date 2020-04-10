<?php 
$con = @mysql_connect("localhost","root",""); 
if (!$con) 
{ 
echo ('Could not connect: ' . mysql_error()); 
} 
echo "Connected"; 
mysql_close($con);
?>