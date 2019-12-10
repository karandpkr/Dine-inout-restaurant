<?php session_start();

	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
?>
<?php include"header.php"?>

<!--mother grid start here-->

<div class="main-grid-one1"  id="one">
    <div class="home-banner">
		<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
				<h1>Add Products</h1><br/><br/>
				<div class="container"><div class="col-md-3"></div>	
				<div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
				 <div class="contact-1-main col-md-6"style="border:2px solid white;background-color:rgba(203,194,180,1)"><br/>	
	   	 	 <?php
		   	 	 if(isset($_REQUEST['x']))
                 {
				 if($_REQUEST['x']=="thanks")
                  echo"<center><h5 class='green'>Thanks for product Information</h5></center><br/>";
                 } ?>
		   	 	 	 
		   	 	 	<form action="saveproduct.php" method="post" enctype="multipart/form-data">
					  
					   <p>S.Categories</p>
					  	  <select id="disabledSelect" name="s-categories"class="form-control" >
						  <?php
						  include "config.php";
			$q = "select * from `add-categories`";
			$res = mysqli_query($obj,$q);
			
			echo"<option>Select category</option>";
			while($row = mysqli_fetch_array($res)){
			echo"<option value='$row[0]'>".$row['c-name']."</option>";
			}
			
						  
						  
						  
						  ?>
							</select>					 
					  <p>Product Name</p>
					  	 <input type="text" required="" class="form-control" name="p-name" id="exampleInputName2" placeholder="">
						<p>Price</p>
					  	<input type="text"  class="form-control" name="price"  placeholder="" required="" id="p"  /> 
						<p>Ingredients</p>
					  
					&nbsp;&nbsp; <label class="checkbox-inline ">
					<input type="checkbox" id="inlineCheckbox1"   name="ingredient[]" value="onion"> <h5 style="color:white;">Onion</h5>
					</label>
					<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox2" name="ingredient[]" value="Potato"> <h5 style="color:white;">Potato</h5>
					</label>
						<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox3" name="ingredient[]" value="chilli"> <h5 style="color:white;">Chilli</h5>
					</label>
					 <label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox4" name="ingredient[]" value="Dry fruits"> <h5 style="color:white;">Dry fruits</h5>
					</label>
					<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox5" name="ingredient[]" value="Tomato"> <h5 style="color:white;">Tomato</h5>
					</label>
				<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox6" name="ingredient[]" value="Cheese"> <h5 style="color:white;">Cheese</h5>
					</label>
					<label class="checkbox-inline">
					<input type="checkbox" id="inlineCheckbox7" name="ingredient[]" value="Vegetables"> <h5 style="color:white;">Vegetables</h5>
					</label>
					
						<p>Type</p>
					  	  <select id="disabledSelect" name="type" required="" class="form-control">
						  <option>Select Type</option>
						 <option>Vegetarian</option>
						  <option>Non-Vegetarian</option>
						   </select>
						 <p>Eatable/Non-Eatable</p>
						 <select id="disabledSelect" required="" name="eat-noneat" class="form-control">
                          <option>Select Any</option>
						 <option>Eatable</option>
						  <option>Non-Eatable</option>
						   </select>  
						 <p>Description</p>
					  	<textarea  class="form-control"  placeholder="" name="description" required="" id="p"  /> </textarea >
						<p>Product Pic</p>
						<input type="file" id="exampleInputFile" required="" class="form-control" name="p-pic"  ><br/>
						<center><input type="submit" class="btn btn-danger" name="btn" value="Go"></center>
					</form><br/> 
		   	    </div><br/><br/>  
		   </div>
		   </div>
			
		</div>
    </div>
 

	 
	
	<?php include"footer.php" ?>
