<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
</head>
<body>
	<h2>Login</h2>
	<div class="container">
		<form action="<?php echo base_url('Dashboard') ?>">
			<div class="mb-3">
				<label for="exampleFormControlInput1" class="form-label">Email address</label>
				<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
			</div>
			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Primary</button>
		</form>
		<a href="<?php echo base_url('dashboard2') ?>" class="btn btn-primary">Login</a>
	</div>

	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>
</html>