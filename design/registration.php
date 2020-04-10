<?php include('include/header.php');?>
<?php echo "<a href='home.php'><b><i>Home page</i></b></a>";?>
<!DOCTYPE html>
<head><title>Student Registration</title></head>
<body>
<div class="container">
<?php 
 

$con = @mysql_connect("localhost","root",""); 
if (!$con) 
{ 
echo ('Could not connect: ' . mysql_error()); 
} 
mysql_select_db("firozshah", $con);
if(isset($_GET['stdId'])){
	$sl=mysql_real_escape_string($_GET['sl']);
	$stdId=mysql_real_escape_string($_GET['stdId']);
	$stdName=mysql_real_escape_string($_GET['stdName']);
	$fName=mysql_real_escape_string($_GET['fName']);
	$mName=mysql_real_escape_string($_GET['mName']);
	$clss=mysql_real_escape_string($_GET['clss']);
	$section=mysql_real_escape_string($_GET['section']);
	$roll=mysql_real_escape_string($_GET['roll']);
	$bDate=mysql_real_escape_string($_GET['bDate']);
	$hDist=mysql_real_escape_string($_GET['hDist']);
	$mobileNo=mysql_real_escape_string($_GET['mobileNo']);
$sql="INSERT INTO students (
sl,stdId,stdName,fName, mName,clss,section,roll,bDate,hDist,mobileNo)
VALUES('$sl','$stdId','$stdName','$fName','$mName','$clss','$section','$roll','$bDate','$hDist','$mobileNo')";
if (!mysql_query($sql,$con)){ die('Error: ' . mysql_error()); } 
echo "1 record added";
mysql_close($con);
}
	
?>
	<form method='GET' action='registration.php'>
<table>
	<tr>
	<td>Serial No:</td>
	<td><input type='text' name='sl'></td>
	</tr>
	<tr>
	<td>Student Id:</td>
	<td><input type='text' name='stdId'></td>
	</tr>		
	<tr>
	<td>Student Name:</td>
	<td><input type='text' name='stdName'></td>
	</tr>
	<tr>
	<td>Father's Name:</td>
	<td><input type='text' name='fName'></td>
	</tr>
		<tr>
		<td>Mother's Name:</td>
		<td><input type='text' name='mName'></td>
		</tr>
		<tr>
		<td>Clss:</td>
		<td><input type='text' name='clss'></td>
		</tr><tr>
		<td>Section:</td>
		<td><input type='text' name='section'></td>
		</tr><tr>
		<td>Roll:</td>
		<td><input type='text' name='roll'></td>
		</tr><tr>
		<td>Birth Date:</td>
		<td><input type='text' name='bDate'></td>
		</tr><tr>
		<td>Home District:</td>
		<td><input type='text' name='hDist'></td>
		</tr><tr>
		<td>Mobile No:</td>
		<td><input type='text' name='mobileNo'></td>
		</tr>
		<tr>
			<td></td>
			<td align='right'><input type='submit' value='Register me'></td>
			</tr>
		</table>
	</form>   	

</div>
</body>
</html>
<?php include('include/footer.php');?>