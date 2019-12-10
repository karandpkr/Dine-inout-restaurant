<?php session_start();
if(isset($_POST['submit']))
{
	$Pass1=$_POST['pass1'];
	$Pass2=$_POST['pass2'];
	$Tname=$_SESSION['tname'];
	if(!$Pass1==$Pass2){
	echo '<script type="text/javascript">window.location=\'reset_pass.php\';</script>';			
		 //header("location:reset_pass.php");
	}
	else{
		include "config.php";
		$Pass1=md5($Pass1);
		$sql = "update `account` set password='$Pass1' where email='$Tname'";
		$result= mysqli_query($obj,$sql);
	if($result>0){
		echo '<script type="text/javascript">alert("Password updated Successfully");window.location=\'logaccount.php\';</script>';
	}
	}
	
	mysqli_close($obj);
}
?>