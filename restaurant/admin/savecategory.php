<?php session_start();
if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		 
	}?>
<?php
function ciplav($str){
	$str = trim($str);
	$str =  stripslashes($str);
	$str = htmlspecialchars($str);
	return $str;
}
?>
<?php 
	if(isset($_POST['sub1'])){
		
		$name =ciplav($_POST['c-name']);
		
		include "config.php";
		$q = "insert into `add-categories` values('','$name')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
			
	//header("location:addcategories.php?x=thanks");
	echo '<script type="text/javascript">window.location=\'addcategories.php?x=thanks\';</script>';
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
	
			
		}
	}
	
?>