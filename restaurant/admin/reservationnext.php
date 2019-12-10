<?php session_start();
if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		 
	}?>
<?php

include"header.php"
?>

	<style>
	.home-banner
	{height: !important;}
	
	.stylu
	{height:auto;}
	</style>
	
<div class="main-grid-one1"  id="one">
    <div class="home-banner stylu"><br/><br/><br/><br/>
	 
	
	<div class="col-md-10 col-md-offset-1">
	
	<table class="table" border="1" style="color:black; ">
	<tr class="danger" style="color:red;font-size:20px;"> 
	<td>Rid</td>
	<td>Date</td>
	<td>Person</td>
	<td>Time</td>
	<td>Contact</td>
	<td>Email</td>
	<td>Reservation Time</td>
	<td>Reservation Date</td>
	<td> Reservation Ip</td>
	
	</tr>
		<?php if(!isset($_REQUEST)){
		echo '<script type="text/javascript">window.location=\'reservation.php\';</script>';
		//header("location:reservation.php");
		}
		$id=$_REQUEST['rid'];
				include "config.php";
				$res = mysqli_query($obj,"select * from `reservation` where `rid`=$id  ");
					while($row = mysqli_fetch_array($res)){
					 $id=$row['rid'];
					
					$date=$row['date'];
					 
							$person=$row['person'];
								$time=$row['time'];
									$con=$row['contact'];
							$email=$row['email'];
						$time1=$row['time1'];
							$date1=$row['date1'];
								$ip=$row['ip'];
 						
					echo"<div class='clearfix'></div>";
					 echo"<tr style='background:white;'>";
					 echo"</td>";
					  echo"<td>".$id;
					  echo"</td>";
					  echo"<td>".$date;
					 echo"</td>";
					  echo"<td>".$person;
					 echo"</td>";
					  echo"<td>".$time;
					 echo"</td>";
					  echo"<td>".$con;
					 echo"</td>";
					  echo"<td>".$email;
					 echo"</td>";
					 
					  echo"<td>".$time1;
					 echo"</td>";
					 echo"<td>".$date1;
					 echo"</td>";
					  echo"<td>".$ip;
					 echo"</td>";
					 
 					 echo"</tr>";
					 echo"</table>";
					 
			}
			
			?>
	 </table>
	 
	 		</div> 
			
			
			
			<div class="col-md-10 col-md-offset-1">
			
		<form action="reservationnext1.php" method="post">
			
		
			<div class="col-md-5">
			<span>Email:</span><input type="text" name="email" value="<?php echo$email;?>"class="form-control"/><br/><br/>
		
		
					
	</div>
		
			 
			
			<div class="col-md-5"> 
			 
			<span>Message:</span><textarea class="form-control"name="txt">
			Dear Sir/Madam <br/>
			As per your last email on dated : <?php echo $date1  ;?> 
			for the reservation of <?php echo $person; ?> Peoples  on <?php echo $date; ?><br/>
			Please find out the payment link for the payment . <br/>
			Please do the payment so that your booking is sucessfully.
			Thanks Have a nice day Ahead.
			<br/>
			Link : 
			<div class="pm-button"><a href="https://www.payumoney.com/paybypayumoney/#/3AFEEC58149D18A6C2BD5B131EB01719"><img src="https://www.payumoney.com//media/images/payby_payumoney/buttons/111.png" /></a></div>
			</textarea>
					</div>
					<div class="col-md-2"> <br/>
			<input type="submit" value="go" name="abc" class="btn btn-danger btn-lg">
	</div>
		</form>
			</div>
			 
			  <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
		 
			 
			 
			
			
			
	
	
	
	</div>
	</div>

	

 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>




