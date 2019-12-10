<?php 
	
	if(isset($_POST['mybtn'])){
		$fname = $_POST['fname'];
		 
		$email = $_POST['email'];
		$password = md5($_POST['password']);
		$security = $_POST['security'];
		$ans = $_POST['answer'];
		$tele = $_POST['tele'];
	 
		
		
		
		include "config.php";
		$q = "insert into `account` values('$fname','$email','$password','$security','$ans','$tele')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
echo '<script type="text/javascript">window.location=\'logaccount.php?x=thanks\';</script>';			
			//header("location:logaccount.php?x=thanks");
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
			echo '<script type="text/javascript">window.location=\'loginaccount.php?x=sorry\';</script>';
		}
	}

