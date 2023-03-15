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
<?php if($error =$this->session->flashdata('Cart')): ?>
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="alert alert-success">
                                                        <?php echo $error ?>
                                                </div>
                                                </div>
                                                </div>

                                            <?php endif ?>
                                                    <?php if($error =$this->session->flashdata('message')):
                                                    $message_class= $this->session->flashdata('message_class')
                                                        ?>
                                                    <div class="row">
                                                    <div class="col-lg-6">
                                                    <div class="alert <?= $message_class ?>">
                                                    <?php echo $error ?>
                                                        </div>
                                                     </div>
                                                    </div>
                                            <?php endif ?>
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <form action="<?= base_url() ?>CustomerController/update_favItemQty" method="post">
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
                                <?php $subTotal = 0;
                                if (!empty($cartItem)) {
                                    foreach ($cartItem as $row) {
                                        if($row['type'] == "wishlist"):
                                        $subTotal += $row['subtotal']; ?>
                                        <tr>
                                            <td class="cart-pic first-row"><img src="<?= base_url() ?>/uploads/<?= $row['image'] ?>" alt=""></td>
                                            <td class="cart-title first-row">
                                                <h5><?= $row['name'] ?></h5>
                                            </td>
                                            <td class="p-price first-row"><?= $row['price'] ?></td>
                                            <td class="qua-col first-row">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="hidden" name="rowid" value="<?= $row['rowid'] ?>">
                                                        <input type="text" name="qty" value="<?= $row['qty'] ?>">
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="total-price first-row"><?= $row["price"] * $row['qty'] ?></td>
                                            <td class="close-td first-row">
                                                <a onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('CustomerController/remove_Item/' . $row['rowid']); ?>':false;"><i class="ti-close"></i></a>
                                            </td>
                                        </tr>
                                    <?php 
                                    endif;    
                                }
                                    
                                } else { ?>
                                    <tr>
                                        <th colspan="5" class="text-center">Product(s) not found...</th>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="cart-buttons">
                            <a href="<?= base_url() ?>/front_end" class="primary-btn continue-shop">Continue shopping</a>
                            <button type="submit" class="primary-btn up-cart">Update cart</button>
                        </div>
                        </form>
                        <!-- <div class="discount-coupon">
<h6>Discount Codes</h6>
<form action="#" class="coupon-form">
<input type="text" placeholder="Enter your codes">
<button type="submit" class="site-btn coupon-btn">Apply</button>
</form>
</div> -->
                    </div>
                    <div class="col-lg-4 offset-lg-4">
                        <div class="proceed-checkout">
                            <ul>
                                <li class="subtotal">Subtotal <span><?= $subTotal; ?></span></li>
                                <li class="cart-total">Total <span><?= $subTotal; ?></span></li>
                            </ul>
                            <a href="#" class="proceed-btn">PROCEED TO CHECK OUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
echo require_once  APPPATH . ('views\Front-End\footer.php');
?>