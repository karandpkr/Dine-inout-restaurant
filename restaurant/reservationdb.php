<?php 
	
	if(isset($_POST['myreserve'])){
		$date= $_POST['date'];
		$person = $_POST['person'];
		$time = $_POST['time'];
		
		$contact = $_POST['contact'];
				$email = $_POST['email'];
$ip= $_SERVER['REMOTE_ADDR'];
				$date1= date("d/m/y");
				date_default_timezone_set("Asia/Kolkata");
				$time1= date("h:i:sa");	 
	 
		
		
		include "config.php";
		$q = "insert into `reservation` values('','$date','$person','$time','$contact','$email','$time1','$date1','$ip')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
		echo '<script type="text/javascript">window.location=\'reservation.php?x=thanks\';</script>';			
			//header("location:reservation.php?x=thanks");
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	}

