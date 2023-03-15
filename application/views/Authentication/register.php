<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<!-- <link rel="icon" type="image/png" href="images/icons/favicon.ico"/> -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/login_assets/image/icons/favicon.ico">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css"> -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/login_assets/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css"> -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css"> -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/login_assets/vendor/animate/animate.css">

<!--===============================================================================================-->	
	<!-- <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css"> -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/login_assets/vendor/css-hamburgers/hamburgers.min.css">

<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css"> -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/login_assets/vendor/select2/select2.min.css">
    
<!--===============================================================================================-->
	<!-- <link rel="stylesheet" type="text/css" href="css/util.css"> -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/login_assets/css/util.css">

	<!-- <link rel="stylesheet" type="text/css" href="css/main.css"> -->
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/login_assets/css/main.css">

<!--===============================================================================================-->
</head>
<body>
   
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url('assets/login_assets/image/img-01.png')?>" alt="IMG">
                   
				</div>

				<form action="loginController/register" method="post" class="login100-form validate-form">
			
					<span class="login100-form-title">
					Register
					</span>

					<?php if($error =$this->session->flashdata('user_register')){ ?>
                    <div class="row">
                    <div>
                        <div class="alert alert-success">
                        <?php echo $error ?>
                                </div>
                                </div>
                                </div>
                    <?php }
					elseif($error =$this->session->flashdata('register')){ ?>
						<div class="row">
                    <div>
                        <div class="alert alert-danger">
                        <?php echo $error ?>
                                </div>
                                </div>
                                </div>

				<?php	}
					 ?>

					

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="firstname" placeholder="firstname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
                        
                          
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="lastname" placeholder="Lastname">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
                          
						</span>
					</div>
                    

					 <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div> 
                    <div class="wrap-input100 validate-input" data-validate = "Select cat is required">
                       
                        <select class="input100" name="gender" data-validate = "Select cat is required">
                            <option class="input100" value="none" selected>Select Gender</option>
                            <option class="input100" value="male">Male</option>
                            <option class="input100"  value="female">Female</option>
                            <option class="input100" value="other">other</option>
                        </select>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="city" placeholder="City">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-city" aria-hidden="true"></i>
                           
						</span>
					</div> 
					
					<div class="container-login100-form-btn">
						<button type="submit"  class="login100-form-btn" >
							Register
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="<?php echo base_url();?>login">
                      
							Login your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<!-- <script src="vendor/jquery/jquery-3.2.1.min.js"></script> -->
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/login_assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<!-- <script src="vendor/bootstrap/js/popper.js"></script> -->
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/login_assets/vendor/bootstrap/js/popper.js"></script>

	<!-- <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/login_assets/vendor/bootstrap/js/bootstrap.min.js"></script>

<!--===============================================================================================-->
	<!-- <script src="vendor/select2/select2.min.js"></script> -->
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/login_assets/vendor/select2/select2.min.js"></script>

<!--===============================================================================================-->
	<!-- <script src="vendor/tilt/tilt.jquery.min.js"></script> -->
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/login_assets/vendor/tilt/tilt.jquery.min.js"></script>

	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->
    <script type = 'text/javascript' src = "<?php echo base_url(); ?>assets/login_assets/js/main.js"></script>

</body>
</html>