<?php include('include/header.php')?>



<?php


if(isset($_POST['user'])){
$user=$_POST['user'];
$pass=md5($_POST['pass']);


if($user && $pass){
	$con = mysql_connect("localhost","root","")
or
die('Could not connect: ' . mysql_error()); 

mysql_select_db("firozshah",$con)
or
die('Database is not selected: ' . mysql_error());
$query=mysql_query("SELECT * FROM users WHERE username='$user'AND password='$pass'");
$numrows=mysql_num_rows($query);
if($numrows!==0){
		while($row=mysql_fetch_assoc($query))
	{
		
		$dbuser=$row['username'];
		$dbpass=$row['password'];
	
		
	}
	if($user==$dbuser && md5($pass==$dbpass))
	{
		echo "Congratulation! You are looged in.as<b>"." ".$user."</b>"."<br />";
		$_SESSION['user']=$row['username'];
		
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
if($_SESSION['user']=$user){
			echo "<a href='home.php'><b><i>Forms</i></b></a>";
		}
}
echo "
<table cellpadding='5' cellspacing='10' align='center'>
<form  method='POST' action='login.php'/>
<input type='hidden' name='user' value='true'/>
<tr><th>Username:</th><td><input type='text' name='user'/></td></tr>
<tr><th>Password:</th><td><input type='password' name='pass'/></td></tr>
<tr><td colspan='2' align='right'><input type='submit' name='login' value='Log in!'/></td></tr>
</form>
</table>
";
?>

<?php include('include/footer.php')?>