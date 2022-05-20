<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>logic task</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<?php include("getTerms.php") ?>
		
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
		<div class="mt-2 text-center">
			<h1 class="mb-3">Please fill in  the form </h1>
		</div>
		
		<form class="mt-3" action="addForm.php" method="GET">
			<div class="mb-3">
				<label for="InputEmail" class="form-label">Email address</label>
				<input type="text" class="form-control" id="InputEmail" name="InputEmail" aria-describedby="emailHelp" required>
				
			</div>
			<div class="mb-3">
				<label for="InputFirstName" class="form-label">First Name </label>
				<input type="text" class="form-control" name="InputName" id="InputName" aria-describedby="emailHelp" required >
				
			</div>
			<div class="mb-3">
				<label for="InputSurname" class="form-label">Surname</label>
				<input type="text" class="form-control" id="InputSurname" name="InputSurname" required>
			</div>
			<div class="mb-3">
				<label for="InputPhoneNumber" class="form-label">Phone Number</label>
				<input type="text" class="form-control " id="InputPhoneNumber" name="InputPhoneNumber" required>
				
			</div>
			
			<select class="form-select mb-3 mt-4"  name="InputTerm">
				<option selected>Wybierz datę </option>
				<?php 
					if ($result->num_rows > 0) {
						while($row = $result->fetch_assoc()) { ?>
				<tr>
					<option><?php echo $row['term']; }}?></option>
			<select>
						
						
			
			
			
			
			<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" name="RodoCheck" id="RodoCheck">
				<label class="form-check-label" for="RodoCheck">I hereby give consent for my personal data included in my application to be processed for the purposes of the recruitment process under the European Parliament's and Council of the European Union Regulation on the Protection of Natural Persons as of 27 April 2016, with regard to the processing of personal data and on the free movement of such data, and repealing Directive 95/46/EC (Data Protection Directive)</label>
			</div>
			
			<button type="submit" class="btn btn-primary" id="sendForm" onlick="resetForm();">Wyślij zgłoszenie</button>
		</form>
	</body>
</html>
