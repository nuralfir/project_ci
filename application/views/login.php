<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>
<body>
	<div class="container">
		<!-- Outer Row -->
		<div class="row justify-content-center">

			<div class="col-xl-10 col-lg-12 col-md-9">

				<div class="card o-hidden border-0 shadow-lg my-5">
					<div class="card-body p-0">
						<!-- Nested Row within Card Body -->
						<div class="row">
							<div class="col-lg-6">								
								<img src="<?php echo base_url('assets/img/kucing.png')?>" alt="" height="475px" width="450px">					
							</div>
							<div class="col-lg-6 align-self-center">								
								<div class="p-5">
									<div class="text-center">
										<h1 class="h4 text-gray-900 mb-4">Welcome!</h1>
									</div>
									<?php 
									if($this->session->flashdata('error') !='')
									{
										echo '<div class="alert alert-danger" role="alert">';
										echo $this->session->flashdata('error');
										echo '</div>';
									}
									?>
									<?php 
									if($this->session->flashdata('success_register') !='')
									{
										echo '<div class="alert alert-info" role="alert">';
										echo $this->session->flashdata('success_register');
										echo '</div>';
									}
									?>
									<form class="user" action="<?= base_url('Login/proses')?>" method="POST">
										<div class="form-group">
											<input type="text" name="username" class="form-control form-control-user"												
												placeholder="Enter Username">
										</div>
										<div class="form-group">
											<input type="password" name="password" class="form-control form-control-user"
												placeholder="Password">
										</div>
										<button type="submit" class="btn btn-primary btn-user btn-block">Login</button>																		
										<button type="button" class="btn btn-outline-primary btn-user btn-block" onclick="gotoRegister()">Register</button>										
										<hr>
										<div class="text-center">
                                			<a class="small" href="forgot-password.html">Forgot Password?</a>
                            			</div>							
									</form>									
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>`
	</div>

	<!---------- Javascript ---------->
	<script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>
	<script>
		function gotoRegister()
		{
			location.href="<?= base_url('Register')?>"
		}
	</script>
</body>
</html>