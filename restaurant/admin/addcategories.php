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
				<h1>Add Categories</h1><br/><br/>
					<?php
		   	 	 if(isset($_REQUEST['x']))
                 {
				 if($_REQUEST['x']=="thanks")
                  echo"<center><h5 class='green'>Thanks for Add category</h5></center><br/>";
                 } ?>
				<div class="container"><div class="col-md-4"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-4"style="border:2px solid white;background-color:rgba(203,194,180,1)"><br/>	
	   	 	 
				
		   	 	 	 
		   	 	 	<form action="savecategory.php" method="post">
					  	  
					  	 <p style="font-size:20px;">Enter Categories</p><br/>
					  	 <input type="text" id="a"    placeholder="" required="" name="c-name" class="form-control"/>
						 
						  <br/> 
					    <center><input type="submit"  value="Go" name="sub1"></center>
					</form><br/>
		   	    </div> 
		   </div>
		   </div>
			
		</div>
    </div>
 </div>

	 
	
	<?php include"footer.php" ?>
