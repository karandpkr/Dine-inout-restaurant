function ajaxcl1(vals)
{
var ob;
if(window.XMLHttpRequest)
{
ob=new XMLHttpRequest();
}
else{
ob=new ActiveXObject("Microsoft.XMLHTTP");
}

var url="xyz.php?id="+vals;
ob.open("GET",url,true);
ob.send();
ob.onreadystatechange=function()
{
if(ob.readyState==4&&ob.status==200)
{
var a=ob.responseText;
document.getElementById("divi").innerHTML=a;
}

}
return false;
}