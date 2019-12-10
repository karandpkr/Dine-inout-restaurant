<?php session_start();
if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		 
	}?>
<?php 

	$id = $_REQUEST['id'];
	$data = $_REQUEST['data'];
	include "config.php";
	$res = mysqli_query($obj,"update `add-categories` set `c-name`='$data' where `c-id`='$id'");
	?>