<?php
echo require_once  APPPATH . ('views\Front-End\header.php');
?>
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="home.html"><i class="fa fa-home"></i> Home</a>
                    <a href="shop.html">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Image</th>
                                <th class="p-name">Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th><i class="ti-close"></i></th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($cartItems)){ ?>
                        <?php foreach($cartItems as $cart) {?>
                            <tr>
                                <td class="cart-pic first-row"><img src="<?= base_url() ?>/uploads/<?= $cart['image'] ?>" alt=""></td>
                                <td class="cart-title first-row">
                                    <h5><?= $cart['name'] ?></h5>
                                </td>
                                <td class="p-price first-row"><?= $cart['price'] ?></td>
                                <td class="qua-col first-row">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                        <input type="hidden" name="rowid" value="<?= $cart['rowid'] ?>">
                                        <input type="text" name="qty" value="<?= $row['qty'] ?>">
                                        </div>
                                    </div>
                                </td>
                                <td class="total-price first-row"><?= $row["price"] * $row['qty'] ?></td>
                                <td class="close-td first-row"> <button onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('CustomerController/removeItem/' . $row['rowid']); ?>':false;"><i class="ti-close"></i></button><i class="ti-close"></i></td>
                            </tr>
                            <?php }  
                            } else{ ?>
                            <tr>
                                        <th colspan="5" class="text-center">Product(s) not found...</th>
                                    </tr>
                            <?php }?>
                        
                           
                        </tbody>
                     
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cart-buttons">
                            <a href="<?php base_url() ?>/front_end" class="primary-btn continue-shop">Continue shopping</a>
                            <a href="<?php base_url() ?>/front_end" class="primary-btn up-cart">Update cart</a>
                        </div>
                      
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span></span></li>
                                <li class="cart-total">Total <span></span></li>
                            </ul>
                            <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="partner-logo">
    <div class="container">
        <div class="logo-carousel owl-carousel">
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo  base_url() ?>assets/front_end/img/logo-carousel/xlogo-1.png.pagespeed.ic.kC8RUBrHXN.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo  base_url() ?>assets/front_end/img/logo-carousel/xlogo-2.png.pagespeed.ic.1_Hh2N9EaE.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo  base_url() ?>assets/front_end/img/logo-carousel/xlogo-3.png.pagespeed.ic.HJeT8RC_FE.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo  base_url() ?>assets/front_end/img/logo-carousel/xlogo-4.png.pagespeed.ic.yN_lBBd7am.png" alt="">
                </div>
            </div>
            <div class="logo-item">
                <div class="tablecell-inner">
                    <img src="<?php echo  base_url() ?>assets/front_end/img/logo-carousel/xlogo-5.png.pagespeed.ic.8iYnWLx4cl.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
echo require_once  APPPATH . ('views\Front-End\footer.php');
?>