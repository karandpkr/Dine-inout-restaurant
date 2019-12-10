<?php session_start();
if(!isset($_SESSION['email'])){
echo '<script type="text/javascript">window.location=\'index.php?x=loginfirst\';</script>';	
		 
	}?>
<?php 
	
	if(isset($_POST['abc'])){
		$em = $_POST['email'];
		$name = $_POST['txt'];
		
		}
		 $message = "
<html>
<head>
  <title>Verify Your GA-Tech Account</title>
</head>
<body>
  $name
</body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= "To:  <$em>" . "\r\n";
$headers .= 'From: Golden Advance Technology <care@gatechgroup.com>' . "\r\n";

// Mail it
mail($em, "Thanks Pay Now ", $message, $headers);
			echo '<script type="text/javascript">window.location=\'reservation.php?mail=send\';</script>';
//header("location:reservation.php?mail=send");
?>