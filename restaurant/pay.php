<?php
session_start();
	
	if(!isset($_SESSION['user'])){
	echo '<script type="text/javascript">window.location=\'logaccount.php?x=loginfirst\';</script>';				
		//header("location:logaccount.php?x=loginfirst");
		}
	
?>
<script src="payjs.js" ></script>
<?php include"header.php"?>
<div class="home-banner2">
<div class="main-grid-one1"  id="one">
   
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>Select Payment Option </h1> 
		
	<div class="container"><div class="col-md-3"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-6"
				 style="border:2px solid white;background-color:rgba(255,255,255,0.3)"><br/>
	
	
	
	<div class="clearfix"></div>
	<form action="paynowfinal.php" method="post">
					    <div class="row" style=" ;">
					    <div class="col-md-5">
						<ul class="nav nav-pills nav-stacked">
							
							<li role="presentation"><input type="button" style="width:160px" onclick="credit();" 
							class="btn btn-primary btn-lg" value="Credit Card"/></li><br/>


							<li role="presentation" ><input type="button" style="width:160px"
							onclick="debit()" class="btn btn-primary btn-lg" value="Debit Card"/></li>
						
						<br/>
						
						<li role="presentation"><input type="button" onclick="net()" 
						class="btn btn-primary btn-lg"style="width:160px" value="Netbanking"/></li>
						<br/>
						
						<li role="presentation"><input type="button" onclick="cash()" 
						class="btn btn-primary btn-md" style="width:160px;height:40px;" value="Cash On Delivery"/></li>
							 <br/></ul>
						</div>
						
						
						<div class="col-md-6" style="display:block;" id="info"></br>
						<p style="font-size:37px;text-align:center;text-shadow:1px 1px 4px red;">Select Your Payment Option<p>
						</div>
						
						<div class="col-md-6" style="display:none;" id="clicki"></br>
						<input type="hidden" name="paymentmethod" value="Credit Card"/>
					 
					 <p>Select Bank</p>
        <select id="credi" name="select" class="form-control" >
					<option value="" selected="selected">Choose a Bank</option>
        <option value="CIBC" >CIBC Bank</option>
        <option value="Scotia" >Scotia Bank</option>
        <option value="TD" > TD canada Bank</option>
           <option value="RBC" > RBC Royal Bank</option>
	
					 </select>
					 
					  <p>Name or Card </p><input type="text" id="name" name="name" class="form-control">
					 <p>Card No</p><input type="text" id="cname" name="card" class="form-control ">
					 <div class="form-group">
					 
					 <p>Expire Date</p><select id="ename" name="expire" class="form-control form-group ">
					  <option>mm</option><option>01</option><option>02</option>
					  <option>03</option><option>04</option>
					  <option>05</option><option>06</option><option>07</option>
					  <option>08</option><option>09</option><option>10</option>
					  <option>11</option><option>12</option>
							  
					 
					 </select>
					<select id="ename" name="year" class="form-control form-group ">
					<option>yy</option>
					 <option>2016</option>
					 <option>2017</option>
					  <option>2018</option>
					   <option>2019</option>
					    <option>2020</option>
						 <option>2021</option>
						  <option>2022</option>
						  
						   <option>2023</option>
						    <option>2024</option> 
							<option>2025</option>
							<option>2026</option>
							 <option>2027</option>
							  <option>2028</option>
							  
							  <option>2029</option>
						    <option>2030</option> 
							<option>2031</option>
							<option>2032</option>
							 <option>2033</option>
							  <option>2034</option>
							  <option>2035</option>

						</select>
					</div>
					 <p> Security Code </p><input type="text" name="security" id="sname" class="form-control">
						
						<input type="submit"  value=" Continue" class="btn btn-danger btn-lg" name="btn" id="btn" ><br/>
					<br/>
					</div>
						
						
						
						
						
						
						
						<div class="col-md-6" style="display:none;" id="clicki1"></br>
					<p>Select Bank</p>
                    <select id="credi" name="select" class="form-control" >
					<option value="" selected="selected">Choose a Bank</option>
        <option value="CIBC" >CIBC Bank</option>
        <option value="Scotia" >Scotia Bank</option>
        <option value="TD" > TD canada Bank</option>
           <option value="RBC" > RBC Royal Bank</option>
	
					 </select>
					 <input type="hidden" name="paymentmethod1" value="Debit Card"/>
					<p> Name or Card</p><input type="text" name="name1"id="name" class="form-control">
					 <p>Card No</p><input type="text" name="card1" id="cname" class="form-control ">
					 <div class="form-group">
					 
					  <p>Expire Date </p><select id="ename"name="expire1"  class="form-control form-group ">
					  <option>mm</option>
					 <option>01</option>
					 <option>02</option>
					  <option>03</option>
					   <option>04</option>
					    <option>05</option>
						 
						  <option>06</option><option>07</option><option>08</option> 
							<option>09</option>
							<option>10</option>
							 <option>11</option>
							  <option>12</option>
							  
					 
					 </select>
					<select id="ename" name="year1" class="form-control form-group ">
					<option>yy</option>
					 <option>2016</option>
					 <option>2017</option>
					  <option>2018</option>
					   <option>2019</option>
					    <option>2020</option>
						   <option>2021</option>
						   <option>2022</option>
						  
						    <option>2023</option>
						    <option>2024</option> 
							<option>2025</option>
							<option>2026</option>
							<option>2027</option>
							<option>2028</option>
							  
							<option>2029</option>
						    <option>2030</option> 
							<option>2031</option>
							<option>2032</option>
							<option>2033</option>
							<option>2034</option>
							<option>2035</option>

					</select>
					</div>
					 <p> Security Code </p><input type="text" name="security1" id="sname" class="form-control">
						
						<input type="submit"  value=" Continue" class="btn btn-danger btn-lg" name="btn1" id="btn" >
						<br/><br/>
						
						
						</div>
						
					
                 

		<div class="col-md-6" id="clicki2" style="display:none;">
<input type="hidden" name="paymentmethod2" value="Netbanking"/>
					
				 <p>Select Bank </p>	
            <select id="credi" name="select" class="form-control" >
					<option value="" selected="selected">Choose a Bank</option>
        <option value="CIBC" >CIBC Bank</option>
        <option value="Scotia" >Scotia Bank</option>
        <option value="TD" > TD canada Bank</option>
           <option value="RBC" > RBC Royal Bank</option>
	
					 </select><br/><br/>
	<center><input type="submit" value="Continue" name="btn2" id="btn" class="btn btn-danger btn-lg">
	</center>
     
	 </div>			
			<div class="col-md-6" id="clicki3" style="display:none;">
			<input type="hidden" name="paymentmethod3" value="cod"/>
<br/><br/><br/><br/><br/>			
						<center><input type="submit" value="Continue" name="btn3" id="btn" class="btn btn-danger btn-lg">
	</center>
	</div>
						
							</div>





						</form>
						<br/>
	
	</div>
	</div>
	</div>
	</div>
	 
	</div>

	
 </div>
	
	<div class="clearfix"></div>
<?php include"footer.php"?>