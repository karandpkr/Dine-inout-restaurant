<?php session_start();
	unset($_SESSION['email']);
echo '<script type="text/javascript">window.location=\'index.php\';</script>';
	//header("location:index.php");
	
?>