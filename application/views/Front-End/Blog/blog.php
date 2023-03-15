<?php
echo require_once  APPPATH . ('views\Front-End\header.php');
?>

<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>From The Blog</h2>
                </div>
            </div>
        </div>
        <div class="row">
        <?php foreach($alldata as $view){  ?>
            <div class="col-lg-3 col-md-6">
                <div class="single-latest-blog">
                <img src="<?php echo base_url('uploads/'.$view->image); ?>" alt="product-pic" width="100%" height="400%" class="img-fluid" />

                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i>
                                <?php echo $view->date; ?>
                            </div>
                            <!-- <div class="tag-item">
                                <i class="fa fa-comment-o"></i>
                                5
                            </div> -->
                        </div>
                        <a href="<?php echo  base_url() ?>Front_endController/blog_detail/<?= $view->id ?>">
                            <h4><?php echo $view->blog_title; ?>The Best Street Style From London Fashion Week</h4>
                        </a>
                        <p><?php echo $view->description; ?> </p>
                    </div>
                </div>
            </div>
            <?php  } ?>
        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="<?php echo base_url(); ?>assets/front_end/img/xicon-1.png.pagespeed.ic.7fbHNeSHTr.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Free Shipping</h6>
                            <p>For all order over 99$</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="<?php echo base_url(); ?>assets/front_end/img/xicon-2.png.pagespeed.ic.1ZD7Y3ak6P.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Delivery On Time</h6>
                            <p>If good have prolems</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="<?php echo base_url(); ?>assets/front_end/img/xicon-1.png.pagespeed.ic.7fbHNeSHTr.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Secure Payment</h6>
                            <p>100% secure payment</p>
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