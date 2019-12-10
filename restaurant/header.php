<!DOCTYPE HTML>
<html>
<head>
<style>
.red{
color:red;
font-size:22px;}
.red1{
color:red;
font-size:20px;}
.anima{
color:white;

position:relative;}
.anima:hover{
text-shadow:0px 0px 10px cyan;


transform:rotate(180deg);
}
span{
color:red;}
.home-banner2 {
   background:url(images/home.jpg)no-repeat;
 min-height: 600px;
    background-size: cover;   }

</style>
<title> Restaurant & Food Management</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style2.css" />


 <link rel="stylesheet" href="js/jquery-ui.css">
  
  
  


 

<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Hot Cuisine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts start-->
<link href='//fonts.googleapis.com/css?family=Ruluko' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Work+Sans:400,600,500,700,800,900,200,300' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="script2.js"></script>
<script type="text/javascript" src="js/email.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 
<script type="text/javascript" src="design/js/jquery-ui.js"></script>
	<!-- start-smoth-scrolling -->
</head>
<body>
<!--horizan start here-->
<div class="top-navg ">
	<div class="container-fluid">
		<div class=" logo wow tada" data-wow-delay="0.3s">
			<span class="anima"><h2 style="color:white;">Dine INOUT RESTAURANT </h2></span>
		</div>
		<div class="navigation">	
			<span class="menu-ic"><img src="images/menu2.png" alt=""></span>
			<div class="menu menu-li">
				<ul class="menu-list">
					<li class="menu-item "><a href="index.php" class="menu-link">Home</a></li>
					<li class="menu-item"><a href="reservation.php" class="menu-link">Reservation</a></li>
                     <li class="menu-item"><a href="menu.php" class="menu-link">Menu</a></li>
					<li class="menu-item"><a href="about.php" class="menu-link">About</a></li>
					<!--<li class="menu-item"><a href="services.php" class="menu-link">Services</a></li>-->
					<li class="menu-item"><a href="contact.php" class="menu-link">Contact</a></li>
					<li class="menu-item"><?php  if(!isset($_SESSION['user']))
			 {
			echo"<a href='logaccount.php' class='menu-link'> ";
					
					echo"Login";
					
					echo"</a></li>";
					}
					
					
					else
					{
					echo"<a href='logout.php' class='menu-link'> ";
					echo"Logout";
					
					echo"</a></li>";
					
					}?>
					
					<?php $t = 0;
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
	foreach($_SESSION['cart'] as $id=>$quantity){
			$t++;
	}
	count($_SESSION['cart']);
}

?>
					<li class="menu-item"><a href="checkout.php" class="menu-link">
					<span class="glyphicon glyphicon-shopping-cart" style="color:white;font-size:25px;"></span>
	
					<?php echo $t; ?>
					</a></li>
					
                    
		<li class="menu-item">
				<a href="myorder.php" style="pointer:normal"class="menu-link">
					<span class="glyphicon glyphicon-check" style="color:white;font-size:25px;">
					</span></a></li>
				</ul>
			</div>

			 <script>
				   $( "span.menu-ic" ).click(function() {
					 $( ".navigation ul" ).slideToggle( 300, function() {
					 // Animation complete.
					  });
					 });
				</script>
	</div>
	<ul class=" head-icons wow bounceInRight" data-wow-delay="0.3s">
				 		<?php
             if(isset($_SESSION['user']))
			 {
			 
               $logedin=$_SESSION['user'];

          include "config.php";
	      $res = mysqli_query($obj,"select * from `account` where email='$logedin'");
	      while($row = mysqli_fetch_array($res))
		  {
           $name=$row['fname'];
		   echo"<br/><b><span style='color:white;'>Welcome ".$name."<b></span>";
          }}?>
		 				 	</ul>
	<div class="clearfix"></div>
</div>
</div>