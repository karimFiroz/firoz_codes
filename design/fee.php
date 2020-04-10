<?php include('include/header.php');?>
<?php

$con=@mysql_connect("mysql6.000webhost.com","a4361581_firoz","123welcome");
if(!$con){
	echo ('Could not connect:'.mysql_error());
}
else{
	echo "Database is connected:";
}
?>

<form action="insert.php" method="post"/>
Id: <input type="text" name="Id" /><br />
FirstName: <input type="text" name="FirstName" />
LastName: <input type="text" name="LastName" />
Roll: <input type="text" name="Roll" />
Group: <input type="text" name="Group" /><br />

Receipt_1: <input type="text" name="Receipt_1" />
January: <input type="text" name="January" />
Date_1: <input type="text" name="Date_1" /><br />
Receipt_2: <input type="text" name="Receipt_2" />
February: <input type="text" name="February" />
Date_2: <input type="text" name="Date_2" /><br />
Receipt_3: <input type="text" name="Receipt_3" />
March: <input type="text" name="March" />
Date_3: <input type="text" name="Date_3" /><br />
Receipt_4: <input type="text" name="Receipt_4" />
April: <input type="text" name="April" />
Date_4: <input type="text" name="Date_4" /><br />
Receipt_5: <input type="text" name="Receipt_5" />
May: <input type="text" name="May" />
Date_5: <input type="text" name="Date_5" /><br />
Receipt_6: <input type="text" name="Receipt_6" />
June: <input type="text" name="June" />
Date_6: <input type="text" name="Date_6" /><br />
Receipt_7: <input type="text" name="Receipt_7" />
July: <input type="text" name="July" />
Date_7: <input type="text" name="Date_7" /><br />
Receipt_8: <input type="text" name="Receipt_8" />
August: <input type="text" name="August" />
Date_8: <input type="text" name="Date_8" /><br />
Receipt_9: <input type="text" name="Receipt_9" />
September: <input type="text" name="September" />
Date_9: <input type="text" name="Date_9" /><br />
Receipt_10: <input type="text" name="Receipt_10" />
October: <input type="text" name="October" />
Date_10: <input type="text" name="Date_10" /><br />
Receipt_11: <input type="text" name="Receipt_11" />
November: <input type="text" name="November" />
Date_11: <input type="text" name="Date_11" /><br />
Receipt_12: <input type="text" name="Receipt_12" />
December: <input type="text" name="December" />
Date_12: <input type="text" name="Date_12" /><br />
Receipt_13: <input type="text" name="Receipt_13" />
Exam_1: <input type="text" name="Exam_1" />
Date_13: <input type="text" name="Date_13" /><br />
Receipt_14: <input type="text" name="Receipt_14" />
Exam_2: <input type="text" name="Exam_2" />
Date_14: <input type="text" name="Date_14" /><br />
Receipt_15: <input type="text" name="Receipt_15" />
Exam_3: <input type="text" name="Exam_3" />
Date_15: <input type="text" name="Date_15" /><br />
Receipt_16: <input type="text" name="Receipt_16" />
Others_1: <input type="text" name="Others_1" />
Date_16: <input type="text" name="Date_16" /><br />
Receipt_17: <input type="text" name="Receipt_17" />
Others_2: <input type="text" name="Others_2" />
Date_17: <input type="text" name="Date_17" /><br />
Receipt_18: <input type="text" name="Receipt_18" />
Others_3: <input type="text" name="Others_3" />
Date_18: <input type="text" name="Date_18" /><br />
Remarks: <input type="text" name="Remarks" /><br />
<input type="submit" value="Submit" />
</form>
<?php
mysql_select_db("a4361581_karim", $con);
if(!$con){
	echo ('Could not connect:'.mysql_error());
}
echo "Database is selected:";
$result = mysql_query("SELECT * FROM students");
if(!$con){
	echo ('Could not connect:'.mysql_error());
}
echo "Table is selected:";
$sql=("INSERT INTO persons (Id,FirstName, LastName, Age)
VALUES
('$_POST[Id]','$_POST[FirstName]','$_POST[LastName]','$_POST[Roll]','$_POST[Group]
','$_POST[Receipt_1]','$_POST[January]','$_POST[Date_1]
','$_POST[Receipt_2]','$_POST[February]','$_POST[Date_2]
','$_POST[Receipt_3]','$_POST[March]','$_POST[Date_3]
','$_POST[Receipt_4]','$_POST[April]','$_POST[Date_4]
','$_POST[Receipt_5]','$_POST[May]','$_POST[Date_5]
','$_POST[Receipt_6]','$_POST[June]','$_POST[Date_6]
','$_POST[Receipt_7]','$_POST[July]','$_POST[Date_7]
','$_POST[Receipt_8]','$_POST[August]','$_POST[Date_8]
','$_POST[Receipt_9]','$_POST[September]','$_POST[Date_9]
','$_POST[Receipt_10]','$_POST[October]','$_POST[Date_10]
','$_POST[Receipt_11]','$_POST[November]','$_POST[Date_11]
','$_POST[Receipt_12]','$_POST[December]','$_POST[Date_12]
','$_POST[Receipt_13]','$_POST[Exam_1]','$_POST[Date_13]
','$_POST[Receipt_14]','$_POST[Exam_2]','$_POST[Date_14]
','$_POST[Receipt_15]','$_POST[Exam_3]','$_POST[Date_15]
','$_POST[Receipt_16]','$_POST[Others_1]','$_POST[Date_16]
','$_POST[Receipt_17]','$_POST[Others_2]','$_POST[Date_17]
','$_POST[Receipt_18]','$_POST[Others_3]','$_POST[Date_18]','$_POST[Remarks]')");
if (!mysql_query($sql,$con))
{
die('Error: ' . mysql_error());
}
echo "1 record added";

mysql_close($con)
?>

<?php include('include/footer.php');?>