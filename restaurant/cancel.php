<?php session_start();
$logedin=$_SESSION['user'];
?>
<?php include"header.php";


?>

<div class="main-grid-one1"  id="one">
    <div class="home-banner2">
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>My Order</h1><br/><br/>
		
	<div class="container">
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-10 col-md-offset-1"><br/>
	<form action="" method="post" >
					         
           
<div class="row ">
				
				  <div class="col-md-12">
					<table class="table table-hover">
					<tr class="danger">
					<td align="center">Oid</td>
					<td align="center">Status</td>
					
					<td align="center">Item Name</td>
					<td align="center">Pic</td>
					<td align="center">Price</td>
						
					</tr>
					
					<?php 
					
					include "config.php";
                   $q="select * from `orderdetail` where `userid`='$logedin' ";
                  //echo $q;
                  $result=mysqli_query($obj,$q);
                  while($row=mysqli_fetch_array($result))
                       {
					   $price=$row['price'];
					   $oid=$row['oid'];
					$pid=$row['productid'];
					$status=$row['status'];
					
					if($status == "Order Book" || $status=="Order Delivered")
					{
						
					}
					else{
					echo "<tr>";
					
					
					$a = explode(",",$pid);
					
						
							
						foreach($a as $k)
						{
						}
						

					
                       $q="select * from `add-product` where `p-id`='$k'";
//echo $q;
                      $res=mysqli_query($obj,$q);
                      while($row1=mysqli_fetch_array($res))
                          {
                            $name=$row1['p-name'];
                            $pic=$row1['p-pic'];
							//$price=$row1['price'];
							echo"<td align='center'>";
                              echo"<br/><a href='canceldetail.php?oid=$oid'>".$oid."</a>";
                                echo"</td>";
					
					echo"<td align='center'>";
                              echo"<br/>". $status;
                                echo"</td>";
					
					
							echo"<td align='center'>";
                              echo"<br/>". $name;
                                echo"</td>";
					
				  
				  
				  
            echo"<td align='center'>";
           echo"<img src='admin/upload/$pic' width='100px'/>";
		   echo"</td>";
           

		   echo"<td align='center'>";
                              echo"<br/>". $price;
                                echo"</td>"; 
								
								
								
					
								
								


						//echo"<td align='center'>";
                        //      echo"<br/><a href='cancelorder.php?oid=$oid'><input type='button' class='btn btn-primary' value='Cancel Order'></a>";
                          //      echo"</td>";   
			
			   
			echo"</tr>";
			
			
			
			  }	  
			  
 }
					}?>
					</table></div></div>
					
			  <br/><center style='color:red;'>Click on Oid for Order detail<center>
			  <br/>              
               
               
			   
			 
				

</center>
	</form>
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>