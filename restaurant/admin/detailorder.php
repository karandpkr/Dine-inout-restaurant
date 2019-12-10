<?php session_start();

	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
?>
<?php include"header.php"
?>

	<style>
	.home-banner
	{height:auto !important;}
	
	.stylu
	{height:auto;}
	</style>
	
<div class="main-grid-one1"  id="one">
    <div class="home-banner stylu"><br/>
	<div class="col-md-12" style="position:fixed;height:60px; z-index:998;"><center>

	<a href="allorder.php"><button class="btn btn-primary btn-lg">All Orders</button></a>
		<a href="cancelorder.php"><button class="btn btn-primary btn-lg">Cancelled Orders</button></a>
			<a href="pandingorder.php"><button class="btn btn-primary btn-lg">Pending Orders</button></a>
				<a href="approvedorder.php"><button class="btn btn-primary btn-lg">Approved Orders</button></a></center></div><br/>
	<br/><br/>
	
	<div class="col-md-10 col-md-offset-1">
	
	<table class="table" border="1" style="color:black; ">
	<tr class="danger" style="color:red;font-size:20px;"> 
	<td>Oid</td>
	<td>Userid</td>
	
	<td>shipping address</td>
	<td>City</td>
	<td>Date</td>
	<td>Time</td>
	<td>Ip</td>
	<td>Payment Method</td></tr>
		<?php   $oid=$_REQUEST['oid'];
				include "config.php";
				$res = mysqli_query($obj,"select * from `orderdetail` where `oid`='$oid'");
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
					  
					 echo"<td>".$shipping."</td>";
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
					 echo"</tr>";
					 echo"</table>";
					 $res1 = mysqli_query($obj,"select * from `cancelorder` where `oid`='$oid'");
					if(!($row1 = mysqli_fetch_array($res1))){
				
				}
				else{
				
				
                               

					$reason=$row1['reason'];
					
					$time1=$row1['time'];
					$date1=$row1['date'];
					$ip1=$row1['ip'];				
					 echo"<p><b style='color:yellow; text-shadow:1px 1px 3px red;font-size:25px;'>Detail about Cancelled order</b></p>";
					 echo"<table class='table' border='1'style='color:black;'>";

					 echo"<tr class='danger' style='color:red;font-size:20px;'>";
	echo"<td>Payment Id</td>";

	echo"<td>Price</td>";
	echo"<td>Product name</td>";
		echo"<td>Status</td>";
	echo"<td>Reason</td>";
	echo"<td>Cancel Time</td>";
	echo"<td>Cancel Date</td>";
	echo"<td>Cancel Ip</td>";
	
	
	
	echo"</tr>";
	
					 echo"<br/><tr style='background:white;'>";
					  echo"<td>".$payment;
					 echo"</td>";
					  echo"<td>".$price;
					 echo"</td>";
					  echo"<td>".$name;
					 echo"</td>";
					  echo"<td>".$status;
					 echo"</td>";
					 
					 
					
	 		if(isset($reason))
			echo"<td>".$reason."</td>";
					 if(isset($time1))
						echo"<td>".$time1."</td>";
						if(isset($date1))
					 echo"<td>".$date1."</td>";
					 if(isset($ip1))
					 echo"<td>".$ip1;
					 echo"</td>";
			
			
			
					 echo"</tr>";
					
			}
			}
			?>
	 </table>
	 
	<br/><br/><br/><br/><br/>
	<br/><br/><br/>
			</div>
			 
			
			
			
	
	
	
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>




