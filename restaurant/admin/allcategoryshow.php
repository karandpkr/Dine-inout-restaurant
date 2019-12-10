<?php session_start();

	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';
		//header("location:index.php?x=loginfirst");
	}
?>
<?php include"header.php"?>



<script>
var a=0;
	function callmetoupdate(myid,datato)
	{
		var ob;
		if(window.XMLHttpRequest)
		{
		ob=new XMLHttpRequest();
		}
		else{
		ob=new ActiveXObject("Microsoft.XMLHTTP");
		}

		var url = "upcat.php?id="+myid+"&data="+datato;
		ob.open("GET",url,true);
		ob.send();
		ob.onreadystatechange=function()
		{
		if(ob.readyState==4&&ob.status==200)
		{
		
		}
		}
	}
   function upd(vals)
   {
		if(a==0)
		{
			var val = document.getElementById(vals).innerHTML;
			document.getElementById(vals).innerHTML="<input type='text' id='txt"+vals+"'value='"+val+"'/>";
			document.getElementById("btn"+vals).innerHTML="Update";
			
			a=1;
		}
		else{
			var datato = document.getElementById("txt"+vals).value;
			callmetoupdate(vals,datato);
			var ppp = document.getElementById("txt"+vals).value;
			document.getElementById(vals).innerHTML=ppp;
			document.getElementById("btn"+vals).innerHTML="Edit";
			a=0;
		}
   }

</script>
<div class="main-grid-one1"  id="one">
    <div class="home-banner">
		<div class="dream-home-bann-main wow bounceInDown" data-wow-delay="0.3s">
			 			<h1>Manage All Categories</h1><br/>	 </div>
				 <?php
	
	if(!isset($_SESSION['email'])){
	echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		//header("location:index.php?x=loginfirst");
	}
	 
 
			 echo"<div class='col-md-1'></div>";
	 echo"<div class='col-md-10'>";
	 
	 
	 
				
				include "config.php";
				$res = mysqli_query($obj,"select * from `add-categories`");
				echo"<table class='table table-bordered table-hover' style='background:white;'>";
					
					while($row = mysqli_fetch_array($res)){
					
						echo"<tr><td id='".$row['c-id']."'>".$row['c-name']."</td>";
			echo"<td > <button id='btn".$row['c-id']."'onclick='upd(this.value)' value='".$row['c-id']."'>
						Edit</button></td>";
					echo"<td><a href='delcat.php?id=".$row['c-id']."'>Delete</a></td>";
					echo"</tr>";
					}
						echo"</table>";
						
					 
				 
					
			 
		 
			 
					
		
			
				
				
				
			echo"</div>";
		
		?> <div class='col-md-1'></div>;
		<div class="clearfix"></div>
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
 	
	
	
	</div>
	</div>
	<?php include"footer.php"?>