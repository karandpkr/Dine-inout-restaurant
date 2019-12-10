<?php session_start();
	
	if(!isset($_SESSION['user'])){
	echo '<script type="text/javascript">window.location=\'logaccount.php?x=loginfirst\';</script>';				
		//header("location:logaccount.php?x=loginfirst");
	}
	
	
	if(!isset($_SESSION['loca'])){
	echo '<script type="text/javascript">window.location=\'location.php?x=location\';</script>';				
		//header("location:location.php?x=location");
	}
	?>

 <?php include"header.php"?>


	<?php 
 			               $email=$_SESSION['user']; 
							$city=$_SESSION['city'];
							$local=$_SESSION['loca'];
							
							include "config.php";
		$res = mysqli_query($obj,"select * from account where `email`='$email'");
		if($row = mysqli_fetch_array($res)){
			
			$name=$row['fname'];
				$tele=$row['telephone'];
			
		}
							
							
							?>
							
<div class="main-grid-one1"  id="one">
    <div class="home-banner">

<div class="main-grid-one5" id="six">
	<div class="contact">
	    <div class="temp-heading">
		    <h3 class="main-head"></h3>
		</div>
		<div class="contact-1">
		   <div class="container"> 
		   <div class="contact-1-main col-md-3"></div>
		   	 <div class="contact-1-main col-md-8">	
	   	 	
		   	 	 <div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
		   	 	 	<h3 style="color:#ECB731 !important;">&nbsp;Enter your details to order</h3>
						   	 
							 
								<?php
		   	 	 if(isset($_REQUEST['x']))
                 {
				 if($_REQUEST['x']=="thanks")
                  echo"<center><h5 class='red'>Thanks For Add Address</h5></center><br/>";
                 } ?>
					 <div class="contact-1-main col-md-4">	
		   	 	 	<form action="addressorderdb.php" method="post" >
					  	 <p style="color:#ECB731 !important";>Name</p>
					  	 <input type="text" value="<?php echo $name; ?>"  id="f" onblur="return charc(this.id)" class="form-control" placeholder="" required="" name="name"/>
						 <span id="ferror"></span>
						  
						 <p style="color:#ECB731 !important";>Email</p>
					  	 <input type="text" id="b" value="<?php echo $email; ?>" onblur="return email1(this.id)"  class="form-control" placeholder="" required="" name="email"/>
						 <span id="berror"></span>
						 <p style="color:#ECB731 !important";>Telephone</p>
					  	 <input type="text" value="<?php  echo $tele; ?>" placeholder="" id="t"   class="form-control"onblur="return telephone(this.id)" required=""/ name="telephone">
                         <span id="terror"></span> 
							<p style="color:#ECB731 !important";>Location</p>
					  	 <input type="text"  value="<?php echo $local;?>" placeholder="" id="r"    class="form-control"onblur="return telephone(this.id)" required=""/ name="location">
                         <span id="rerror"></span>						 

                      </div>
						   <div class="contact-1-main col-md-4">	
						 
						 
						 <p style="color:#ECB731 !important";>City</p>
					  	 <input type="text"  value="<?php echo $city;?>"placeholder="" id="w"   class="form-control"onblur="return telephone(this.id)" required=""/ name="city">
                         <span id="werror"></span>
						 
						 <p style="color:#ECB731 !important";>Street</p>
					  	 <input type="text"  placeholder="" id="q"   class="form-control"onblur="return telephone(this.id)" required=""/ name="address">
                         <span id="qerror"></span>
						 <p style="color:#ECB731 !important";>Pincode</p>
					  	 <input type="text"  placeholder="" id="e"   class="form-control" required="" name="pincode"/>
                         <span id="eerror"></span> 
                         					  	
						 
					  	 <br/><br/><center><input type="submit" name="mybtn" value="Order Now"></center>				
                         </div></form>
						</div>  
					  	 
		   	    </div> </br>
		   </div>	
	</div>	    
</div>	
		</div>
     </div>
</div>
  </div>
 <?php include"footer.php"?>