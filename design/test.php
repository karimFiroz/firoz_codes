<?php include('include/header.php')?>

<?php 

 if(isset($_POST['username'])){
$username=$_POST['username'];//firoz
$password=$_POST['password'];//karim264644karim
//connect to server.
$con=mysql_connect("localhost", "root", "");
 if(!$con){die('Could not connect:'.mysql_error());}
 mysql_select_db("firozshah",$con);
 
 if(mysql_num_rows(mysql_query("SELECT * FROM users WHERE username='$username'AND password='$password'")))
			{//correct information.
$result=mysql_query("SELECT * FROM users WHERE username='$username'AND password='$password'"); 
while($row =mysql_fetch_array($result))
			{
				
				$expire=time()+60*60*24*30;// one months
			setcookie("uid",$row['uid'],$expire);
		echo "Congratulation! You are looged in.as<b>".$row['username']."</b>";
			}
			}else{
	 //False information.
	 echo "<b>Username or password is wrong! </b><br /><br />";
			 }
			
	mysql_close($con);
 }

			echo "
			<form  method='POST'/>
			Username:<input type='text' name='username'/><br />
			Password:<input type='password' name='password'/><br />
			<input type='submit' value='Log in!'/>
			</form>";
	?>
	
	
	
	
	
	
	<?php include('include/footer.php')?>