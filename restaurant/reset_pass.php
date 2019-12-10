<?php session_start();
	
	 
?>
<?php include"header.php"?>
<div class="main-grid-one1"  id="one">
    <div class="home-banner">
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>New Password</h1><br/><br/>
		
	<div class="container"><div class="col-md-3"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-6"
				 style="border:2px solid white;background-color:rgba(255,255,255,0.3)"><br/>
	 
	 
	 
	 <form action="update_pass.php" method="post">
			 
                    <p>Enter New Password</p> 
                                    <input type="password" class="form-control" name="pass1" required=""  >
                     <p>Confirm Password</p>
                                    <input type="password" class="form-control" name="pass2" required=""  >
                  	<br/>
						<center><input type="submit" name="submit" value="Update Password" class="btn btn-primary"  >
		</center><br/>
		</form>
	
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>