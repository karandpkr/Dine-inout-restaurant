<?php include"header.php"?>
<?php session_start();
	
 
?>
<div class="main-grid-one1"  id="one">
    <div class="home-banner">
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>Reset Password</h1><br/><br/>
		
	<div class="container"><div class="col-md-3"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-6"
				 style="border:2px solid white;background-color:rgba(255,255,255,0.3)"><br/>
	
	
	
	
	
	<form action="forget_pass.php" method="post">
			 
                
                    <p>Email</p>   
                   <input type="text" class="form-control" name="tname" required=""  >
                               
					<p>Security Question</p>
                                   <select name="security" required="" class="form-control" >
										<option>Select security Question?</option>
										<option>What is Your Pet Name?</option>
										<option>Who is Your Favourite Person?</option>
										<option>What is the Name of Your First School?</option>
										<option>What is the Name of Your favourite movie?</option>
										<option>What is  Your favourite game?</option>
								   </select>
						<p>Answer</p>
                                    <input type="text" class="form-control" name="answer" required="">
                           		 <center> <input type="submit" name="submit" value="Recover Now" class="btn btn-danger" ></center>
								<br/>				</form>
	
	
	
	
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>