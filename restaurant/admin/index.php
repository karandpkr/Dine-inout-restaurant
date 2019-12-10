<?php include"adminheader.php"?>


<div class="main-grid-one1"  id="one">
    <div class="home-banner">
		<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>Admin</h1><br/><br/>
				
				<div class="container"><div class="col-md-4"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-4"style="border:2px solid white;background-color:rgba(203,194,180,1)"><br/>	
	   	 	 
		   	 	 
		   	 	 	 
		   	 	 	<form action="adminlogindb.php" method="post" >
					  	  
					  	 <p>Email</p>
					  	 <input type="text" class="form-control" name="email" id="a" onblur="return email(this.id)"   placeholder="" required=""/>
						 <span id="aerror"></span>
						 <p>Password</p>
					  	<input type="password" name="pass"  placeholder="" required="" id="p" onblur="return password(this.id)"  class="form-control" <br/><br/>
					  	 <span id="perror"></span>
						 			<?php 
					if(isset($_REQUEST['email']))
						{
						echo"<center><h5 class='red'>email or password not correct</h5></center><br/>";
							} ?><center><input type="submit"  value="Login" name="sub"></center>
					</form><br/>
		   	    </div> </br>
		   </div>
		   </div>
			
		</div>
    </div>
 

	 
	
	<?php include"footer.php" ?>
