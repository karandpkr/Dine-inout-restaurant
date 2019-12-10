

function credit(){
document.getElementById("info").style.display="none"; 
document.getElementById("clicki").style.display="block";
 document.getElementById("clicki1").style.display="none";
 document.getElementById("clicki2").style.display="none";
 document.getElementById("clicki3").style.display="none";
}


function debit(){
 document.getElementById("info").style.display="none";
document.getElementById("clicki1").style.display="block";
document.getElementById("clicki").style.display="none";


document.getElementById("clicki2").style.display="none";
document.getElementById("clicki3").style.display="none";
 
}


function net(){
 document.getElementById("info").style.display="none";
document.getElementById("clicki2").style.display="block";
document.getElementById("clicki").style.display="none";

document.getElementById("clicki1").style.display="none";
document.getElementById("clicki3").style.display="none";
 
}
function cash(){
 document.getElementById("info").style.display="none";
 document.getElementById("clicki2").style.display="none";
document.getElementById("clicki3").style.display="block";
document.getElementById("clicki").style.display="none";

document.getElementById("clicki1").style.display="none";

 
}
