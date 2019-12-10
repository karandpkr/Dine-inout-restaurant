
function email1(ids)
{
var a=document.getElementById(ids).value;
//var patt=/^([A-Za-z0-9\.\-\_]+\@+[a-zA-Z0-9]+\.+[a-z]{2}+\.+[a-z]+{2,3})$/;
var patt = /^([a-zA-Z0-9\.\-\_]+\@+[a-zA-Z0-9]+\.+[a-zA-Z]{2,3})$/;
if(!patt.test(a))
{document.getElementById(ids+"error").innerHTML="email not correct";
return false;}
else{document.getElementById(ids+"error").innerHTML="";
return true;}
}
 

function telephone(vds)
{
var d=document.getElementById(vds).value;
//var patt=/^([A-Za-z0-9\.\-\_]+\@+[a-zA-Z0-9]+\.+[a-z]{2}+\.+[a-z]+{2,3})$/;
var patt = /^([0-9]{10})$/;
if(!patt.test(d))
{document.getElementById(vds+"error").innerHTML="please enter ten digits";
return false;}
else
{document.getElementById(vds+"error").innerHTML="";
return true;}
}


function charc(ids)
{
var c=document.getElementById(ids).value;

var patt = /^([a-zA-Z]{0,9})$/;

if(!patt.test(c))
{document.getElementById(ids+"error").innerHTML="please fill only characters";
return false;}
else{document.getElementById(ids+"error").innerHTML="";
return true;}
}
 
 
function password(pds)
{
var e=document.getElementById(pds).value;

var patt = /^([a-zA-Z0-9\.\-\_]{2,3})$/;
if(!patt.test(e))
{document.getElementById(ids+"error").innerHTML="Password Is Not Strong";
return false;}
else{document.getElementById(ids+"error").innerHTML="";
return true;}
}
function inki()
{
var a=document.getElementById("sel").value;
if(a==="Select cancellation Reason")
{
 var b=document.getElementById("onki").innerHTML="Please Select Reason First";
 
 return false;
}
 else{
 
 return true;
} 
}



function sharmaH()
{
var b=document.getElementById("click").value;
if(b==="")
{
 document.getElementById("sp").innerHTML="Please fill First";
 
 return false;
}
 else{
 
 return true;
} 

}


  