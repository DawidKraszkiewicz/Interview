
	<?php
	$servername = "localhost";
	$username = "admin2021";
	$password = "";
	$dbname = "logic";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	
	$sql = "SELECT term FROM terms";
	$result = $conn->query($sql);
	
	
	
	$conn->close();
	
?>