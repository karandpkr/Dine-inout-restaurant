<?php session_start();
if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		 
	}?>
<?php include"header.php"?>

	<style>
	.home-banner
	{height:1200px !important;}
	
	.stylu
	{height:auto;}
	</style>
<div class="main-grid-one1"  id="one">
    <div class="home-banner ">
	<div class="col-md-12" style="position:fixed;height:60px;z-index:998; "><center>
	<br/>
	<a href="allorder.php"><button class="btn btn-primary btn-lg">All Orders</button></a>
		<a href="cancelorder.php"><button class="btn btn-primary btn-lg">Cancelled Orders</button></a>
			<a href="pandingorder.php"><button class="btn btn-primary btn-lg">Pending Orders</button></a>
				<a href="approvedorder.php"><button class="btn btn-primary btn-lg">Approved Orders</button></a></center></div><br/><br/><br/>
	<br/>
	<br/>
	 
				<center><h1 style="color:red;">Pending orders</h1></center><br/>
	
	<div class="col-md-10 col-md-offset-1">
	 
	<table class="table" border="1" style="color:black; ">
	<tr class="danger" style="color:red;font-size:20px;"> 
	<td>Oid</td>
	<td>Userid</td>
	<td>Shipping Address</td>
	<td>City</td>
	<td>Date</td>
	<td>Time</td>
	<td>Ip</td>
	<td>Payment Method</td>
	<td>Payment Id</td>
	<td>Status</td>
	<td>Price</td>
	<td>Product Name</td>
	
	
	</tr>
		<?php
				include "config.php";
				$res = mysqli_query($obj,"select * from `orderdetail` where `status`='order book'");
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
												$name="";
                    $exp = explode(",",$productid);
					//print_r($exp);
					foreach($exp as $id){
                       if($id==""){
					   }else{
                    $resu = mysqli_query($obj,"select * from `add-product` where `p-id`='$id'");
					//echo "select * from `add-product` where `p-id`='$id'";
					while($row2 = mysqli_fetch_array($resu)){
				         $name=$name . $row2['p-name']."<br/>";
						// echo"$name";
                           }
					}
					}

 						
					echo"<div class='clearfix'></div>";
					 echo"<tr style='background:white;'>";
					 
					  echo"<td><a href='detailpandingorder.php?oid=$oid'>".$oid;
					 echo"</td>";
					  echo"<td>".$userid;
					 echo"</td>";
					  echo"<td>".$shipping;
					 echo"</td>";
					  echo"<td>".$city;
					 echo"</td>";
					  echo"<td>".$date;
					 echo"</td>";
					  echo"<td>".$time;
					 echo"</td>";
					  echo"<td>".$ip;
					 echo"</td>";
					  echo"<td>".$paymentm;
					 echo"</td>";
					  echo"<td>".$payment;
					 echo"</td>";
					  echo"<td>".$status;
					 echo"</td>";
					  echo"<td>".$price;
					 echo"</td>";
					  echo"<td>".$name;
					 echo"</td>";
					 echo"</tr>";
					
	 		}
			?>
	 </table>
			</div>
			<div class="col-md-12">
			<center><b style="color:red;font-size:22px;">Click on Oid for order detail</b></center></div>
			 
			
			
			
	
	
	
	
	</div>
	
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>