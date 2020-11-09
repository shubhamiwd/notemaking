<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db="note_making";
	$conn = mysqli_connect($servername, $username, $password,$db);
	global $conn;
	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	//echo "Connected successfully";
?>