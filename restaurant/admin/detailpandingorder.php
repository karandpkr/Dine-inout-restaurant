<?php session_start();

	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
?>
<?php 
if(!isset($_REQUEST['oid']))
{
echo '<script type="text/javascript">window.location=\'pandingorder.php?x=selectorderfirst\';</script>';
//header("location:pandingorder.php?x=selectorderfirst");
}
include"header.php"
?>

	<style>
	.home-banner
	{height:auto !important;}
	
	.stylu
	{height:auto;}
	</style>
	
<div class="main-grid-one1"  id="one">
    <div class="home-banner stylu"><br/>
	<div class="col-md-12" style="position:fixed;height:60px;z-index:998;"><center>

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
	echo"<td>Product Id</td>";
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
					  echo"<td>".$productid;
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
	 
	 <div class="col-md-5">
	<p style="color:blue; font-size:30px;"><b>Status Of Order</b></p>
	<form action="statusorderdb.php" method="post">
	<table class="table"cellspacing="10px">
	
	<input type="hidden" value="<?php echo$oid ?>" name="oid">
	<tr>
	
	<td width="10%" style="color:blue; font-size:25px;"><b>Status</b></td>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<td width="30%">
	<input type="text" class="form-control" name="status"></td>
	
	<td width="40%" align="center"><input type="checkbox" style="color:blue;"  name="deliver"> <b style="color:blue;font-size:25px;">Deliver</b></td>
	<td><input type="submit" class="btn btn-primary" name="go"value="Go"></td>
	</table>
		</form><br/>
		
		<table class="table">
		<form action="admincancel.php" method="post">
		<input type="hidden" name="oid" value="<?php echo $oid;?>"/>
		<?php
		echo"<tr>";
              echo"<td align='center'>";
			  
			
			  echo"<h5 style=' font-size:24px;color:blue;'><b>Reason for cancellation:</b></h5>";
			  echo"</td>";
			  echo"<td align='center'>";
			  echo"<select style='width:300px;' class='form-control' name='reason' id='sel' >";
			  echo"<option>Select cancellation Reason</option>";
			  echo"<option>Product is not available</option>";
			 echo" <option>Phone no is not found</option>";
			 echo" <option>Address is not found</option>";
			  echo"<option>Illegal activity</option>";
			  echo"<option>other</option>";
			  echo"</select><br/>";
			  echo"<span id='onki' style='color:red;'></span>";
              echo"<br/>";
			  echo"</td>";
			 
			   
			   
				echo"<td align='center' >";
			echo"<center><input type='submit' id='butu' onclick='return inki()' class='btn btn-primary'  value='cancel order' name='jkl'>";
echo"</center></td><br/><br/>";
	echo"</form>";
	
	
	
	echo"</tr>";
	
	?>
	</table>
			
		
		
		
		
		
		
		
		</div>

	<div class="col-md-5" style="border:px dashed red;">
	 <?php echo"<table class='table table-stripped'>";
	 echo"<tr  class='info'>";
					   
					   echo"<td width='200px'>Status</td>";
					   echo"<td width='100px'>Time</td>";
					   echo"<td width='100px'>Date</td>";
					   echo"</tr>";
	 include "config.php";
                   $q="select * from `statusorder` where `oid`='$oid'";
                  //echo $q;
                  $result1=mysqli_query($obj,$q);
                  while($row1=mysqli_fetch_array($result1))
                       {$status=$row1['status'];
					   $time=$row1['time'];
					   $date=$row1['date'];
					   echo"<tr>";
					   
					   echo"<td>".$status."</td>";
					   echo"<td>".$time."</td>";
					   echo"<td>".$date."</td>";
					   echo"</tr>";
					   
			}
			
	
					   
					   ?></table></div>
			</div><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		 
			 
			 
			
			
			
	
	
	
	</div>
	</div>

	
 <br/><br/><br/><br/><br/><br/><br/><br/>
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>




