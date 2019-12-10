<?php 
	
	if(isset($_POST['send'])){
		$name= $_POST['name'];
		$email = $_POST['email'];
		$tele = $_POST['telephone'];
		
		$msg = $_POST['message'];
	 
	 
		
		
		include "config.php";
		$q = "insert into `contactinfo` values('$name','$email','$tele','$msg')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
echo'<script type="text/javascript">window.location=\'contact.php?x=thanks\';</script>';		
			//header("location:contact.php?x=thanks");
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	}

