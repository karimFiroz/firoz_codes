<?php 
$con = mysql_connect("localhost","root",""); 
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("my_db", $con);
?>
			
<html> 
<body>
<form action="index.php" method="GET"><br />
id: <input type="text" name="id" /><br />
firstName: <input type="text" name="firstName" /><br />
lastName: <input type="text" name="lastName" /><br />
age: <input type="text" name="age" /><br />
<input type="submit" value="Submit" />
</form>
</body>
</html>
         


<?php
$sql="INSERT INTO persons (id,firstName, lastName,age)
VALUES
('$_GET[id]','$_GET[firstName]','$_GET[lastName]','$_GET[age]')";
if (!mysql_query($sql,$con))
{ 
die('Error: ' . mysql_error()); 
} 
echo "1 record added"; 
mysql_close($con);
?>