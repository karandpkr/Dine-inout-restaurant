<?php session_start();
?>
<?php include"header.php"?>
	
<!--portfolio-->
<div class="main-grid-one4" id="five">

	<div class="portfolio">
	    <div class="temp-heading">
		    <h3 class="main-head">Menu</h3>
		</div>
		<div class="menu-port">
			<div class="container">	
				<div class="menu-grid-main">
				
				<?php
				include "config.php";
			$res = mysqli_query($obj,"select * from `add-product`");
			while($row = mysqli_fetch_array($res)){
			echo"<div class='col-md-4 menu-grid wow bounceInDown' data-wow-delay='0.3s'>";
					echo"<a href='single.php?p-id=".$row['p-id']."'><img src='admin/upload/".$row['p-pic']."' alt='' class='img-responsive' style='width:100%;height:160px;'></a>";
						echo"<h4>".$row['p-name']." ---------------------------- &#8377;$row[price]</h4>";					
						echo"<p></p>";
					echo"</div>";
					
		
			}
				
				?> 
										
				 <div class="clearfix"> </div>
				</div>						
			</div>
		</div>
<!--enjoy-->
		<div class="enjoy-food">
			<div class="container">
				<h3>Enjoy Your Lunch</h3>
			</div>
		</div>
<!--portfolio-->
		<div class="portfolio-1">
		   <div class="container"> 
		   	 <div class="portfolio-1-main">
		   	 	<div class="col-md-4 port-right wow bounceInLeft" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="images/p1.jpg" alt=""/></li>
					</ul>
				</div>
				<div class="col-md-4 port-right wow bounceInDown" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="images/p2.jpg" alt=""/></li>
					</ul>
				</div>
				<div class="col-md-4 port-right wow bounceInRight" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="images/p3.jpg" alt=""/></li>
					</ul>
				</div>
				
				<div class="col-md-4 port-right wow bounceInUp" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="images/p4.jpg" alt=""/></li>
					</ul>
				</div>
				<div class="col-md-4 port-right wow bounceInUp" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="images/p5.jpg" alt=""/></li>
					</ul>
				</div>
				<div class="col-md-4 port-right wow bounceInLeft" data-wow-delay="0.3s">
					<ul class="portfolio-grid">
						<li>
								<h5>we denounce with right</h5>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
						</li>
						<li><img class="top-grid" src="images/p6.jpg" alt=""/></li>
					</ul>
				</div>
					<div class="clearfix"> </div>
		   	   </div>
		    </div>			    	     
		</div>
		  </div>
 <?php include"footer.php"?>