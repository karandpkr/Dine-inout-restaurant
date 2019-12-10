<?php
session_start();
	
	if(!isset($_SESSION['user'])){
	echo '<script type="text/javascript">window.location=\'logaccount.php?x=loginfirst\';</script>';				
		//header("location:logaccount.php?x=loginfirst");
		}
		$kk=$_SESSION['user']
?>
<?php include"header.php"?>

<div class="main-grid-one1"  id="one">
    <div class="home-banner2">
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>My Order</h1><br/><br/>
		
	<div class="container"><div class="col-md-3"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				<br/>
				<div class="col-md-8 col-md-offset-2">
	
	<table class="table" border="" style="color:black; ">
	<tr class="danger" style="color:red;font-size:20px;"> 
	<td>Oid</td>
	<td>Shipping Addres</td>
	
	<td>City</td>
	
	
	
	<td>Status</td>
	
	
	
	
	</tr>
		<?php
				include "config.php";
				$res = mysqli_query($obj,"select * from `orderdetail` where `userid`='$kk'");
					while($row = mysqli_fetch_array($res)){
					$oid=$row['oid'];
					 
							$userid=$row['userid'];
								$shipping=$row['shippingaddress'];
									$city=$row['city'];
							$date=$row['date'];
						$time=$row['time'];
							$ip=$row['ip'];
								$paymentm=$row['paymentmetod'];
									$payment=$row['paymentid'];
										$status=$row['status'];
											$price=$row['price'];
												$productid=$row['productid'];
 						
					echo"<div class='clearfix'></div>";
					 echo"<tr style='background:white;'>";
					 
					 echo"<td><a href='myorderdetail.php?oid=$oid'>". $oid;
					 echo"</td>";
					  echo"<td>".$shipping;
					 echo"</td>";
					  
					 
					  echo"<td>".$city;
					 echo"</td>";
					  echo"<td>".$status;
										 
					echo"</td>";
					
						echo"</tr>";
					
					
	 		}
			?>
	 </table>
			</div>
			 
			
	 
				 
				 
	
	</div>
	</div>
	</div>
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>