<?php session_start();
if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		 
	}?>
<?php

if(isset($_REQUEST['p-id'])){
				$pid = $_REQUEST['p-id'];
			}
			require_once "config.php";
			
			$del = "delete from `add-product` 
			 where `p-id`='$pid'";
			$res1 = mysqli_query($obj,$del);
		if($res1>0)
		{
echo '<script type="text/javascript">window.location=\'allproductshow.php?x=Deletesuccess\';</script>';
//header("location:allproductshow.php?x=Deletesuccess");
}
else{
echo "error".mysqli_error($obj);
}  
	
 ?>
