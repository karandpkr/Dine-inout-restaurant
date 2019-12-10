<?php session_start();
$logedin=$_SESSION['user'];
?>
<?php include"header.php";
$oid=$_REQUEST['oid'];


?>

<div class="main-grid-one1"  id="one">
<div class="home-banner2">
    
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1> Order detail</h1><br/><br/>
		
	<div class="container">
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-12 "
				 style="border:2px solid white;background-color:rgba(255,255,255,0.3)"><br/>
	<form action="cancelorder.php" method="post" >
					         
           
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
                              echo"<br/>". $name;
                                echo"</td>";
					
				  
				  
				  
            echo"<td align='center'>";
           echo"<img src='admin/upload/$pic' width='120px'/>";
		   echo"</td>";
           

		   
                             

						
			   
			echo"</tr>";
			
			
			
				  
			  
 }
					}?>
					
					
			  <br/><br/> 
			  <?php
      if($status=="cancel by user"||$status=="cancel by admin"||$status=="Order Delivered")	
{}
else{	  
            echo"<tr>";
              echo"<td align='center'>";
			  
			
			  echo"<h5 style='font-size:17px;'>Reason for cancellation:</h5>";
			  echo"</td>";
			 echo" <td align='center'>";
			  echo"<select style='width:300px;' class='form-control' name='reason' id='sel' >";
			  echo"<option>Select cancellation Reason</option>";
			  echo"<option>Order created by mistakes</option>";
			  echo"<option>Item not arrive on time</option>";
			  echo"<option>Shipping cost is so high</option>";
			  echo"<option>Item price so high</option>";
			  echo"<option>Found cheaper some where else</option>";
			  echo"<option>Need to change shipping address</option>";
			  echo"<option>Need to change payment method</option>";
			  echo"<option>other</option>";
			  echo"</select><br/>";
			  echo"<span id='onki' style='color:red;'></span>";
              echo"<br/>";
			  echo"</td>";
			  
			  
			  
			   echo"</div >";
			   
			   echo"<div>";
				echo"<td align='center'>";
			echo"<center><input type='submit' id='butu' onclick='return inki()' class='btn btn-default'  value='cancel order' name='jkl'>";
	echo"</center></td></div><br/><br/>";
	}
	?>
	</form>
	
	
	
	</tr>
	</table>
	</div></div>
	
	
	
	</div>
	</div>
	</div>
</div>
	</div>
	

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>