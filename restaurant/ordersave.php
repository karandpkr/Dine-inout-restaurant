<?php 
session_start();

	if(isset($_POST['sub'])){
		$user=$_SESSION['user'];
		$loc=$_SESSION['loc'];
		$add=$_SESSION['add'];
		$pid=$_SESSION['pid'];
		
		$ip= $_SERVER['REMOTE_ADDR'];
				$date= date("d/m/y");
				date_default_timezone_set("Asia/Kolkata");
				$time= date("h:i:sa");
		
		$pmethod = $_SESSION['payinfo']['type'];
		$pid = $_SESSION['payinfo']['pid'];
		
		$price = $_SESSION['total'];

			
		$all="";
						$t =0;$total=0;
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
	foreach($_SESSION['cart'] as $id=>$quantity){

				
			$t++;
$all = $all . "," . $id;
include "config.php";
$q="select * from `add-product` where `p-id`='$id'";
//echo $q;
$result=mysqli_query($obj,$q);
while($row=mysqli_fetch_array($result))
{

$total += ($row[3]*$quantity); echo ($row[3]*$quantity); 
 }
}
}
	
	
		include "config.php";
		$q = "insert into `orderdetail` values('','$user','$loc','$add','$date','$time','$ip','$pmethod','$pid','Order Book','$total','$all')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
		echo '<script type="text/javascript">window.location=\'thanks.php?x=thanks?'.$total.'\';</script>';				
			//header("location:thanks.php?x=thanks?$total");
				
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	}
