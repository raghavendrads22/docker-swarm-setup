<html>
<head>
	<?php include('include/header.php'); ?>
</head>
<body>
	<?php include('include/navbar.php'); ?>
	<main class="container">
		<h1 class="mt-5">User registration</h1>
		<form action="register.php" method="POST" id="registrationForm">
			<div class="form-group">
				<label for="name">Your name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="email">Your email:</label>
				<input type="text" class="form-control" id="email" name="email">
			</div>
			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</main>
	<?php include('include/footer.php'); ?>
</body>
</html>
