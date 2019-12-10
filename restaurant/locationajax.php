<html>
	<head>
		<script>
			function uawke(){
				var obj;
				if(window.XMLHttpRequest){
					obj = new XMLHttpRequest();
				}
				else{
					obj = new ActiveXObject("Microsoft.XMLHTTP");
				}
				obj.open("GET","con1.php",true);
				obj.send();
				
				obj.onreadystatechange =function(){
					if(obj.readyState==4 && obj.status==200)
					{
						var a= obj.responseText;
						document.getElementById("p").innerHTML=a;
					}
				}
			}
		</script>
	</head>
	<body>
		<button onclick="uawke()">Click Me</button>
		<p id="p">This is Old Contnet </p>
	</body>
</html>