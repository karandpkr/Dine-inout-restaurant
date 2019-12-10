<?php session_start();
if(isset($_POST['submit']))
{
	$name=$_POST['tname'];
	$Question=$_POST['security'];
	$Answer=$_POST['answer'];
	include "config.php";
	$sql = "select * from `account`  where email='$name' and security='$Question' and ans='$Answer'";
	$result= mysqli_query($obj,$sql);
	$records=mysqli_num_rows($result);
	$row = mysqli_fetch_array($result);
	if ($records==0)
	{
	echo '<script type="text/javascript">alert("Wrong Information Provided");window.location=\'forgetpass.php\';</script>';
	}
	else
	{
		$_SESSION['tname']=$row['email'];
		echo '<script type="text/javascript">window.location=\'reset_pass.php\';</script>';
		//header("location:reset_pass.php");
	}	
	mysqli_close($obj);
}
?>