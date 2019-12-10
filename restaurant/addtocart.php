<?php session_start();
	$id = 	$_REQUEST['id'];
	if(isset($_SESSION['cart']) && array_key_exists($id,$_SESSION['cart']) ){
		$_SESSION['cart'][$id] += 1 ;
	
		echo'<script type="text/javascript">window.location=\''. $_SERVER['HTTP_REFERER'].'\';</script>';		
		//header('location:' . $_SERVER['HTTP_REFERER']);
		return true;
		
	}
	else{
		$_SESSION['cart'][$id]=1;
		echo'<script type="text/javascript">window.location=\''.$_SERVER['HTTP_REFERER'].'\';</script>';
		
		//header('location:' . $_SERVER['HTTP_REFERER']);
		
	return false;}

//print_r($_SESSION['cart']);
?>