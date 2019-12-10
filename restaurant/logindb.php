<?php session_start();
	if(isset($_POST['login']))
	{
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		
		include "config.php";
		$res = mysqli_query($obj,"select * from account where `email`='$email' and `password`='$password'");
		if($row = mysqli_fetch_array($res)){
			$_SESSION['user']=$email;
			
			echo '<script type="text/javascript">window.location=\'ordernow.php\';</script>';				
			//header("location:ordernow.php");
		}
		else{
		echo '<script type="text/javascript">window.location=\'logaccount.php?x=notcorect\';</script>';				
			//header("location:logaccount.php?x=notcorect");
			
		}
	}
	else{
	echo '<script type="text/javascript">window.location=\'logaccount.php?x=fill\';</script>';				
		//header("location:logaccount.php?x=fill");
	}