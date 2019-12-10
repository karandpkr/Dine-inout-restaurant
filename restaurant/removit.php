<?php session_start();
$id = $_REQUEST['x'];

if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
	
	unset($_SESSION['cart'][$id]);
}
echo '<script type="text/javascript">window.location=\'checkout.php\';</script>';			
//header("location:checkout.php");
?>