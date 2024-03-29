<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="<?php echo base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>
<body class="bg-gradient-primary">
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5">
                        <img src="<?php echo base_url('assets/img/regist.jpg')?>" alt="" height="500px" width="460px">		
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <?php 
                            if($this->session->flashdata('error') !='')
                            {
                                echo '<div class="alert alert-danger" role="alert">';
                                echo $this->session->flashdata('error');
                                echo '</div>';
                            }
                            ?>
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="<?= base_url('Register/save') ?>" method="POST">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control form-control-user"
                                        placeholder="Name">
                                </div> 
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user"
                                        placeholder="Username">
                                </div>                                        
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        placeholder="Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Register</button>                        <
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('Login')?>">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

	<!---------- Javascript ---------->
	<script src="<?php echo base_url('assets/js/sb-admin-2.min.js') ?>"></script>
</body>
</html>