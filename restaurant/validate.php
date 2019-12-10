<?php 

function ciplav($str){
	$str = trim($str);
	$str =  stripslashes($str);
	$str = htmlspecialchars($str);
	return $str;
}
$uid= ciplav($_POST['uid']);
			$pass= ciplav($_POST['pass']);