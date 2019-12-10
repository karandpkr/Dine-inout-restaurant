<?php session_start();

	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
?>
<?php include"header.php"?>
<style>
.ga{
background-color:rgba(203,194,180,2);}
</style>

 
<div class="main-grid-one1"  id="one">
    <div class="ga">
		<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
			 			<h1>Manage All Products</h1><br/>	 </div>
				 <?php
	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		//header("location:index.php?x=loginfirst");
	}
	 
 
			 echo"<div class='col-md-1'></div>";
	 echo"<div class='col-md-10'>";
	 
	 
	 
				
				include "config.php";
				$res = mysqli_query($obj,"select * from `add-categories`");
					while($row = mysqli_fetch_array($res)){
					echo"<div class='clearfix'></div>";
					echo"<p style='color:red;text-shadow:2px 2px 2px green;font-size:24px;'>". $row['c-name']."</p>";
					$cid=$row[0];
					
			$q="select * from `add-product` where `s-categories`='$cid' ";			
			$res1 = mysqli_query($obj,$q);
			
			while($row1= mysqli_fetch_array($res1)){
			echo"<div class='col-md-4 menu-grid wow bounceInDown' data-wow-delay='0.3s'>";
					
					echo"<a style='color:red;' href='manage.php?p-id=".$row1['p-id']."'>
					<img src='upload/".$row1['p-pic']."' alt='' class='img-responsive' style='width:100%;height:160px;'></a>";
						echo"<h4 style='color:red;text-shadow:1px 1px 1px green;'>".$row1['p-name']." ----------------- &#8377;$row1[price]</h4>";					
						echo"<br/>";
						echo"<center><a href='manage.php?p-id=".$row1['p-id']."'><button class='btn btn-danger'>update</button>";
						echo"&nbsp;&nbsp;<a href='prodel.php?p-id=".$row1['p-id']."'><button class='btn btn-danger'>delete</button></center>";
					echo"</div>";
					
		
			}
				}
				
				
			echo"</div>";
		
		?> <div class='col-md-1'></div>;
		<div class="clearfix"></div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
 	
	
	
	</div>
	</div>
	<?php include"footer.php"?>