<?php include('include/header.php');?>
<?php
if(!$_session=null){
session_unset(); 
session_destroy();
echo "<b>You are successfully logout !</b>";

} 
?>
<?php include('include/footer.php');?>