<?php 

	
	
	if(isset($_POST['jkl'])){
		$oid= $_POST['oid'];
		$price = $_POST['price'];
		$reason = $_POST['reason'];
		$ip= $_SERVER['REMOTE_ADDR'];
				$date= date("d/m/y");
				date_default_timezone_set("Asia/Kolkata");
				$time= date("h:i:sa");
	
	
	include "config.php";
	$q = "insert into `cancelorder` values('','$oid','$price','$reason','$time','$date','$ip')";
	
	$res = mysqli_query($obj,$q);
	
	if($res>0){
	
	         $q = "update `orderdetail` 
			set `status`='cancel by user' where `oid`='$oid'";
			$res = mysqli_query($obj,$q);
		
		echo'<script type="text/javascript">window.location=\'detailorder1.php?x=yourOrder_cancel\';</script>';		
		
			//header("location:detailorder1.php?x=yourOrder_cancel");
		}
		else{
		echo'<script type="text/javascript">window.location=\'detailorder.php\';</script>';		
		
		    //header("location:detailorder.php");
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	

}

	?>