<?php session_start();
     if(!isset($_SESSION['user'])){
	 echo '<script type="text/javascript">window.location=\'logaccount.php?x=loginfirst\';</script>';			
		//header("location:logaccount.php?x=loginfirst");	
 } 
 if(isset($_SESSION['user'])){
	$logedin = $_SESSION['user'];
  }
?>
<?php include"header.php"?>

<div class="main-grid-one1"  id="one">
  <div class="home-banner2">  
	<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s"><br/><br/>
	<br/><br/><br/>
				<h1 style="text-shadow:1px 1px 1px green;">Thank you, Your Order Has Been Place</h1><br/><br/><br/>
	<?php	
        include "config.php";
       $q="select * from `orderdetail` where userid='$logedin'";

        $result=mysqli_query($obj,$q);
         while($row=mysqli_fetch_array($result))
            { $abc=$row['oid'];
			unset($_SESSION['cart']);
             unset($_SESSION['loc']);
              unset($_SESSION['pid']);
             unset($_SESSION['add']);
              unset($_SESSION['payinfo']);	
              unset($_SESSION['total']);			  
		
			   }
			   echo"<div class=' col-md-8 col-md-offset-2'>";
			   echo"&nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;
			   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
			  echo"<center>";
			   echo"<button class='btn btn-default'style='color:red;text-shadow:1px 1px 4px yellow;font-size:20px;'>Order Id:".$abc."</button>";
          
       ?>
	   	 <a href="status.php"> <input type="button" class="btn btn-default" name="vtn" value="Check your Previous status" style="color:red;text-shadow:1px 1px 4px yellow;font-size:20px;"></a>
				 
			
	 <a href="cancel.php"> <input type="button" class="btn btn-default" name="vtn" value="Cancel Order" style="color:red;text-shadow:1px 1px 4px yellow;font-size:20px;"></a>
				 </center><br/><br/>
			 
	    </div>
	   <br/><br/><br/>

	<div class="container"><div class="col-md-3"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-6"><br/><br/><br/><br/><br/><br/><br/>
 
					 
	
	
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>

	
 
	
	<div class="clearfix"></div>
<?php include"footer.php"?>