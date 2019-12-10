<?php session_start();
    if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
?>
<?php include"header.php"?>
	<style>
	.home-banner
	{height:1100px !important;
}
	
	
	.stylu
	{height:auto;}
	</style>
<div class="main-grid-one1"  id="one">
    <div class="home-banner stylu">
	
	<div class="col-md-12" style="position:fixed;height:60px;z-index:998px; "><center>
	<br/>
	<a href="allorder.php"><button class="btn btn-primary btn-lg">All Orders</button></a>
		<a href="cancelorder.php"><button class="btn btn-primary btn-lg">Cancelled Orders</button></a>
			<a href="pandingorder.php"><button class="btn btn-primary btn-lg">Pending Orders</button></a>
				<a href="approvedorder.php"><button class="btn btn-primary btn-lg">Approved Orders</button></a></center></div><br/>
				<br/><br/><br/>
	<div class="col-md-8 col-md-offset-2">
	
	<table class="table" border="1" style="color:black; ">
	<tr class="danger" style="color:red;font-size:20px;"> 
	<td>Oid</td>
	<td>Userid</td>
	
	<td>City</td>
	
	
	
	<td>Status</td>
	
	
	
	
	</tr>
		<?php
				include "config.php";
				$res = mysqli_query($obj,"select * from `orderdetail`");
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
					 
					 echo"<td><a href='detailorder.php?oid=$oid'>". $oid;
					 echo"</td>";
					  echo"<td>".$userid;
					 echo"</td>";
					  
					 
					  echo"<td>".$city;
					 echo"</td>";
					  echo"<td>".$status;
										 echo"</tr>";
					
	 		}
			?>
	 </table>
			</div>
			 
			
			
			
	
	
	
	
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>