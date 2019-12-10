<?php session_start();
if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		 
	}?>
 <?php include"header.php"?>

	<style>
	.home-banner
	{height:auto !important;}
	
	.stylu
	{height:auto;}
	</style>
	<div class="home-banner">
<div class="main-grid-one1"  id="one">
    <div class=" stylu">
	 <br/>
	<center><div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>Reservations</h1> </center><br/><br/></div>
	<div class="col-md-10 col-md-offset-1">
 
	<table class="table" border="1" style="color:black; ">
	<tr class="danger" style="color:red;font-size:20px;"> 
	
	<td>Rid</td>
	<td>Date</td>
	<td>Person</td>
	<td>Time</td>
	<td>Contact</td>
	<td>Email</td>
	 
	
	
	
	</tr>
		<?php
				include "config.php";
				$res = mysqli_query($obj,"select * from `reservation`  ");
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
					 echo"<td><a href='reservationnext.php?rid=$id'>".$id."</a>";
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
					 
					  echo"</tr>";
					
	 		}
			?>
	 </table>				 
			<center style='color:red;'><b>Click on Rid for Reservation detail</b><center>									
												
					
					

 						
					
			</div>
			 
			
			
			
	
	
	
	
	</div>
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>