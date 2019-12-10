<?php  session_start();
	
	if(!isset($_SESSION['user'])){
	echo '<script type="text/javascript">window.location=\'logaccount.php?x=loginfirst\';</script>';				
		
	}
	
	?>
<?php include "header.php";
if(!isset($_SESSION['user'])){
echo '<script type="text/javascript">window.location=\'logaccount.php?x=loginfirst\';</script>';			
		//header("location:logaccount.php?x=loginfirst");
		
}

if(isset($_SESSION['user'])){
 $email=$_SESSION['user'];} ?>

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
				
				<div class="col-md-3 col-md-offset-2"> <p style="color:red;font-size:20px;">Shipping Address</p>
				<br/>
 			<?php 
			include "config.php";
		$res = mysqli_query($obj,"select * from address where `email`='$email'");
		while($row = mysqli_fetch_array($res)){
			
			$name=$row['name'];
				$email=$row['email'];
				$add=$row['address'];
				$loc=$row['location'];
				$city=$row['city'];
				$pin=$row['pincode'];
				$tele=$row['telephone'];
			
		}
		
				echo $name."<br/>";
			
				
				echo $add."<br/>";	
				echo $loc. "," .$city."<br/>";
				
				echo $pin."<br/>";
				echo $tele."<br/>";
                

                $_SESSION['add']=$add;
                $_SESSION['loc']=$loc;				
			
			?>
							 
				</div>
				
				  <div class="col-md-2 ">
				 
				  </div>
				  
				   <div class="col-md-2 col-md-offset-1"><form action="increase.php">
   <p style="color:red;font-size:20px;"> Payment Method	</p><br/>
     <?php   if(isset($_SESSION['payinfo']['type'])){
		$type=$_SESSION['payinfo']['type'];
		echo $type;
		} 
?>	
</form>
		<br/><a href="pay.php"><button class="btn btn primary">Change</button></a>
		
	
            
               </div>
			  <div class="col-md-2">
				 
			 </div> 
			 <div class="col-md-2">
			 
			 
							 </div> 
		<div class="col-md-2">
			
				  </div> 
			  </div>  
           

		   
		   
		   
		   <br/><br/><br/>
		   
		   
		   
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
					
					<input type="hidden" value="<?php echo $id; ?>" name="id"/>
					<?php $_SESSION['pid']=$id;?>
					
					<input type="number" style="width:50px" value="<?php echo $quantity; ?>" 
					name="qty"/><input type="submit" value="update">
					
					</h6>
			 </div> 
			 <div class="col-md-2">
					<h2><?php echo $row[3]; ?></h2>
			 </div> 
		<div class="col-md-2">
					<h2><?php $total += ($row[3]*$quantity); echo ($row[3]*$quantity)."<br/>"; ?></h2>
                    <a href='removit.php?x=<?php echo $id; ?>'><button>remove item</button></a>
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
		<div class="col-md-offset-6 col-md-2 margin-bottom">
					<br/>
					<h2>Total</h2>
		  </div>
		  <div class="col-md-2 col-md-offset-2 margin-bottom">
					
						<br/>	<h2><?php echo $total;
                                      $_SESSION['total']=$total;						?></h2>
							
		  </div>
		   <div class="clearfix"></div>

		  <div class="row col-md-2 col-md-offset-10"><br/>
		<form action="ordersave.php" method="post"/>  
		  <?php	echo"<input type='submit' class='btn btn-danger l-10 mybtn'  name='sub'value='confirm order'>";
							
									?>
									</form>
	
	
		  
		  </div>
	</div>
	<div class="clearfix"></div>
	</div>
           
         </div>
      </section>
		 
		</div>
</div>
</div>
     
<?php include "footer.php";?>