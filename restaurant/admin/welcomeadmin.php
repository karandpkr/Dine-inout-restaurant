<?php session_start();
	
	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
	?>
	<?php include"header.php"?>
	



<div class="main-grid-one1"  id="one">
    <div class="home-banner">
		<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>Welcome Admin</h1><br/><br/>
					 
				<div class="container"><div class="col-md-4"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				  
	   	 	 
				
		   	 	 	 
		   	 	
		   	    </div> 
		   </div>
		   </div>
			
		</div>
    </div>
 </div>

	 
	
	<?php include"footer.php" ?>
