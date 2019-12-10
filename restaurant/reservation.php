<?php
session_start();
	
	?>
	
<?php include"header1.php"?>

	
	<div class="reservation"><br/><br/><br/>
		<div class="container">
			<center><h4 class="title w3agile wow fadeInDown animated " style="color:brown; 
			font-size:50px; " data-wow-delay=".5s">Make a Reservation </h4></center><br/><br/>
 
			<div class="book-info">
				<div class="col-md-5 book-left wow fadeInLeft animated" data-wow-delay=".5s">
					<h4 class="wow fadeInDown animated" data-wow-delay=".5s">Working Hours:</h4>
					<h5 class="wow fadeInDown animated" data-wow-delay=".6s">Monday – Saturday 8:00 a.m – 11:00 p.m <br>
						Sunday 10 a.m – 9 p.m <br>
						<span class=" "></span> +14372344540 </h5>
					<span class="burger wow zoomIn animated" data-wow-delay=".7s"> </span>
				</div>
				<div class="col-md-7 book-right agileinfo wow fadeInRight animated" data-wow-delay=".5s">
					
					<?php
		   	 	 if(isset($_REQUEST['x']))
                 {
				 if($_REQUEST['x']=="thanks")
                  echo"<center><h6 style='color:white;font-size:24px;' >Congratulation! Your Reservation is booked plz check your email for further booking detail.....</h6></center><br/>";
                 } ?>
					
					
					
					
					<form action="reservationdb.php" method="post">
						<label class="wow fadeInDown animated" data-wow-delay=".5s">Date :</label>
						<input class="wow fadeInDown animated" 
						data-wow-delay=".5s" type="text" name="date" required="" id="datepicker">
						<div class="form-left wow fadeInDown animated" data-wow-delay=".7s">
							<label>No.of People :</label>
							<select class="form-control" required="" name="person">
								<option>1 Person</option>
								<option>2 People</option>
								<option>3 People</option>
								<option>4 People</option>
								<option>5 People</option>
								<option>More</option>
							</select>
						</div>
						<div class="form-right wow fadeInDown animated" data-wow-delay=".7s">
							<label>Time :</label>
							<input type="time" required="" name="time">
						</div>
						<div class="clearfix"> </div>
						<label class="wow fadeInDown animated" data-wow-delay=".9s">Contact Info :</label>
						<input class="wow fadeInDown animated" data-wow-delay=".9s" type="text" name="contact"value="Contact Info" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'contact';}" required="">
						<label class="wow fadeInDown animated" data-wow-delay=".9s">Email :</label>
						<input class="wow fadeInDown animated" data-wow-delay=".9s" type="text" name="email"value="email" required="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'email';}" required="">
						<input type="submit" name="myreserve" value="Book a Table">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>	
	<?php include"footer.php"?>