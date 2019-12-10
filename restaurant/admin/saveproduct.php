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
	
	if(isset($_POST['btn'])){
		$category = ciplav($_POST['s-categories']);
		$name = ciplav($_POST['p-name']);
		$price = ciplav($_POST['price']);
		$ingre ="";
		foreach($_POST['ingredient'] as $t)
		{
				$ingre = $ingre.",".$t;
		}
		
		$type = $_POST['type'];
		$eat = $_POST['eat-noneat'];
		$des = $_POST['description'];
	 
		
		$fn = $_FILES['p-pic']['name'];
		$fz = $_FILES['p-pic']['size'];
		$ft = $_FILES['p-pic']['type'];
		$ftmp = $_FILES['p-pic']['tmp_name'];
		
		$a = explode(".",$fn);
		$ext = end($a);
		$myname = $name.".".$ext;
		
		include "config.php";
		$q = "insert into `add-product` values('','$category','$name','$price','$ingre','$type','$eat','$des','$myname')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
			move_uploaded_file($ftmp,"upload/".$myname);
			
			//header("location:allproductshow.php?x=thanks");
			echo '<script type="text/javascript">window.location=\'allproductshow.php?x=thanks\';</script>';
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	}

