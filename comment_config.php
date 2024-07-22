<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "sedebombe1303MOMO";
	$dbname = "comment_system_php";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
	}

?>