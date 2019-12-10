<?php
session_start();
	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';				
		//header("location:index.php?x=loginfirst");
	}
?>
<?php include"header.php"?>

<div class="main-grid-one1"  id="one">
    <div class="home-banner">
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>Add Location</h1><br/><br/>
		
	<div class="container"><div class="col-md-3"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-6"
				 style="border:2px solid white;background-color:rgba(255,255,255,0.3)"><br/>
	<form action="" method="post" enctype="multipart/form-data">
					  
					   <p>Select city</p>
					  	  <select id="disabledSelect" name="cityname"class="form-control" >
			<option>Select city</option>
						 <option>Hoshiarpur</option>
						  <option>Jalandhar</option>
						  
			</select>
			 <p>Add location</p>
			 <input type="text" name="location" class="form-control">
			<input type="submit" class="btn btn-default" value="submit" name="lct">
	
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>