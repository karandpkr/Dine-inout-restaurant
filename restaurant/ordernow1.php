<?php session_start();?> 
<?php include"header.php"?>





	<?php 
 			               $email=$_SESSION['user']; 
							$city=$_SESSION['city'];
							$local=$_SESSION['loca'];
							
							include "config.php";
		$res = mysqli_query($obj,"select * from account where `email`='$email'");
		if($row = mysqli_fetch_array($res)){
			$_SESSION['user']=$email;
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
		   	 	 	<h3 style="color:white;">&nbsp;&nbsp;&nbsp;&nbsp;Enter your details to order</h3>
						   	 
							 
								<?php
		   	 	 if(isset($_REQUEST['x']))
                 {
				 if($_REQUEST['x']=="thanks")
                  echo"<center><h5 class='red'>Thanks For ordering</h5></center><br/>";
                 } ?>
					 <div class="contact-1-main col-md-4">	
		   	 	 	<form action="addressorderdb.php" method="post" >
					  	 <p>Name</p>
					  	 <input type="text" value="<?php echo $name; ?>"  id="f" onblur="return charc(this.id)" class="form-control" placeholder="" required="" name="fname"/>
						 <span id="ferror"></span>
						  
						 <p>Email</p>
					  	 <input type="text" id="b" value="<?php echo $email; ?>" onblur="return email1(this.id)"  class="form-control" placeholder="" required="" name="email"/>
						 <span id="berror"></span>
						 <p>Address</p>
					  	 <input type="text"  placeholder="" id="q"   class="form-control"onblur="return telephone(this.id)" required=""/ name="telephone">
                         <span id="qerror"></span>
                          </div>
						   <div class="contact-1-main col-md-4">	
						 <p>Location</p>
					  	 <input type="text"  value="<?php echo $local;?>" placeholder="" id="r"    class="form-control"onblur="return telephone(this.id)" required=""/ name="telephone">
                         <span id="rerror"></span>
						 
						 <p>City</p>
					  	 <input type="text"  value="<?php echo $city;?>"placeholder="" id="w"   class="form-control"onblur="return telephone(this.id)" required=""/ name="telephone">
                         <span id="werror"></span>
						 
						 <p>Telephone</p>
					  	 <input type="text" value="<?php  echo $tele; ?>" placeholder="" id="t"   class="form-control"onblur="return telephone(this.id)" required=""/ name="telephone">
                         <span id="terror"></span> 					  	
						 
					  	 <br/><center><input type="submit" name="mybtn" value="Order Now"></center>				
				</form>
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