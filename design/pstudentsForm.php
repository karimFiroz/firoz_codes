
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
	$school=mysql_real_escape_string($_GET['school']);
	$clss=mysql_real_escape_string($_GET['clss']);
	$section=mysql_real_escape_string($_GET['section']);
	$roll=mysql_real_escape_string($_GET['roll']);
	$month=mysql_real_escape_string($_GET['month']);
	$date=mysql_real_escape_string($_GET['date']);
	$fee=mysql_real_escape_string($_GET['fee']);
	$mobileNo=mysql_real_escape_string($_GET['mobileNo']);
$sql="INSERT INTO pstudents(
sl,stdId,stdName,school,clss,section,roll,month,date,fee,mobileNo)
VALUES
('$sl','$stdId','$stdName','$school','$clss','$section','$roll','$month','$date','$fee','$mobileNo')";
if (!mysql_query($sql,$con)){ die('Error: ' . mysql_error()); } 
echo "1 record added";
mysql_close($con);
}
	
?>
	<form method='GET' action='pstudentsForm.php'>
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
	<td>School:</td>
	<td><input type='text' name='school'></td>
	</tr>
	<tr>
	<td>Class:</td>
	<td><input type='text' name='clss'></td>
	</tr>
	<tr>
	<td>Section:</td>
	<td><input type='text' name='section'></td>
	</tr>
		<tr>
		<td>Roll:</td>
		<td><input type='text' name='roll'></td>
		</tr>
		<tr>
		<td>Month:</td>
		<td><input type='text' name='month'></td>
		</tr><tr>
		<td>Date:</td>
		<td><input type='text' name='date'></td>
		</tr>
		<tr>
		<td>Fee:</td>
		<td><input type='text' name='fee'></td>
		</tr>
		<tr>
		<td>Mobile No:</td>
		<td><input type='text' name='mobileNo'></td>
		</tr>
		<tr>
			<td></td>
			<td align='right'><input type='submit' value='Submit'></td>
			</tr>
		</table>
	</form>   	

</div>
</body>
</html>
<?php include('include/footer.php');?>