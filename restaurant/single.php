<?php session_start();?>
<?php include"header.php"?>
 <?php if(!isset($_REQUEST['p-id'])){
 echo '<script type="text/javascript">window.location=\'menu.php?x=first_select_product_from_menu\';</script>';			
 //header("location:menu.php?x=first_select_product_from_menu");
 
			}
			

 
 if(isset($_REQUEST['p-id'])){
				$pid = $_REQUEST['p-id'];
			}
			require_once "config.php";
			$q = "select * from `add-product` where `p-id`='$pid'";
			$res = mysqli_query($obj,$q);
			while($row = mysqli_fetch_array($res))
			{
	
		$category = $row['s-categories'];
		$name = $row['p-name'];
		$price = $row['price'];
		$ing = $row['ingredient'];
		 $type = $row['type'];
		$eat = $row['eat-noneat'];
		$des = $row['description'];
		$pic =$row['p-pic'];
	}
	
	
	?>
 
 


<div class="home-banner2"> 
<div class="single">
 
	<div class="container">
					<div class="blog-to">		
					<div class="col-md-5">
						<img class="img-responsive sin-on wow bounceInLeft" data-wow-delay="0.3s"  src="admin/upload/<?php echo$pic;?>" style="width:80%;height:400px;" alt="" />
							</div>
							<div class="col-md-7">
							
						 
						
							<div class="top-blog wow bounceInDown" data-wow-delay="0.3s">
									<table class="table">
									<tr><td><h1 style="color:red;font-family:lato-light;">
									<?php 	echo$name; ?></h1></td>
									<td class="">
									<h1 style="color:green; font-family:lato-light;">&dollar;<?php 	echo $price; ?></h1></td>
									</tr><tr>
									<td>
									<h2 style="color:red;font-family:lato-light;"> Type:</h2>
									</td>
									<td>
									<h2 style="color:green;font-family:lato-light;"><?php echo$type; ?></h2></td>
									</tr><tr>
									<td>
									<h2 style="color:red;font-family:lato-light;"> Eat/Non-eat:</h2></td>
									<td>
									<h2 style="color:green;font-family:lato-light;"><?php echo$eat; ?></h2></td>
                                        </tr><tr>
									
									<td>
									<h2 style="color:red;font-family:lato-light;"> Ingredient:</h2>
									</td>
									<td>
									<h2 style="color:GREEN;font-family:lato-light;">
									<?php $arr = explode(",",$ing);
						foreach($arr as $int){
							if($int!=="")
							echo $int." ";
						} ?></h2></td>

						
							</tr><tr><td>
							<h2 style="color:red;font-family:lato-light;"> Description:</h2></td>
								<td>
								<h2 style="color:GREEN;font-family:lato-light;"><?php echo$des; ?></h2></td>
					</tr>
							</table>
							<div class="col-md-4"></div>
							
							<div class="col-md-6">
							<a href="addtocart.php?id=<?php echo $pid; ?>">
							<input type="button" value="Add to Cart" class="btn btn-danger" name="cart"/>
							
							</a>
							<?php 
							if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
							{
							echo"<a href='location.php'><input type='submit' value='Order Now' class='btn btn-danger' name='cart'/></a></div>";
							
							}?>
							
							
							<div class="col-md-2">
							
							
							</div>
								
								
								</div>
					</div>			
	<div class="clearfix"> </div>
							 
							
					
					</div>
 
		 
		 
		</div>
	
	
	</div>
	 
	<div>
	
<div class="main-grid-one4" id="five">
	<div class="portfolio">			<br/><h3><center style="color:red;text-shadow:1px 1px 1px green;">
	Recomanded product by us</center></h3>
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

			
			
					echo"<li><a href='single.php?p-id=".$row1['p-id']."'><img class='top-grid img_responsive'  src='admin/upload/".$row1['p-pic']."' alt='' class='img-responsive' style='width:100%;height:220px;'></a>";
						echo"<li></li>";					
						
					echo"</li></ul><h4 class='top-grid'>  &dollar; $row1[price]</h4></div>";
					
		
			}
				}
				?> 
										
				 <div class="clearfix"> </div>
				</div>						
			</div>
		</div>
		   		    	     
		</div>
		  </div>
	
	 
		
		</div>
<!--single page end here-->
 <?php include"footer.php"?>