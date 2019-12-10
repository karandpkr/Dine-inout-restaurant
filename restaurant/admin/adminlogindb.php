<?php session_start();
	

if(isset($_POST['sub']))
{
$email=$_POST['email'];
$pass=$_POST['pass'];
include "config.php";
	$res = mysqli_query($obj,"select * from admin where email='$email' and password='$pass'");
	if($row = mysqli_fetch_array($res)){
				 $_SESSION['email']=$email;
			//header("location:welcomeadmin.php");
			echo '<script type="text/javascript">window.location=\'welcomeadmin.php\';</script>';
		}
		else{
		echo"email or password not correct";
			//header("location:index.php?email=notcorrect");
			echo '<script type="text/javascript">window.location=\'index.php?email=notcorrect\';</script>';
			
			
		}
		}
		
else{
echo"plz fill form";
}
?>