<?php session_start();
	
	?>
<?php include"header.php"?>

	<script src="locationajax.js"></script>
<div class="main-grid-one1"  id="one">
    <div class="home-banner">
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>Add Location</h1><br/><br/>
		
	<div class="container"><div class="col-md-1"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-10"
				 style="border:2px solid white;background-color:rgba(17,114,154,0.8); height:250px;" ><br/>
	
	<p style="color:white; font-size:26px;">Home Delivery</p><br/>
	<div class="row" style="margin-left:8px; ">
	
	<div class="col-md-4">
	
	
	
	<form action="logaccount.php" method="post">
<select  id="city" name="city"class="form-control" style="height:48px;width:270px; font-size:18px; color:blue;">	     
		 <option value="0">Select City</option>
		 
						<option >Kitchener</option>
						<option >Waterloo</option>
                        <option >Cambridge</option>
	
						
						
						
						
						 </select>
        </div>
		<div class="col-md-4">
		<input type="text" name="locality" id="click" onkeyup="locationq(this.value)" class="form-control"  style="height:48px;width:270px;font-size:18px;color:blue;">
		<span id="sp"></span>
		<div style="display:none;" id="divi"> </div>
					 
		</div>
		<div class="col-md-4">
		<input type="submit" name="lct" onclick="return sharmaH()" value="Build Your Order" style="Width:240px;height:47px;font-size:20px;" class="btn btn-danger"/>
		</div></form>	

		
	
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>