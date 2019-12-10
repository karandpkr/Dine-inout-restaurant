<?php session_start();
	
	?>
	<?php  if(isset($_SESSION['user'])){ 
	echo '<script type="text/javascript">window.location=\'ordernow.php\';</script>';				
    //header("location:ordernow.php");	
	}  ?>
	<style>
	.home-banner1 {
     background:url(images/jiji.jpg)no-repeat; 
	  min-height: 733px;
    background-size: cover;}</style>
	
 <?php include"header.php"?>


	<?php if(isset($_REQUEST['lct'])){
 			
							$_SESSION['city']=$_REQUEST['city'];
							$_SESSION['loca']=$_REQUEST['locality'];
							}
							?>
<!--short codes start here-->
<div class="home-banner1">
<div class="main-grid-one5" id="six">
	<div class="contact">
	    <div class="temp-heading">
		    <h3 class="main-head"> Login</h3>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<center>
   
  <a href="loginaccount.php" style="font-size:30px;"><b >New user! Register Here</b></a>
   

</center>
</div>
		
		<div class="contact-1">
		   <div class="container"> 
		 
		
	<div class="contact-1-main col-md-6 col-md-offset-3">	
	   	 	 
		   	 	 <div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
		   	 	 	<center><h3>Login Here!</h3></center>
							   	 	 <?php
		   	 	 if(isset($_REQUEST['x']))
                 {
						if($_REQUEST['x']=="notcorect")
							echo"<center><h5 class='red1'>your email or password not correct</h5></center><br/>";
						} ?>
                        <form action="logindb.php" style="border:5px solid white;padding:10px;" method="post">
					  	  
					  	 <p>Email</p>
					  	 <input type="text" id="a" class="form-control" onblur="return email1(this.id)" name="email"  placeholder="" required=""/>
						 <span id="aerror" style="font-size:20px;"></span>
						 <p>Password</p>
					  	<input type="password"class="form-control"   placeholder="" required="" name="password" id="p" onblur="return password(this.id)"  class="form-control" /> <br/><br/>
					  	 <span id="perror"style="font-size:20px;"></span>
						 
						 
						 <a href="forgetpass.php" style="color:red; font-size:15px; margin-left:370px;">forget password!</a>
						 <center><input type="submit"  value="Login" name="login"></center>
					</form>
		   	    </div> </br>
		   </div>	
		   
		  
		   
		  </div>
     </div>
</div>
  </div>
  </div>
 <?php include"footer.php"?>