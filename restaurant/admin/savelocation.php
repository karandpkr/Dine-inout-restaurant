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
	if(isset($_POST['lct'])){
		
		$city = $_POST['cityname'];
		
		$loc = ciplav($_POST['location']);
		
		include "config.php";
		$q = "insert into `location` values('','$city','$loc')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
			
	//header("location:addlocation.php?x=thanks");
	echo '<script type="text/javascript">window.location=\'addlocation.php?x=thanks\';</script>';
	
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	}
	
?>