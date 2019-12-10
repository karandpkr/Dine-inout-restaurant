<?php session_start();
	
	
	
	if(!isset($_SESSION['user'])){
	echo'<script type="text/javascript">window.location=\'logaccount.php?x=loginfirst\';</script>';		
		//header("location:logaccount.php?x=loginfirst");
		}
		?>
	
<?php include "header.php";?>
<style>

	.immanu{
		width:100px !important; height:100px !important;
	}
</style>
<div class="home-banner2">
<div class="single">
	<div class="container">
	 <section>
         <!-- FIRST BLOCK --> 	
         <div id="first-block">
           
<div class="row">
				<div class="col-md-1 col-md-offset-1"> Srno</div>
				  <div class="col-md-2 ">
					Item Name
				  </div>
				  
				   <div class="col-md-2">
    Product Pic				
               </div>
			  <div class="col-md-2">
				Quantity
			 </div> 
			 <div class="col-md-2">
					Price
			 </div> 
		<div class="col-md-2">
			Final Price
				  </div> 
			  </div>               
               
              
               
				        <?php 
						$t =0;$total=0;
if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
	foreach($_SESSION['cart'] as $id=>$quantity){

				
			$t++;

include "config.php";
$q="select * from `add-product` where `p-id`='$id'";
//echo $q;
$result=mysqli_query($obj,$q);
if($row=mysqli_fetch_array($result))
{
?> <div class="row">
					<div class="col-md-1 col-md-offset-1">
						<?php echo $t; ?>
					</div>
				  <div class="col-md-2 ">
					<?php echo $row[2]."<br/>"; ?>
				  </div>
				  
				   <div class="col-md-2">
      <?php               
	
	echo "<img class='immanu' src='admin/upload/".$row[8]."' style='width:100px; height:100px ; '/><br/>";
	?>
					
               </div>
			  <div class="col-md-2">
					<h6>
					<form action="increase.php">
					<input type="hidden" value="<?php echo $id; ?>" name="id"/>
					<input type="number" style="width:50px" value="<?php echo $quantity; ?>" name="qty"/><input type="submit" value="update">
					</form>
					</h6>
			 </div> 
			 <div class="col-md-2">
					<h2><?php echo "&dollar;". $row[3]; ?></h2>
			 </div> 
		<div class="col-md-2">
					<h2><?php $total += ($row[3]*$quantity); echo "&dollar;" .($row[3]*$quantity)."<br/>"; ?></h2>
                    <a href='removit.php?x=<?php echo $id; ?>'>remove</a>
				  </div> 
			  </div> 
<?php }
}
}
elsE
{
	?><div class="line">

	<div class="margin">
		<div class="s-12 l-7 margin-bottom">
		<?php
	echo "<h2 >No Item In cart </h2>";
	echo "</div>";echo "</div>";echo "</div>";
}
?>
		<div class="line">

	<div class="margin">
		<div class="col-md-offset-5 col-md-2 margin-bottom">
					<br/><br/>
					<h2>Total</h2>
		  </div>
		  <div class="col-md-2 col-md-offset-3 margin-bottom">
		  
					
				<?php
              if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0) {
			  
				echo"<a href='pay.php' class='btn btn-danger l-5 mybtn'>";
							echo "Pay Now";
							echo"</a>";
							}
							else{}
							?>
				<h2><?php echo"&dollar;" .$total; ?></h2>
		  </div>
	</div>
	<div class="clearfix"></div>
	</div>
           
         </div>
      </section>
		 
		</div>
</div>
     
<!--portfolio-->
<div class="main-grid-one4" id="five">
	<div class="portfolio">			<h3><center style="color:red;text-shadow:1px 1px 1px green;">
	See Other Products</center></h3>
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
		  </div>
<?php include "footer.php";?>