<?php session_start();

	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
?>
<?php 

	$id = $_REQUEST['id'];
	
	include "config.php";
	$res = mysqli_query($obj,"delete from `add-categories` where `c-id`='$id'");
	echo '<script type="text/javascript">window.location=\'allcategoryshow.php\';</script>';
	//header("location:allcategoryshow.php");
	?>