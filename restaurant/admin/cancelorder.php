<?php session_start();

	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
?>
<?php include"header.php"?>

	<style>
	.home-banner
	{height: !important;}
	
	.stylu
	{height:auto;}
	</style>
<div class="main-grid-one1"  id="one">
    <div class="home-banner stylu"><br/>
	<div class="col-md-12" style="position:fixed;height:60px;z-index:998px;"><center>

	<a href="allorder.php"><button class="btn btn-primary btn-lg">All Orders</button></a>
		<a href="cancelorder.php"><button class="btn btn-primary btn-lg">Cancelled Orders</button></a>
			<a href="pandingorder.php"><button class="btn btn-primary btn-lg">Pending Orders</button></a>
				<a href="approvedorder.php"><button class="btn btn-primary btn-lg">Approved Orders</button></a></center></div><br/>
	
	<br/><br/><br/>
	 
				<center><h1 style="color:red;">All Cancelled orders by User</h1></center><br/>
	
	<div class="col-md-10 col-md-offset-1">
	
	<table class="table" border="1" style="color:black; ">
	<tr class="danger" style="color:red;font-size:20px;"> 
	<td>Oid</td>
	<td>Userid</td>
	
	<td>City</td>
	<td>Date</td>
	<td>Time</td>
	<td>Ip</td>
	<td>Payment Method</td>
	<td>Payment Id</td>
	<td>Status</td>
	<td>Price</td>
	<td>Product name</td>
<td>Reason</td>
	
	
	</tr>
		<?php
				include "config.php";
				$res = mysqli_query($obj,"select * from `orderdetail` where `status`='cancel by user'");
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
					 echo"<td>".$oid;
					 echo"</td>";
					  echo"<td>".$userid;
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
					 
					
	 		$res1 = mysqli_query($obj,"select * from `cancelorder`");
					while($row1 = mysqli_fetch_array($res1)){
					$reason=$row1['reason'];
					
							
							
				
			}echo"<td>".$reason;
					 echo"</td>";
					 echo"</tr>";
					
			
			}
			?>
	 </table>
			</div>
	
			
			
			
	
	
	
	
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>