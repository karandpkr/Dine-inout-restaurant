<?php session_start();
<?php 
if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		 
	}?>	

if(isset($_POST['go']))
{
$oid=$_POST['oid'];
$status=$_POST['status'];

$date= date("d/m/y");
				date_default_timezone_set("Asia/Kolkata");
				$time= date("h:i:sa");
		

$deliver=$_POST['deliver'];


include "config.php";
	include "config.php";
		$q = "insert into `statusorder` values('','$status','$oid','$date','$time','$deliver')";
		$q1 = "update orderdetail set status='Order Delivered' where oid='$oid'";
		if(isset($deliver) && $deliver=="on")
		{
			mysqli_query($obj,$q1);
		}
		$k = mysqli_query($obj,$q);
		if($k>0){
			echo '<script type="text/javascript">window.location=\'detailpandingorder.php?oid=$oid\';</script>';
			//header("location:detailpandingorder.php?oid=$oid");
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}}
?>