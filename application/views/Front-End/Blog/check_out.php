<?php
echo require_once  APPPATH . ('views\Front-End\header.php');
?>

   <style>
                .btn_choose_sent input {
                -webkit-appearance: none;
                display: block;
                margin: 10px;
                width: 18px;
                height: 18px;
                border-radius: 12px;
                cursor: pointer;
                vertical-align: middle;
                box-shadow: hsla(0,0%,100%,.15) 0 1px 1px, inset hsla(0,0%,0%,.5) 0 0 0 1px;
                background-color: hsla(0,0%,0%,.2);
                    background-image: -webkit-radial-gradient( #fff 0%, #fff 15%, #fff 28%, #fff 70% );
                background-repeat: no-repeat;
                -webkit-transition: background-position .15s cubic-bezier(.8, 0, 1, 1),
                    -webkit-transform .25s cubic-bezier(.8, 0, 1, 1);
                outline: none;
                }
                .btn_choose_sent input:checked {
                -webkit-transition: background-position .2s .15s cubic-bezier(0, 0, .2, 1),
                    -webkit-transform .25s cubic-bezier(0, 0, .2, 1);
                }
                .btn_choose_sent input:active {
                -webkit-transform: scale(1.5);
                -webkit-transition: -webkit-transform .1s cubic-bezier(0, 0, .2, 1);
                }



                /* The up/down direction logic */

                .btn_choose_sent input,
                .btn_choose_sent input:active {
                background-position: 0 24px;
                }
                .btn_choose_sent input:checked {
                background-position: 0 0;
                }
                .btn_choose_sent input:checked ~ input,
                .btn_choose_sent input:checked ~ input:active {
                background-position: 0 -24px;
                }

                .btn_choose_sent{
                        background: #EF2D56;
                    color: #fff;
                    box-shadow: 0 10px 20px rgba(125, 147, 178, .3);
                    border: none; 
                    border-radius: 3px;
                    font-size: 16px;
                    line-height: 10px;
                    padding:  16px 20px 16px 38px;
                    text-align: center;
                    display: inline-block;
                    text-decoration: none;
                    margin-right: 30px;
                    transition: all .3s;
                    height: auto;
                    cursor: pointer;
                    position: relative;
                    outline: none;
                }

                .btn_choose_sent input{
                    position: absolute;
                    left: 0;
                    right: 0;
                    z-index: 99;
                    top: 2px;
                }

                .btn_choose_sent input:after{
                    position: absolute;
                    content: '';
                    width: 15rem;
                    left: 0;
                    right: 0;
                    /* background: red; */
                    /* z-index: -1; */
                    height: 40px;
                    top: -10px;
                }

                .bg_btn_chose_1{
                    background-color: #e7ab3c !important;
                    
                }


                .bg_btn_chose_2{
                    background-color: #e7ab3c !important;
                }


                .bg_btn_chose_3{
                    background-color:#e7ab3c !important;
                    margin-left: 110px;
                }


                /*-=p=--=*/




                .btn_choose_sent_check_b{
                    background: #EF2D56;
                    color: #fff;
                    box-shadow: 0 10px 20px rgba(125, 147, 178, .3);
                    border: none; 
                    border-radius: 3px;
                    font-size: 16px;
                    line-height: 10px;
                    padding:  16px 20px 16px 46px;
                    text-align: center;
                    display: inline-block;
                    text-decoration: none;
                    margin-right: 30px;
                    transition: all .3s;
                    height: auto;
                    cursor: pointer;
                    position: relative;
                    outline: none;
                }
   </style>


<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="index-2.html"><i class="fa fa-home"></i> Home</a>
                    <a href="shop.html">Shop</a>
                    <span>Check Out</span>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="checkout-section spad">
    <div class="container">
        <form action="OrderController/insert_check_out" class="checkout-form" method="post">
            <div class="row">
                <div class="col-lg-6">
                    <div class="checkout-content">
                        <a href="#" class="content-btn">Click Here To Login</a>
                    </div>
                    <h4>Biiling Details</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="fir">First Name<span>*</span></label>
                            <input type="text" name="firstname" id="fir" value="<?php echo set_value('firstname')?>">
                            <?php echo form_error('firstname', "<div class='error' style='color:red;'>", "</div>"); ?>
                        </div>
                        <div class="col-lg-6">
                            <label for="last">Last Name<span>*</span></label>
                            <input type="text" name="lastname" id="last" value="<?php echo set_value('lastname')?>">
                            <?php echo form_error('lastname',"<div class='error' style='color:red;'>","</div>"); ?>  

                        </div>
                      
                        <div class="col-lg-12">
                            <label for="cun">Country<span>*</span></label>
                            <input type="text" name="country" id="cun" value="<?php echo set_value('country')?>">
                            <?php echo form_error('country',"<div class='error' style='color:red;'>","</div>"); ?>  

                        </div>
                        
                        <div class="col-lg-6">
                            <label for="email">Email Address<span>*</span></label>
                            <input type="email" name="email" id="email" value="<?php echo set_value('email')?>">
                            <?php echo form_error('email',"<div class='error' style='color:red;'>","</div>"); ?>  

                        </div>
                        <div class="col-lg-6">
                            <label for="phone">Phone<span>*</span></label>
                            <input type="text" name="contact" id="phone" value="<?php echo set_value('contact')?>">
                            <?php echo form_error('contact',"<div class='error' style='color:red;'>","</div>"); ?>  

                        </div>
                        <div class="col-lg-12">
                            <label for="street">Street Address<span>*</span></label>
                            <input type="text" name="address" id="street" class="street-first" value="<?php echo set_value('address')?>">
                            <?php echo form_error('address',"<div class='error' style='color:red;'>","</div>"); ?>  

                        </div>
                     
                        <div class="col-lg-12">
                            <label for="town">Town / City<span>*</span></label>
                            <input type="text" name="city" id="town" value="<?php echo set_value('city')?>">
                            <?php echo form_error('city',"<div class='error' style='color:red;'>","</div>"); ?>  

                        </div>
                        
                    </div>
                    <div class="order-btn">
                                <button type="submit" class="site-btn place-btn">Place Order</button>
                            </div>  
                </div>
                <div class="col-lg-6">
                  
                    <div class="place-order">
                        <h4>Your Order</h4>
                        <div class="order-total">

                            <ul class="order-table">
                                <li>Product <span>Total</span></li>
                                <?php $subTotal = 0;
                                if(!empty($cartItems)) {
                                
                                foreach($cartItems as $row){
                                    if($row['type'] == "cart"): 
                                        $subTotal += $row['subtotal']; ?>
                                <li class="fw-normal"><?= $row['name'] ?> QTY: <?= $row['qty'] ?> Price:<?= $row['price'] ?>  <span><?= $row["price"] * $row['qty'] ?></span></li>
                                <?php 
                            endif;    
                            }  
                            } else {?>
                             <tr>
                                        <th colspan="5" class="text-center">Product(s) not found...</th>
                                    </tr>
                                    <?php }?>
                                    <li class="fw-normal">Subtotal <span><?= '$'.$subTotal; ?></span></li>
                                    <li class="total-price">Total <span><?= '$'. $subTotal; ?></span></li>
                            </ul>
                        <div>
                         <button type="button" class="btn_choose_sent bg_btn_chose_1">
                            <input type="radio" value="1" name="payement_method" checked />Cheque Payment
                            <?php echo form_error('payement_method',"<div class='error' style='color:red;'>","</div>"); ?>  
                        </button>
                     
                        <button type="button" class="btn_choose_sent bg_btn_chose_2">
                            <input type="radio" name="payement_method" value="2" />  Paypal Payment
                            <?php echo form_error('payement_method',"<div class='error' style='color:red;'>","</div>"); ?>  

                        </button>
                        <br> <br>
                        <button type="button" class="btn_choose_sent bg_btn_chose_3">
                            <input type="radio" name="payement_method" value="3" />  Cash On Delivery
                            <?php echo form_error('payement_method',"<div class='error' style='color:red;'>","</div>"); ?>  

                        </button>
                        </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php
echo require_once  APPPATH . ('views\Front-End\footer.php');
?>