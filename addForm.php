<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>add form</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-expand-lg bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="index.php">Logic Task</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="index.php">Contact Form</a>
							
						</li>
						<li class="nav-item">
							<a class="nav-link" href="management.php">User management</a>
						</li>
						
					</ul>
				</div>
			</div>
		</nav>
	</body>
	
	<?php
		
		if (!empty(['InputName']) && !empty($_GET['InputSurname']) && !empty($_GET['InputPhoneNumber']) && !empty($_GET['InputEmail']) &&  !empty($_GET['InputTerm']) && !empty($_GET['RodoCheck'])){
			$servername = "localhost";
			$username = "admin2021";
			$password = "";
			$dbname = "logic";
			$name = $_GET["InputName"];
			$surname = $_GET["InputSurname"];
			$phone_number = $_GET["InputPhoneNumber"];
			$email_address = $_GET["InputEmail"];
			$term = $_GET["InputTerm"];
			
			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			
			$sql = "select id from terms where terms.term = '$term'";
			$result = $conn->query($sql);
			while ($row = $result->fetch_assoc()) {
				$term_id = $row['id'];
			}
			$sql = "INSERT INTO sent_forms (name, surname, phone_number, email_address, term_id)
			VALUES ('$name', '$surname', '$phone_number', '$email_address', '$term_id')";
			
			if ($conn->query($sql) === TRUE) {
				echo" <div class='alert alert-success' role='alert'>Form sent successfully </div>";
			} 
			
			
			$conn->close();
		}
		else {
			echo "<div class='alert alert-danger' role='alert'> Not all blanks were filled</div>";
			die(1);
			
		}
	?>
</html>

