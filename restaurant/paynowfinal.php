<?php 
session_start();
		
		$logedin = $_SESSION['user'];
	
	if(isset($_POST['btn'])){
		$sel= $_POST['select'];
		$name = $_POST['name'];
		$card = $_POST['card'];
		
		$expire = $_POST['expire'];
		$year = $_POST['year'];
		$security = $_POST['security'];
		$type = $_POST['paymentmethod'];
	 
		include "config.php";
		$q = "insert into `paymentmethod` values('','$type','$sel','$name','$card','$expire','$year','$security','','$logedin')";
		
		$k = mysqli_query($obj,$q);
		
			//header("location:shippingaddress.php?x=thanks");
				
		
	}


	
	if(isset($_POST['btn1'])){
		$sel1= $_POST['select1'];
		$name1 = $_POST['name1'];
		$card1 = $_POST['card1'];
		
		$expire1 = $_POST['expire1'];
		$year1 = $_POST['year1'];
		$security1 = $_POST['security1'];
			$type = $_POST['paymentmethod1'];						
	 
	 
		
		
		include "config.php";
		$q = "insert into `paymentmethod` values('','$type','$sel1','$name1','$card1','$expire1','$year1','$security1','','$logedin')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
		//	header("location:shippingaddress.php?x=thanks");
			
			
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	}
	
	
	if(isset($_POST['btn2'])){
			$type = $_POST['paymentmethod2'];
			$sel2= $_POST['netBanking'];
		
			
			
			
			include "config.php";
		$q = "insert into `paymentmethod` values('','$type','$sel2','','','','','','','$logedin')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
		   //header("location:shippingaddress.php?x=thanks");
			
			
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
			}
			
			
			
	if(isset($_POST['btn3'])){
			$type = $_POST['paymentmethod3'];
			
//			header("location:shippingaddress.php?x=thanks");
			
			include "config.php";
		$q = "insert into `paymentmethod` values('','$type','COD','','','','','','','$logedin')";
		
		$k = mysqli_query($obj,$q);
		if($k>0){
		   //header("location:shippingaddress.php?x=thanks");
			
			
		}
		else{
			echo "Sorry For THis Error is here".mysqli_error($obj);
		}
	}
	include "config.php";
		$q = "select * from `paymentmethod` where email='$logedin';";
		
		$k = mysqli_query($obj,$q);
		while($ro = mysqli_fetch_array($k)){
	$pid = $ro['id'];
	$_SESSION['payinfo'] = array('pid'=>$pid,'type'=>$type);
echo '<script type="text/javascript">window.location=\'shippingaddress.php?x=thanks\';</script>';				
	//header("location:shippingaddress.php?x=thanks");
	}