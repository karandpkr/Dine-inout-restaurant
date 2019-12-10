<!DOCTYPE HTML>
<html>
<head>
<style>

			

	
.red{color:red;}

.green{
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
p
{
font-size:21px;}

</style>
<title> Restaurant & Food Management</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/style2.css" />

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
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/email.js"></script>
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script> 

<style>body{padding-top:140px;}</style>
	<!-- start-smoth-scrolling -->
</head>
<body>

<?php
function ciplav($str){
	$str = trim($str);
	$str =  stripslashes($str);
	$str = htmlspecialchars($str);
	return $str;
}
?>
<!--horizan start here-->
<div class="top-navg ">
	<div class="container">
		<div class=" logo wow tada" data-wow-delay="0.3s">
			<span class="anima"><h2 style="color:white;">RESTAURANT & FOOD MANAGEMENT</h2></span>
		</div>
		<div class="navigation">	
			<span class="menu-ic"><img src="images/menu2.png" alt=""></span>
			<div class="menu menu-li">
				<ul class="menu-list">
					<li class="menu-item "><a href="index.php" class="menu-link"> </a></li>
					
					<li role="presentation" class="dropdown">
					  <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						 <span style="color:white;"> <b>Add</b> </span><span class="caret"></span>
					  </a>
					  <ul class="dropdown-menu">
						<li class="menu-item"><a href="addcategories.php" class="menu-link"><span style="color:mehroon;font-size:20px;">New category</span></a></li>
						<li class="menu-item"><a href="addproducts.php" class="menu-link"><span style="color:mehroon;font-size:20px;">New Product</span></a></li> 
							<li class="menu-item"><a href="addlocation.php" class="menu-link"><span style="color:mehroon;font-size:20px;">Location</span></a></li> 
					  </ul>
					</li>
				 
				 <li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					 <span style="color:white;"><b> Manage</b> </span><span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
					  <li class="menu-item"><a href="allcategoryshow.php" class="menu-link">
					     <span style="color:mehroon;font-size:20px;"> category</span></a></li>
					  <li class="menu-item"><a href="allproductshow.php" class="menu-link">
					     <span style="color:mehroon;font-size:20px;">Product</span></a></li> 
					</ul>
                 </li>
  <li class="menu-item"><a href="reservation.php" class="menu-link"><b>Reservations</b></a></li>
			        <li class="menu-item"><a href="allorder.php" class="menu-link"><b>All Orders</b></a></li>
				     
					<li class="menu-item"><a href="logout.php" class="menu-link"><b>Logout</b></a></li>
				
				 		
		 				 	
	 
	
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
	<div class="clearfix"></div>
</div>
</div>