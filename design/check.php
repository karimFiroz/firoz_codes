<?php


if(isset($_POST['user_login'])){
$username=$_POST['user_login'];
$password=$_POST['user_pass'];


if($username && $password){
	$con = mysql_connect("localhost","root","")
or
die('Could not connect: ' . mysql_error()); 

mysql_select_db("firozshah",$con)
or
die('Database is not selected: ' . mysql_error());
$query=mysql_query("SELECT * FROM fk_users WHERE user_login='$username'");
$numrows=mysql_num_rows($query);
if($numrows!==0){
		while($row=mysql_fetch_assoc($query))
	{
		$dbusername=$row['user_login'];
		$dbpassword=$row['user_pass'];
	
		
	}
	if($username==$dbusername && $password==$dbpassword)
	{
		echo "Congratulation You are logged in!";
		
		$_SESSION['name']=$row['user_login'];
		$_SESSION['fullname']=$row['user_nicename'];
		$_SESSION['pass']=$row['user_pass'];
}
	else
		echo "Your password is incorrect!";
}
else
	die("That user does not exists!");		
}
else{
	die("Please enter a username and password!");
}
mysql_close($con);
}
echo "
<form action='login.php' method='POST'/>
<input type='hidden' name='login_form' value='true' />
Username:<input type='text' name='user_login'/><br />
Password:<input type='password' name='user_pass'/><br />
<input type='submit' value='Login'/>
</form>
";
?>