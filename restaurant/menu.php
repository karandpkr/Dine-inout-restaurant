<?php session_start();
	
	?>
 <?php include"header.php"?>
  <style>
	.home-banner2 {
   background:url(images/home.jpg)no-repeat;
 min-height: 600px;
    background-size: cover;   }</style>

<!--portfolio-->
<div class="home-banner2">
 

	<div class="portfolio">
	    <div class="temp-heading">
		    <h3 class="main-head">Menu</h3>
		</div>
		<div class="menu-port">
			<div class="container">	
				<div class="menu-grid-main">
				
				<?php
				include "config.php";
				$res = mysqli_query($obj,"select * from `add-categories`");
					while($row = mysqli_fetch_array($res)){
					echo"<div class='clearfix'></div>";
					echo"<p style='color:red;text-shadow:2px 2px 2px green;font-size:24px;'>". $row['c-name']."</p>";
					$cid=$row[0];
					
			$q="select * from `add-product` where `s-categories`='$cid' ";			
			$res1 = mysqli_query($obj,$q);
			
			while($row1= mysqli_fetch_array($res1)){
			
			
				
			
			
			
			
			echo"<div class='col-md-4 port-right wow bounceInLeft' data-wow-delay='0.3s'>";
			echo"<ul class='portfolio-grid'>";
			echo"<li>";
								echo"<a href='single.php?p-id=".$row1['p-id']."'><h5>".$row1['p-name']."</h5>";
								
								echo"<p>".$row1['description']."</p></a>";
						echo"</li>";

			
			
					echo"<li><a href='single.php?p-id=".$row1['p-id']."'><img class='top-grid' src='admin/upload/".$row1['p-pic']."' alt='' class='img-responsive' style='width:100%;height:220px;'></a>";
						echo"<li></li>";					
						
					echo"</li></ul><h4 class='top-grid'>  &dollar;$row1[price]</h4></div>";
					
		
			}
				}
				?> 
										
				 <div class="clearfix"> </div>
				</div>						
			</div>
		</div>
		</div>
 
		  </div>
		  
 <?php include"footer.php"?>