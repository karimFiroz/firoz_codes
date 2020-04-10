<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
}
mysql_select_db("my_db", $con);
mysql_query("create table persons(
id int(11) not null primary key,
firstName varchar(25) not null,
lastName varchar(25) not null, 
age int(11))");
mysql_close($con);
?>