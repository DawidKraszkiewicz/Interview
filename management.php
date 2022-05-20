<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>logic task</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
	<script src="accept.js"> </script>

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
			include("getForms.php");
			
		?>
		
		<table class="table">
			<thead>
				<tr>
					<th scope="col">form id </th>
					<th scope="col">name</th>
					<th scope="col">surname</th>
					<th scope="col">phone number</th>
					<th scope="col">email address</th>
					<th scope="col">term</th>
					<th scope="col">accept</th>

				</tr>
			</thead>
			<tbody>
		<?php
			
			if ($result->num_rows > 0) {
				// output data of each row
		
			while($row = $result->fetch_assoc()) { ?>
			<tr>
				<?php $id = $row['id']; ?>
				<td><?php echo $row['id']; ?> </td>
				<td><?php echo $row['name']; ?> </td>
				<td><?php echo $row['surname']; ?> </td>
				<td><?php echo $row['phone_number']; ?> </td>
				<td><?php echo $row['email_address']; ?> </td>
				<td ><?php echo $row['term']; ?> </td>
				<td><button value="<?php echo htmlspecialchars($id) ?>" type="button" class="btn btn-success pr-4" onclick="accept(this.value)" > Accept </button> </td>
			<tr>
			<?php
					 }} else { ?>
				<tr>
					<td colspan="8">No data found</td>
				</tr>
			<?php } ?>
			</tbody>
			<div id="hint"> </div>
			


	