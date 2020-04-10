<?php include('include/header.php');?>

<div align="center">
<form action="fk_users.php" method="GET"/>
<input type="hidden" name="register_form" value="true" />
User Name: <input type="text" name="user_login" /><br />
Password: <input type="text" name="user_pass" /><br />
Full Name: <input type="text" name="user_nicename" /><br />
Email: <input type="text" name="user_email" /><br />
<input type="submit" value="Register me" />
</form>
</div>


<?php 
$con = @mysql_connect("localhost","root",""); 
if (!$con) 
{ 
echo ('Could not connect: ' . mysql_error()); 
}
mysql_select_db("firozshah", $con);

$sql="INSERT INTO fk_users (
user_login,user_pass,user_nicename,user_email)
VALUES
('$_GET[user_login]',
'$_GET[user_pass]',
'$_GET[user_nicename]',
'$_GET[user_email]')";
				
 if (!mysql_query($sql,$con))
 { 
die('Error: ' . mysql_error()); 
} 
echo "1 record added";
mysql_close($con);
?>

<?php include('include/footer.php');?>
