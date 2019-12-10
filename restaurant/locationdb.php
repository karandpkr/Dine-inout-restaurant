<?php

$x=$_REQUEST['x'];
$y=$_REQUEST['y'];
include"config.php";
$res=mysqli_query($obj,"SELECT * FROM  `location` WHERE `cname`='$y' and `lname` LIKE  '%$x%'");
 
while($row=mysqli_fetch_array($res))

{

echo"<p style='color:white;cursor:pointer;font-size:1em;'";
   
?>
onclick="callme('<?php echo $row['lname'] ?>')">
<?php
echo "$row[lname]<br/></p>";
}
 

?>