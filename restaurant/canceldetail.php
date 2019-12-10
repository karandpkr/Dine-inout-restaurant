<?php session_start();
$logedin=$_SESSION['user'];
?>
<?php include"header.php";
$oid=$_REQUEST['oid'];


?>

<div class="main-grid-one1"  id="one">
<div class="home-banner2">
    
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>cancel Order detail</h1><br/><br/>
		
	<div class="container">
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-12 "
				 style="background-color:rgba(255,255,255,0.3
					         
           
<div class="row ">
				
				  
					<table class="table table-hover">
					
					
					
					
					<?php 
					
					include "config.php";
                   $q="select * from `orderdetail` where `oid`='$oid'";
                  //echo $q;
                  $result=mysqli_query($obj,$q);
                  while($row=mysqli_fetch_array($result))
                       {$price=$row['price'];
					   $oid=$row['oid'];
					    $status=$row['status'];
					$pid=$row['productid'];
					$a = explode(",",$pid);
					
							
                    echo"<div class='col-md-6  col-md-offset-3'>";          
							  echo"Oid<input type='text' name='oid' readonly value='$oid'>";
                             
                            
							  echo"Status<input type='text' readonly value='$status'>";
                             							 
					
							
						foreach($a as $k)
						{
						}
	+						

					
                       $q="select * from `add-product` where `p-id`='$k'";
//echo $q;
                      $res=mysqli_query($obj,$q);
                      while($row1=mysqli_fetch_array($res))
                          {$name=$row1['p-name'];
                            $pic=$row1['p-pic'];
							//$price=$row1['price'];
							
							 echo"Price<input type='text' readonly name='price' value='$price'>";
                                echo"</div>";

					echo"<div class='col-md-6 '>";          		
							echo"<tr>";
							echo"<td align='center'>";
                              echo"<br/>";
                                echo"</td>";
								
					echo"<td >";
                              echo"<br/>";
                                echo"</td>";
												
							
							echo"<td align='center'>";
                              echo"<br/>". $name;
                                echo"</td>";
					
				  
				  
				  
            echo"<td align='center'>";
           echo"<img src='admin/upload/$pic' width='120px'/>";
		   echo"</td>";
           

		   
                             

						
			   
			echo"</tr>";
				  
			 

			 
 }
					}
					?>
	
	</table>
	</div>				
		
		<?php	
			
		$q="select * from `cancelorder` where `oid`='$oid'";
                  //echo $q;
                  $result1=mysqli_query($obj,$q);
                  if($row1=mysqli_fetch_array($result1))
                  {
				   $da=$row1['date'];
				    $ti=$row1['time'];
					 $iip=$row1['ip'];
					 echo"<div class='col-md-6 col-md-offset-3'>";
				  echo"<table class='table' align='center'>";
				  
				   echo"<tr>";
				  echo"<td>Date</td>";
				  echo"<td>Time</td>";
				  echo"<td>Ip</td>";
				  
				  echo"</tr>";
				 
				  
				  echo"<tr>";
				  echo"<td>".$da."</td>";
				  echo"<td>".$ti."</td>";
				  echo"<td>".$iip."</td>";
				  
				  echo"</tr>";
				  echo"</table>";
				  echo"</div>";
				  
				  } 				?>
					
					
			  <br/><br/> 
			  

	
	
	
	</div>
	
	
	
	</div>
	</div>
	</div>
</div>
	</div>
	

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>