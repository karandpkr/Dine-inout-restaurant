<?php 
	
	
	if(isset($_POST['mybtn'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$tele = $_POST['telephone'];
		$pin = $_POST['pincode'];
		$loc = $_POST['location'];
		$city = $_POST['city'];
		$add = $_POST['address'];
	 
		
		
		include "config.php";
		$q = "insert into `address` values('','$name','$email','$tele','$loc','$city','$add','$pin')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
				echo'<script type="text/javascript">window.location=\'checkout.php?x=thanks\';</script>';	
		
			//header("location:checkout.php?x=thanks");
							
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	}

