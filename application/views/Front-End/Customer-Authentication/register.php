<?php
echo require_once  APPPATH . ('views\Front-End\header.php');
?>

<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Register</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="register-login-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="register-form">
                    <h2>Register</h2>
                    <form action="<?php echo base_url(); ?>CustomerController/Register" method="post">

                        <div class="group-input">
                            <label for="username">First Name</label>
                            <input type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo set_value('firstname') ?>">
                            <?php echo form_error('firstname', "<div class='error' style='color:red;'>", "</div>"); ?>
                        </div>

                        <div class="group-input">
                            <label for="username">Last Name</label>
                            <input type="text" id="lastname" name="lastname">
                            <?php echo form_error('lastname', "<div class='error' style='color:red;'>", "</div>"); ?>
                        </div>


                        <div class="group-input">
                            <label for="username">email address *</label>
                            <input type="text" id="email" name="email">
                            <?php echo form_error('email', "<div class='error' style='color:red;'>", "</div>"); ?>

                        </div>
                        <div class="group-input">
                            <label for="username">Contact </label>
                            <input type="text" id="contact" name="contact">
                            <?php echo form_error('contact', "<div class='error' style='color:red;' >", "</div>"); ?>

                        </div>
                        <div class="group-input">
                            <label for="pass">Password *</label>
                            <input type="password" id="pass" name="password">
                            <?php echo form_error('password', "<div class='error' style='color:red;'>", "</div>"); ?>

                        </div>
                        <div class="group-input">
                            <label for="con-pass">Confirm Password *</label>
                            <input type="password" id="con-pass" name="confirm_password">
                            <?php echo form_error('confirm_password', "<div class='error' style='color:red;'>", "</div>"); ?>

                        </div>

                        <button type="submit" class="site-btn register-btn">REGISTER</button>
                    </form>
                    <div class="switch-login">
                        <a href="<?php echo base_url(); ?>login_customer" class="or-login">Or Login</a>

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
                    <img src="img/logo-carousel/xlogo-1.png.pagespeed.ic.kC8RUBrHXN.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/xlogo-2.png.pagespeed.ic.1_Hh2N9EaE.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/xlogo-3.png.pagespeed.ic.HJeT8RC_FE.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/xlogo-4.png.pagespeed.ic.yN_lBBd7am.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="img/logo-carousel/xlogo-5.png.pagespeed.ic.8iYnWLx4cl.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>



<?php
echo require_once  APPPATH . ('views\Front-End\footer.php');
?>