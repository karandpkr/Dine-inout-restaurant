<?php session_start();

?>
 <?php include"header.php"?>
 <style>
     .main-head,h3
     {
    color:#ECB731 !important;
     }
     h5 a
     {
         color:white !important;
     }
     p{ color:#ECB731  !important;}
	</style>

<!--short codes start here-->
<div class="home-banner">
<div class="main-grid-one5" id="six">
	<div class="contact">
	    <div class="temp-heading">
		    <h3 class="main-head">Contact</h3>
		</div>
		<div class="contact-1">
		   <div class="container"> 
		   	 <div class="contact-1-main">		   	 	 
		   	 	 <div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
		   	 	 	<h3>Send a Message</h3>
					
					<?php
		   	 	 if(isset($_REQUEST['x']))
                 {
				 if($_REQUEST['x']=="thanks")
                  echo"<center><h5 class='red'>Thanks</h5></center><br/>";
                 } ?>
					
					
		   	 	 	<form action="contactdb.php" method="post">
					  	 <p>Name</p>
					  	 <input type="text" id="n" name="name" onblur="return charc(this.id)" placeholder="" required=""/>
					  	 <span id="nerror"></span>
						 <p>Email</p>
					  	 <input type="text" id="c" name="email" onblur="return email(this.id)"  placeholder="" required=""/>
					  	 <span id="cerror" ></span>
						 <p>Telephone</p>
					  	 <input type="text" id="t1"name="telephone" onblur="return telephone(this.id)" placeholder="" required=""/>
					  	 <span id="t1error"></span>
						  
					  	  <p>Message</p>
					  	 <textarea   placeholder="" name="message" required=""> </textarea>
					  	 <input type="submit" name="send" value="Send">
					</form>
		   	    </div>
		   	    <div class="contact-left wow bounceInLeft" data-wow-delay="0.3s">

			   	 	<div class="con-phone">
						<span class="con-ph"> </span>
						<div class="con-para">
							<h6>Phone</h6>
							<p>+14372344540</p>
						</div>
						<div class="clearfix"> </div>
					</div>
                    <div class="con-address">
						<span class="con-location"> </span>
						<div class="con-para">
							<h6>Address</h6>
							<p>Conestoga college</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					 <div class="con-mail">
						<span class="con-email"> </span>
						<div class="con-para">
							<h6>Email</h6>
							<p><a href="mailto:pardeeps9217@gmail.com">pardeeps9217@gmail.com</a> &
							<a href="mailto:karandp@email.com">karandpkr@gmail.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>

		   	 	 </div>
		   	 <div class="clearfix"> </div>
		   </div>	
		    
		</div>
     </div>
</div>
  </div>
 <?php include"footer.php"?>