<?php session_start();
	
	?>
 <?php include"header.php"?>

<!--short codes start here-->
<div class="main-grid-one5" id="six">
	<div class="contact">
	    <div class="temp-heading">
		    <h3 class="main-head">Registration & Login</h3>
		</div>
		<div class="contact-1">
		   <div class="container"> 
		   	 <div class="contact-1-main col-md-6">	
	   	 	 
		   	 	 <div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
		   	 	 	<h3>Create An Account</h3>
						   	 	 <?php
		   	 	 if(isset($_REQUEST['x']))
                 {
				 if($_REQUEST['x']=="thanks")
                  echo"<center><h5 class='red'>Thanks For registration</h5></center><br/>";
                 } ?>

		   	 	 	<form action="useraccountdb.php" method="post">
					  	 <p>First Name</p>
					  	 <input type="text"  id="f" onblur="return charc(this.id)" placeholder="" required="" name="fname"/>
						 <span id="ferror"></span>
						 <p>Last Name</p>
					  	 <input type="text"  id="l" onblur="return charc(this.id)" placeholder="" required="" name="lname"/>
					  	 <span id="lerror"></span>
						 <p>Email</p>
					  	 <input type="text" id="b" onblur="return email(this.id)"  placeholder="" required="" name="email"/>
						 <span id="berror"></span>
						 <p>Password</p>
					  	 <input type="password"   placeholder="" required=""  class="form-control" name="password" /> 
					  	 <p>Telephone</p>
					  	 <input type="text"  placeholder="" id="t" onblur="return telephone(this.id)" required=""/ name="telephone">
                         <span id="terror"></span> 					  	
						<p>Website</p>
					  	 <input type="text"  name="website" 
						 placeholder="" required=""/>
					  	  
					  	 <input type="submit" name="mybtn" value="Register">
					</form>
		   	    </div> </br>
		   </div>	
		   <div class="contact-1-main col-md-6">	
	   	 	 
		   	 	 <div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
		   	 	 	<h3>Login Here!</h3>
							   	 	 <?php
		   	 	 if(isset($_REQUEST['x']))
                 {
						if($_REQUEST['x']=="notcorect")
							echo"<center><h5 class='red1'>your email or password not correct</h5></center><br/>";
						} ?>
                        <form action="logindb.php" method="post">
					  	  
					  	 <p>Email</p>
					  	 <input type="text" id="a" onblur="return email(this.id)" name="email"  placeholder="" required=""/>
						 <span id="aerror"></span>
						 <p>Password</p>
					  	<input type="password"   placeholder="" required="" name="password" id="p" onblur="return password(this.id)"  class="form-control" /> <br/><br/>
					  	 <span id="perror"></span>
						 <input type="submit"  value="Login" name="login">
					</form>
		   	    </div> </br>
		   </div>	
	
		</div>
     </div>
</div>
  </div>
 <?php include"footer.php"?>