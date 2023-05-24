<?php 
 echo require_once  APPPATH. ('views\Front-End\header.php');
?>
<div class="breacrumb-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="breadcrumb-text">
					<a href="<?php echo base_url();?>CustomerController/login"
						><i class="fa fa-home"></i> Home</a
					>
					<span>Login</span>

					
				</div>
			</div>
		</div>
	</div>
</div>

<div class="register-login-section spad">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div class="login-form">
					<h2>Login</h2>
                    <?php  if($this->session->flashdata('login_failed')){ ?>
					<div class="alert alert-danger">
						<?php echo $this->session->flashdata('login_failed') ?>
					</div>
					<?php }?>
					<form
						action="<?php echo base_url(); ?>CustomerController/login_customer"
						method="POST"
					>
						<div class="group-input">
							<label for="username">Email *</label>
							<input type="text" id="email" name="email" />
                            <?php echo form_error('email',"<div class='error' style='color:red;'>","</div>"); ?>  
						</div>
						<div class="group-input">
							<label for="pass">Password *</label>
							<input type="password" id="pass" name="password" />
                            <?php echo form_error('password',"<div class='error' style='color:red;'>","</div>"); ?> 
						</div>
						<div class="group-input gi-check">
							<div class="gi-more">
								<label for="save-pass">
									Save Password
									<input type="checkbox" id="save-pass" />
									<span class="checkmark"></span>
								</label>
								<!-- <a href="#" class="forget-pass">Forget your Password</a> -->
							</div>
						</div>
						<button type="submit" class="site-btn login-btn">Sign In</button>
					</form>
					<div class="switch-login">
						<a href="<?php echo base_url();?>register_customer" class="or-login"
							>Or Create An Account</a
						>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="partner-logo">
	<div class="container">
		<div class="logo-carousel owl-carousel">
			<div class="logo-item">
				<div class="tablecell-inner">
					<img
						src="img/logo-carousel/xlogo-1.png.pagespeed.ic.kC8RUBrHXN.png"
						alt=""
					/>
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img
						src="img/logo-carousel/xlogo-2.png.pagespeed.ic.1_Hh2N9EaE.png"
						alt=""
					/>
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img
						src="img/logo-carousel/xlogo-3.png.pagespeed.ic.HJeT8RC_FE.png"
						alt=""
					/>
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img
						src="img/logo-carousel/xlogo-4.png.pagespeed.ic.yN_lBBd7am.png"
						alt=""
					/>
				</div>
			</div>
			<div class="logo-item">
				<div class="tablecell-inner">
					<img
						src="img/logo-carousel/xlogo-5.png.pagespeed.ic.8iYnWLx4cl.png"
						alt=""
					/>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
 echo require_once  APPPATH. ('views\Front-End\footer.php');
?>
