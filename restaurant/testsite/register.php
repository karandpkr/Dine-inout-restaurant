<?php 

echo $_SERVER['HTTP_USER_AGENT'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	require('mysqli_connect.php'); // Connect to the db.

		$firstname = $_POST['first_name'];
		$lastname = $_POST['last_name'];
		$email = $_POST['email'];
		
		$q = "INSERT INTO accounts (firstname, lastname, email) VALUES ('$firstname', '$lastname', '$email')";
		$r = @mysqli_query($dbc, $q); // Run the query.
		

		mysqli_close($dbc); // Close the database connection.

	

}
?>
<h1>Register</h1>
<form action="register.php" method="post">
	<p>First Name: <input type="text" name="first_name" required></p>
	<p>Last Name: <input type="text" name="last_name" required></p>
	<p>Email: <input type="text" name="email" required></p>
	<p><input type="submit" name="submit" value="Register"></p>
</form>
