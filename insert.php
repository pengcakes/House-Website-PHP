<?php
	// 1. Create a database connection
	require_once("config.php");

	// Usually this data would come from HTML form values in $_POST
	// $firstName = "Mittens";
	// $lastName = "Peng";
	// $email = "mittens@u.rochester.edu";
		// Repeat the above line as needed
	
	// This data is coming from HTML form values in $_POST
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$email = $_POST["email"];

	// You really should escape all strings
	$firstName = mysqli_real_escape_string($connection, $firstName);
	$lastName = mysqli_real_escape_string($connection, $lastName);
	$email = mysqli_real_escape_string($connection, $email);
	
	// 2. Perform database query
	$query  = "INSERT INTO emails (firstName, lastName, email) VALUES ('$firstName','$lastName','$email')";
	$result = mysqli_query($connection, $query);

	header("Location: success.php")

?>