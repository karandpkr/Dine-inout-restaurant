<?php session_start();
if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		 
	}?>
<?php include"header.php"?>

<div class="main-grid-one1"  id="one">
    <div class="home-banner">
	</div>
	</div>

	 
	
	
	<div class="clearfix"></div>
<?php include"footer.php"?>