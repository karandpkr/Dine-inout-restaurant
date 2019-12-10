<!--footer end here-->
    <div class="footer">
		<div class="container">
			<div class="footer-main">
			<div class="col-md-4 amet-sed wow bounceInDown" data-wow-delay="0.3s">
				<h4>Information</h4>
				<p>Conestoga College Doon Campus,KItchener.</p>
				<ul class="social">
					<li><span></span>299 doon Valley drive ,Kitchener </li>
                    <li class="mail"><a href="mailto:Sasmaldahi@conestogac.on.ca"><span> </span> Sasmaldahi@conestogac.on.ca </a></li>
					<li class="mail"><a href="mailto:Kkarandeepkaur2370@conestogac.on.ca"><span> </span> Kkarandeepkaur2370@conestogac.on.ca</a></li>
					<li class="mail"><a href="mailto:Pgalsian6451@conestogac.on.ca"><span> </span>Pgalsian6451@conestogac.on.ca  </a></li>
				</ul>
				</div>
				 
				 <div class="col-md-5 ftr-grid wow bounceInUp" data-wow-delay="0.3s">
				 	<h4>Newsletter</h4>
				 	<form action="" method="post">
				 		<input type="text" id="emai" onblur="return email(this.id)" placeholder="Email Address" required=""><br/><br/>
				 		<span id="emaierror"></span>
						<input type="submit"  value="subscribe">
			 	</form>
				 </div>
				 <div class="col-md-3 ftr-grid wow bounceInLeft" data-wow-delay="0.3s">
				 	<ul class="ftr-nav">
				 		<li><a href="index.php">Home</a></li>
						<li><a href="reservation.php">Reservation</a></li>
						<li><a href="menu.php">Menu</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li class="menu-item"><?php  if(!isset($_SESSION['user']))
			 {
			echo"<a href='logaccount.php' class='menu-link'> ";
					
					echo"Login";
					
					echo"</a></li>";
					}
					
					
					else
					{
					echo"<a href='logout.php' class='menu-link'> ";
					echo"Logout";
					
					echo"</a></li>";
					
					}?>
				 	</ul>
				 </div>
			 <div class="clearfix"> </div>
			</div>
		</div>
    </div>
    <div class="copy-right wow shake" data-wow-delay="0.3s">
    	 <p>© 2019 Dine INOUT RESTAURANT . All Rights Reserved | Design by Karandeep Kaur & pardeep Singh & Sufyan </a> </p>
    </div>
</div>



<!-- animated-css -->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		
<script type="text/javascript" src="js/ui.js"></script>
		<script src="js/wow.min.js"></script>
		<script>
		 new WOW().init();
		</script>
		<script>
	$( function() {
$( "#datepicker" ).datepicker({ minDate: 0, maxDate: "+1M +10D" });
} );
</script>
<!-- animated-css -->


</body>
</html>