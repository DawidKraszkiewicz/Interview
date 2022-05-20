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
	
	
	$sql = "SELECT sent_forms.name, sent_forms.surname, sent_forms.phone_number, sent_forms.email_address, terms.term, sent_forms.id FROM sent_forms join terms on sent_forms.term_id = terms.id where sent_forms.accepted = 0";
	$result = $conn->query($sql);
	
	
	
	$conn->close();
	