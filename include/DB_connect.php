<?php
	require_once 'include/config.php';
	
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE); // open connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	
?>