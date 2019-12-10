<?php session_start();
 include"header.php"?>
<?php if(!isset($_REQUEST['p-id'])){
echo '<script type="text/javascript">window.location=\'allproductshow.php?first_select_product\';</script>';
//header("location:allproductshow.php?first_select_product");

}
	
	if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		//header("location:index.php?x=loginfirst");
	}
	$logedin = $_SESSION['email'];
	
	
	
			if(isset($_REQUEST['p-id'])){
				$pid = $_REQUEST['p-id'];
			}
			require_once "config.php";
			$q = "select * from `add-product` where `p-id`='$pid'";
			$res = mysqli_query($obj,$q);
			while($row = mysqli_fetch_array($res))
			{
			
	
		$category = $row['s-categories'];
		$name = $row['p-name'];
		$price = $row['price'];
		$ing = $row['ingredient'];
		$type = $row['type'];
		$eat = $row['eat-noneat'];
		$des = $row['description'];
		$pic =$row['p-pic'];
	}
 
 
	
	?>

<div class="main-grid-one1"  id="one">
    <div class="home-banner">
		<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>Update/Delete Products</h1><br/><br/>
				<div class="container"><div class="col-md-3"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-6"style="border:2px solid white;
				 background-color:rgba(203,194,180,1)"><br/>	
	   	 	 <?php
		   	 	 if(isset($_REQUEST['x']))
                 {
				 if($_REQUEST['x']=="thanks")
                  echo"<center><h5 class='green'>Thanks for Update Information</h5></center><br/>";
                 } ?>
		   	 	 	 
		   	 	 	<form action="updateproduct.php" method="post" enctype="multipart/form-data">
					  
					   <p>S.Categories</p>
					  	  <input type="text" name="s-categories"class="form-control"value="<?php echo $category; ?>">
						 
						 
					  <p>Product Name</p>
					  	 <input type="text" class="form-control" name="p-name" id="exampleInputName2" placeholder=""value="<?php echo $name; ?>">
						<p>Price</p>
					  	<input type="text"  class="form-control" name="price"  placeholder="" required="" id="p" value="<?php echo $price; ?>" /> 
						<p>Ingredients</p>
						
					 <select name="ingredient" class="form-control" multiple>
					  <?php 
						echo "<option>Selected Ingredient</option>";
						$arr = explode(",",$ing);
						foreach($arr as $int){
							if($int!=="")
							echo "<option>$int</option>";
						}
					  ?>
					  </select>
					
		<input type="hidden" value="<?php echo $pid;?>"name="abc">			
						<p>Type</p>
					  	  <input type="text" name="type" class="form-control" value="<?php echo $type; ?>">
						  
						 <p>Eatable/Non-Eatable</p>
						 <input type="text" name="eat-noneat" class="form-control"value="<?php echo $eat; ?>">
                           
						 <p>Description</p>
					  	<textarea  class="form-control"  placeholder="" name="description" required="" id="p"  ><?php echo $des; ?>" </textarea >
						<p>Product Pic</p>
						<center><img src="upload/<?php echo$pic;?>" height="120px" class="img img-responsive" width="220px;"/></center>
						<p>Change Pic</p>
						<input type="file" id="exampleInputFile"  class="form-control"
						name="p-pic" value="<?php echo $pic; ?>" ><br/>
						<input type="hidden"name="hidenpic" value="<?php echo $pic; ?>" ><br/>
						
						<center><input type="submit" class="btn btn-danger" name="upd" value="update">
					<input type="submit" class="btn btn-danger" name="del" value="Delete"></center>

					</form><br/> 
		   	    </div><br/><br/>  
		   </div>
		   </div>
			
		</div>
    </div>
 

	 

	
<?php include"footer.php"?>
