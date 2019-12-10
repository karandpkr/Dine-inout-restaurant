<?php session_start();
	
	?> 
	<style>
	.home-banner1 {
   background:url(images/jiji.jpg)no-repeat;
 min-height: 733px;
    background-size: cover;   }</style>
 <?php include"header.php"?>

<script>


function clicki()
{
var ids ="f";
var c=document.getElementById(ids).value;

var patt = /^([a-zA-Z]{0,9})$/;

if(!patt.test(c))
{document.getElementById(ids+"error").innerHTML="please fill only characters";

var a = true;}

else
{document.getElementById(ids+"error").innerHTML="";
var a = false; }


var a=document.getElementById("pass1").value;
var b=document.getElementById("pass2").value;
if(a!==b||a=="")
{ var x="password not match";
document.getElementById("err").innerHTML=x;
document.getElementById("err").style.color="red";
var b = true;
}
else
{var y="password  match";
document.getElementById("err").innerHTML=y;
document.getElementById("err").style.color="green";
var b = false;
}

	var qu=document.getElementById("ques").value;
	
	if(qu=="Select security Question?"){
		document.getElementById("queserror").value="Select Ques First!";
	var c = true;
	}
	else{
		document.getElementById("queserror").value="";
		var c = false;
	}
	
	

var d=document.getElementById(t).value;

var patt = /^([0-9]{10})$/;
if(!patt.test(d))
{document.getElementById(terror).innerHTML="please enter ten digits";
var e= false;}
else
{document.getElementById(terror).innerHTML="";
var e=true;}

var m=document.getElementById(ems).value;
//var patt=/^([A-Za-z0-9\.\-\_]+\@+[a-zA-Z0-9]+\.+[a-z]{2}+\.+[a-z]+{2,3})$/;
var patt = /^([a-zA-Z0-9\.\-\_]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3})$/;
if(!patt.test(m))
{document.getElementById(emserror).innerHTML="email not correct";
var k= false;}
else{document.getElementById(emserror).innerHTML="";
var k= true;}


	
if(a==false|| b==false ||c==false ||e==false||k==false)
{
	return false;
}
else
{return true;
}
}

	

function match()
{
var a=document.getElementById("pass1").value;
var b=document.getElementById("pass2").value;
if(a!==b||a=="")
{ var x="password not match";
document.getElementById("err").innerHTML=x;
document.getElementById("err").style.color="red";
}
else
{var y="password  match";
document.getElementById("err").innerHTML=y;
document.getElementById("err").style.color="green";

}


}

function emaili(ems)
{
var a=document.getElementById(ems).value;
//var patt=/^([A-Za-z0-9\.\-\_]+\@+[a-zA-Z0-9]+\.+[a-z]{2}+\.+[a-z]+{2,3})$/;
var patt = /^([a-zA-Z0-9\.\-\_]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3})$/;
if(!patt.test(a))
{document.getElementById(ems+"error").innerHTML="email not correct";
return false;}
else{document.getElementById(ems+"error").innerHTML="";
return true;}
}


 
</script>
<!--short codes start here-->
<div class="home-banner1">
<div class="main-grid-one5" id="six">
	<div class="contact">
	    <div class="temp-heading">
		    <h3 class="main-head">Registration </h3>
		</div>
		<div class="col-md-4"></div>
		<div class="col-md-4">
		<center>
 
   
</ul></center>
</div>
		
		<div class="contact-1">
		   <div class="container"> 
		   	 	

		 	
		   
		   
		   
		   	 <div class="contact-1-main col-md-6 col-md-offset-3">	
	   	 	 
		   	 	 <div class="contact-right wow bounceInUp" data-wow-delay="0.3s">
		   	 	 	<center><h3>Create An Account</h3></center>
					<center><a href="logaccount.php"><h4 style="font-size:25px;"><b>Click Here to Login.....</b></h4></a></center>
						   	 	 <?php
		   	 	 if(isset($_REQUEST['x']))
                 {
				 if($_REQUEST['x']=="thanks")
                  echo"<center><h5 class='red'>Thanks For registration</h5></center><br/>";
                 } ?>

		   	 	 	<form action="useraccountdb.php" style="border:5px solid white;padding:10px;"method="post">
					  	 <p>Name</p>
					  	 <input type="text"  id="f" onblur="return charc(this.id)" placeholder="" required="" name="fname" class="form-control"/>
						 <span style="font-size:20px;" id="ferror"></span>
						  <p>Email</p>
					  	 <input type="text" id="ems" onblur="return emaili(this.id)"  placeholder="" required=""class="form-control" name="email"/>
						 <span style="font-size:20px;"id="emserror"></span>
						 <p>Password</p>
					  	 <input type="password"   placeholder="" required="" id="pass1" class="form-control" name="password" /> 
						 <p>confirm password</p>
					  	 <input type="password"   placeholder="" required="" onblur="match()"id="pass2" class="form-control" name="password1" /> 
					  	 <span id="err" style="font-size:20px;"></span>
					  	 <p>Security Question</p>
                                   <select name="security" required=""  id="ques" class="form-control" >
										<option>Select security Question?</option>
										<option>What is Your Pet Name?</option>
										<option>Who is Your Favourite Person?</option>
										<option>What is the Name of Your First School?</option>
										<option>What is the Name of Your favourite movie?</option>
										<option>What is  Your favourite game?</option>
								   </select><span id="queserror"></span>
						<p>Answer</p>
                                    <input type="text" class="form-control" name="answer" required="">
                           		   
						 <p>Telephone</p>
					  	 <input type="text"  placeholder="" id="t" class="form-control" onblur="return telephone(this.id)" required="" name="tele">
                         <span id="terror"></span> 					  	
						 
					  	  
					  	 <center><input type="submit" onclick=" return clicki()" name="mybtn" value="Register"></center>
					</form>
		   	    </div> </br>
		   </div>
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		</div>   
	
		</div>
     </div>
</div>
  </div>
 <?php include"footer.php"?>