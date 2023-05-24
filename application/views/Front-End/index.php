<?php  
include_once('header.php'); ?>
<section class="hero-section">
	<div class="hero-items owl-carousel">
       <?php foreach($slide_list as $slide){ ?>
		<div
			class="single-hero-items set-bg"
			data-setbg="<?php echo base_url('uploads/'.$slide->image); ?>">
			
			<div class="container">
				<div class="row">
					<div class="col-lg-5">
						<!-- <span>Bag,kids</span> -->
						<h1><?php echo $slide->name ?></h1>
						<p>
							<?php echo $slide->description ?>
						</p>
						<a href="#" class="primary-btn"><?php echo $slide->shop ?></a>
					</div>
				</div>
				<!-- <div class="off-card">
					<h2>Sale <span>50%</span></h2>
				</div> -->
			</div>
		</div>
		<?php }?>
		
	</div>
</section>

<div class="banner-section spad">
	<div class="container-fluid">
		<div class="row">
				<?php foreach($front_cat as $row2){  ?>
			<div class="col-lg-4">
				<div class="single-banner">
					<img src="<?php echo base_url(); ?>assets/front_end/img/categories.jpg" alt=""/>
					<div class="inner-text">
						<h4><?php echo $row2->category_name; ?></h4>
					</div>
				</div>
			</div>

			<?php } ?>
		</div>
	</div>
</div>

<section class="women-banner spad">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<h3 class="text-center catagory-name" style="margin-bottom: 30px;"> Feature Product</h3>
				<div class="product-slider owl-carousel">
				<?php foreach($alldata1 as $row1){  ?>
					<div class="product-item item">
						<div class="pi-pic">
							<img src="<?php echo base_url('uploads/'.$row1->image); ?>" alt="product-pic" width="100%" height="400%" class="img-fluid" />
							<div class="icon">
							<a href="<?php echo base_url(); ?>ChatController/add"><i class="icon_bag_alt" style="margin-left: 20px;"></i><span style="margin-right: 30px;">Chat</span></a></div>
							<div class="sale">Sale</div>
						
							<div class="icon">
							<a href='<?php echo base_url(); ?>fav_to_cart/<?= $row1->product_id ?>'><i class="icon_heart_alt"></i></a>
							</div>
						
							
							<ul>
							
								<li class="w-icon active quick-view"><a href="<?php echo base_url(); ?>add_to_cart/<?= $row1->product_id ?>">+ Add to Cart View</a></li>
							</ul>
						</div>
						<div class="pi-text">
							<div class="catagory-name"><?php echo $row1->product_title; ?></div>
								<a href="<?php echo base_url(); ?>CustomerController/category_products_listing/<?= $row1->pid ?>">
									<h5>Product Title</h5>
								</a>
							<div class="product-price">
							<?php echo $row1->sale_price; ?>
								<span><?php echo $row1->discount_price; ?></span>
							</div>
						</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>
</section>

<section
	class="deal-of-week set-bg spad"
	data-setbg="<?php echo base_url('uploads/').getbannerInfo()->image; ?>" >
	<div class="container">
		<div class="col-lg-6 text-center">
			<div class="section-title">
			
					
			</div>
			</div>
		
			<a href="#" class="primary-btn">Shop Now</a>
		</div>
	</div>
</section>

<section>
<div class="container">
	<h3 class="text-center" style="margin-bottom: 30px; margin-top: 30px;" >Our Products</h3>
<div class="product-list">
                    <div class="row">
					<?php foreach($alldata as $row){ ?>
                        <div class="col-lg-3 col-sm-6">
                            <div class="product-item">
                                <div class="pi-pic">
                                    
									<img src="<?php echo base_url('uploads/'.$row->image); ?>" alt="product-pic" width="100%" height="400%" class="img-fluid" />
                                    <div class="sale pp-sale">Sale</div>
                                    <div class="icon">
									<a href='<?php echo base_url(); ?>fav_to_cart/<?= $row->product_id ?>'><i class="icon_heart_alt"></i></a>
                                    </div>
                                    <ul>
                                        <li class="w-icon active quick-view ">
										<a href="<?php echo base_url(); ?>add_to_cart/<?= $row->product_id ?>">
											<!-- <a href="<?= base_url(); ?>add_to_cart/"<?=$row->product_id?>> -->
												Add to Cart View
											</a>
										</li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name"><?php echo $row->category_name; ?></div>
                                    <a href="<?php echo base_url(); ?>CustomerController/category_products_listing/<?= $row->product_id ?>">
                                        <h5><?php echo $row->product_title; ?></h5>
                                    </a>
                                    <div class="product-price">
									
										<?php echo $row->sale_price; ?>
                                        <span><?php echo $row->discount_price; ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php } ?>
                    </div>
                </div>
</div>
</section>

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

		
		<?php foreach($blog_list as $view){  ?>
			<div class="col-lg-4 col-md-6">
				<div class="single-latest-blog">	
					<img src="<?php echo base_url('uploads/'.$view->image); ?>" alt="product-pic" width="100%" height="400%" class="img-fluid" />
					<div class="latest-text">
						<div class="tag-list">
							<div class="tag-item">
								<i class="fa fa-calendar-o"></i>
								<?php echo $view->date; ?>
							</div>
							<div class="tag-item">
							
								<?php echo $view->blog_title; ?>
							</div>
						</div>
						<a href="<?php echo base_url(); ?>Front_endController/blog_detail/<?= $view->id ?>">
							<h4>The Best Street Style From London Fashion Week</h4>
						</a>
						<p>
						<?php echo $view->description; ?>
						</p>
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
							<img
								src="<?php echo base_url(); ?>assets/front_end/img/xicon-1.png.pagespeed.ic.7fbHNeSHTr.png"
								alt=""
							/>
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
							<img
								src="<?php echo base_url(); ?>assets/front_end/img/xicon-2.png.pagespeed.ic.1ZD7Y3ak6P.png"
								alt=""
							/>
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
							<img
								src="<?php echo base_url(); ?>assets/front_end/img/xicon-1.png.pagespeed.ic.7fbHNeSHTr.png"
								alt=""
							/>
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

		<style>
				p.a {
				font-family: "Times New Roman", Times, serif;
				}

				p.b {
				font-family: Arial, Helvetica, sans-serif;
				}
				.logo_brand{
					padding: 7px 14px;
					border-radius: 15px ;
					background-color: #f5f5f5;
				}

		</style>
<h4 class="text-center" style="margin-bottom: 30px; margin-top: 30px;">Brand Name</h4>
<div class="partner-logo">
	<div class="container">
		<div class="logo-carousel owl-carousel">
		<?php foreach(brand_data() as $data_brand) {?>
			<div class="logo-item">
			
				<div class="tablecell-inner">
					
				<h5 class="logo_brand bg-warning" ><?= $data_brand->brand_name ?></h5>
			
				</div>
				
			</div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- <script>
$(document).ready(function() {
 $("#owl-demo").owlCarousel({
   navigation : true
 });

});
</script> -->
<?php echo include_once('footer.php');   ?>