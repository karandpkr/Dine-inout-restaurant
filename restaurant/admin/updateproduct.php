<?php session_start();?>
<?php include"header.php"
	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';

		//header("location:index.php?x=loginfirst");
	}
	$logedin = $_SESSION['email'];
	
	
	
	
	
	if(isset($_POST['upd'])){
		$category = $_POST['s-categories'];
		$name = $_POST['p-name'];
		$price = $_POST['price'];
		$ingre =$_POST['ingredient'];
		 
		 
		$pid=$_POST['abc'];
		$type = $_POST['type'];
		$eat = $_POST['eat-noneat'];
		$des = $_POST['description'];
	 
		if(! ($_FILES['p-pic']['error']>0)){
			$fn = $_FILES['p-pic']['name'];
			$fz = $_FILES['p-pic']['size'];
			$ft = $_FILES['p-pic']['type'];
			$ftmp = $_FILES['p-pic']['tmp_name'];
			
			$a = explode(".",$fn);
			$ext = end($a);
			$myname = $name.".".$ext;
		}
		else{ $myname = $_POST['hidenpic'];}

			require_once "config.php";
			$q = "update `add-product` 
			set `s-categories`='$category',`p-name`='$name',`price`='$price',
			`ingredient`='$ingre',`type`='$type',`eat-noneat`='$eat',`description`='$des'
			,`p-pic`='$myname' where `p-id`='$pid'";
			$res = mysqli_query($obj,$q);
		if($res>0)
{
move_uploaded_file($ftmp,"upload/".$myname);
	echo '<script type="text/javascript">window.location=\'allproductshow.php?x=updatesuccess\';</script>';
//header("location:allproductshow.php?x=updatesuccess");
}
else{
echo "error".mysqli_error($obj);
}  
}

if(isset($_POST['del'])){
	
	$pid=$_POST['abc'];
	
	require_once "config.php";
			$del = "delete from `add-product` 
			 where `p-id`='$pid'";
			$res1 = mysqli_query($obj,$del);
		if($res1>0)
		{
echo '<script type="text/javascript">window.location=\'allproductshow.php?x=deletesuccess\';</script>';
//header("location:allproductshow.php?x=Deletesuccess");
}
else{
echo "error".mysqli_error($obj);
}  
	}
 ?>

                                                                                                                                                                                 