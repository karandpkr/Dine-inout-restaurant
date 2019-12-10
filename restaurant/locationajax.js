
function callme(vals)
{
document.getElementById("click").value=vals;

}
			
			function locationq(vals){
				
				var obj;
				var r=document.getElementById("city").value;
			if(r==""|| r=="0")
			{
						alert("please select City First");
			}
			else if(vals==" "|| vals==""){
			document.getElementById("divi").innerHTML="";
						document.getElementById("divi").style.display="none";
			}
			else{
				if(window.XMLHttpRequest){
					obj = new XMLHttpRequest();
				}
				else{
					obj = new ActiveXObject("Microsoft.XMLHTTP");
					
				}
				
				
				var url="locationdb.php?x="+vals+"&y="+r;
				obj.open("GET",url,true);
				obj.send();
				
				obj.onreadystatechange =function(){
					if(obj.readyState==4 && obj.status==200)
					{
						var a= obj.responseText;
						document.getElementById("divi").innerHTML=a;
						document.getElementById("divi").style.display="block";
						
					}
				}
			}
			}