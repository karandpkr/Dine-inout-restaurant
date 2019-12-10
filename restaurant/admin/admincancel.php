<?php session_start();

	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
?>
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
			set `status`='cancel by admin' where `oid`='$oid'";
			$res = mysqli_query($obj,$q);
		
		
			//header("location:detailpandingorder.php?x=Order_cancel");
				echo '<script type="text/javascript">window.location=\'detailpandingorder.php?x=Order_cancel\';</script>';
		}
		else{
		
	          echo '<script type="text/javascript">window.location=\'detailpandingorder.php\';</script>';	
		    //header("location:detailpandingorder.php");
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	

}

	?>