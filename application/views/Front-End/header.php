<!DOCTYPE html>
<html lang="zxx">
	<!-- Mirrored from preview.colorlib.com/theme/fashi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Aug 2022 12:41:01 GMT -->
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="Fashi Template" />
		<meta name="keywords" content="Fashi, unica, creative, html" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title> Ecommerce | Template</title>
		<link
			href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&amp;display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="<?php echo base_url(); ?>assets/front_end/css/A.bootstrap.min.css%2bfont-awesome.min.css%2bthemify-icons.css%2belegant-icons.css%2bowl.carousel.min.css%2bnice-select.css%2bjquery-ui.min.css%2bslicknav.min.css%2bstyle.css%2cMcc.REY_uItUWZ.css"
			type="text/css"
		/>
		<script nonce="526d6851-63bd-4ed1-9b05-eee502f4c684">
			(function (w, d) {
				!(function (a, e, t, r) {
					a.zarazData = a.zarazData || {};
					a.zarazData.executed = [];
					a.zaraz = { deferred: [] };
					a.zaraz.q = [];
					a.zaraz._f = function (e) {
						return function () {
							var t = Array.prototype.slice.call(arguments);
							a.zaraz.q.push({ m: e, a: t });
						};
					};
					for (const e of ["track", "set", "ecommerce", "debug"])
						a.zaraz[e] = a.zaraz._f(e);
					a.zaraz.init = () => {
						var t = e.getElementsByTagName(r)[0],
							z = e.createElement(r),
							n = e.getElementsByTagName("title")[0];
						n && (a.zarazData.t = e.getElementsByTagName("title")[0].text);
						a.zarazData.x = Math.random();
						a.zarazData.w = a.screen.width;
						a.zarazData.h = a.screen.height;
						a.zarazData.j = a.innerHeight;
						a.zarazData.e = a.innerWidth;
						a.zarazData.l = a.location.href;
						a.zarazData.r = e.referrer;
						a.zarazData.k = a.screen.colorDepth;
						a.zarazData.n = e.characterSet;
						a.zarazData.o = new Date().getTimezoneOffset();
						a.zarazData.q = [];
						for (; a.zaraz.q.length; ) {
							const e = a.zaraz.q.shift();
							a.zarazData.q.push(e);
						}
						z.defer = !0;
						for (const e of [localStorage, sessionStorage])
							Object.keys(e || {})
								.filter((a) => a.startsWith("_zaraz_"))
								.forEach((t) => {
									try {
										a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t));
									} catch {
										a.zarazData["z_" + t.slice(7)] = e.getItem(t);
									}
								});
						z.referrerPolicy = "origin";
						z.src =
							"../../cdn-cgi/zaraz/sd0d9.js?z=" +
							btoa(encodeURIComponent(JSON.stringify(a.zarazData)));
						t.parentNode.insertBefore(z, t);
					};
					["complete", "interactive"].includes(e.readyState)
						? zaraz.init()
						: a.addEventListener("DOMContentLoaded", zaraz.init);
				})(w, d, 0, "script");
			})(window, document);
		</script>
	</head>
	<body>
		<div id="preloder">
			<div class="loader"></div>
		</div>
		<header class="header-section">
			<div class="header-top">
				<div class="container">
					<div class="ht-left">
						<div class="mail-service">
							<i class="fa fa-envelope"></i>
							<a
								href="https://preview.colorlib.com/cdn-cgi/l/email-protection"
								class="__cf_email__"
								data-cfemail="8ee6ebe2e2e1a0ede1e2e1fce2e7eccee9e3efe7e2a0ede1e3"
								>
								<?= getSiteInfo()->email; ?>
								</a
							>
						</div>
						<div class="phone-service">
							<i class="fa fa-phone"></i>
							<?= getSiteInfo()->phone_number; ?>
						</div>
					</div>
					<div class="ht-right">
						<?php if($this->session->userdata('id')){ ?>
							<a  href="<?php echo base_url();?>CustomerController/logout" class="login-panel"><i class="fa fa-lock"></i>Logout</a>																				
							<a href="<?php echo base_url() ?>profile" class="login-panel text-center"><i class="fa fa-user"></i>
								<?php echo $this->session->userdata('firstname'); ?>
							</a>
						<?php }else { ?>
						<a href="<?php echo base_url() ?>login_customer" class="login-panel"><i class="fa fa-user"></i>Login</a>
						<a href="<?php echo base_url() ?>register_customer" class="login-panel"><i class="fa fa-user"></i>Register</a>
							<?php }?>
							
						<div class="lan-selector">
						
						</div>
						<div class="top-social">
							<a href="<?= getSiteInfo()->facebook_link; ?>"><i class="ti-facebook"></i></a>
							<a href="<?= getSiteInfo()->twiter_link; ?>"><i class="ti-twitter-alt"></i></a>
							<a href="<?= getSiteInfo()->indeed; ?>"><i class="ti-linkedin"></i></a>
							<a href="<?= getSiteInfo()->pinterest; ?>"><i class="ti-pinterest"></i></a>
						</div>
					</div>
				</div>
			</div>

			<style> 
				.logo_dy{
					margin-top: -47px;
					max-width: 90%;
				}
			</style>
			<div class="container">
				<div class="inner-header">
					<div class="row">
						<div class="col-lg-3 col-md-2">
							<div class="logo">
							<a  href="#">
							<img class="logo_dy" src="<?php echo base_url('uploads/').getSiteInfo()->image; ?>" alt="" /></a>
							</div>
						</div>
						<div class="col-lg-6 col-md-7">
						
							<div class="advanced-search">
							<a type="button" class="category-btn">
								Ecommerce</a>
								<form action="<?= base_url(); ?>Front_endController/search_list" method="get">
								<div class="input-group">
									<input type="text" name="search" style="margin-top: 12px;" placeholder="What do you need?" />
									<button type="submit"><i class="ti-search"></i></button>
								</div>
								</form>
							</div>
						</div>
						<div class="col-lg-3 text-right col-md-3">
							<ul class="nav-right">
								<li class="heart-icon">
									<a href="<?php echo base_url(); ?>wishlist">
										<i class="icon_heart_alt"></i>
										
									</a>
								</li>
								<li class="cart-icon">
									<a href="<?php echo base_url(); ?>cart">
										<i class="icon_bag_alt"></i>
										
									</a>
									<div class="cart-hover">
										<div class="select-items">
											<table>
												<tbody>
												<?php $subTotal = 0;
												 if (!empty($cartItems)) {
													foreach ($cartItems as $row) {
														if($row['type'] == "cart"):
														$subTotal += $row['subtotal']; ?>
													<tr>
														<td class="si-pic">
															<img src="<?= base_url() ?>/uploads/<?= $row['image'] ?>"alt=""/>
														</td>
														<td class="si-text">
															<div class="product-selected">
															
																<!-- <p>$60.00 x 1</p> -->
																<?= $row["price"] * $row['qty'] ?>
																<h6><?= $row['name'] ?></h6>
													   
															</div>
														</td>
														<td class="si-close">
														<a onclick="return confirm('Are you sure to delete item?')?window.location.href='<?php echo base_url('CustomerController/removeItem/' . $row['rowid']); ?>':false;"><i class="ti-close"></i></a>
														</td>
													</tr>
													<?php endif; }
                                } else { ?>
                                    <tr>
                                        <th colspan="5" class="text-center">Product(s) not found...</th>
                                    </tr>
                                <?php } ?>

													
												</tbody>
											</table>
										</div>
										<div class="select-total">
											<span>total:</span>
											<h5><span><?= $subTotal; ?></h5>
										</div>
										<div class="select-button">
										
											<a href="<?php echo  base_url(); ?>cart" class="primary-btn view-card">VIEW CART</a>
											<a href="<?php echo base_url(); ?>check_out" class="primary-btn checkout-btn">CHECK OUT</a>
										</div>
									</div>
								</li>
								<?php $subTotal = 0;
								 if (!empty($cartItems)) {
									foreach ($cartItems as $row) {
										if($row['type'] == "cart"):
										$subTotal += $row['subtotal']; ?> 
							
								<?php endif; }
                                } else { ?>
                                    <tr>
                                      
                                    </tr>
                                <?php } ?>
								<li class="cart-price"><?= 'Rs'. $subTotal; ?></li>

							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="nav-item" style="height: 52px;">
				<div class="container">
					<div class="nav-depart">
						<div class="depart-btn">
							<i class="ti-menu"></i>
							<span>All Categories</span>

							<ul class="depart-hover">
								<ul class="dropdown">
									<?php
						$q ="select * from category";
						$category_arr = $this->db->query($q)->result_array(); 
						foreach($category_arr as $row){ ?>
								<li>							
								<a href="<?php echo base_url(); ?>Front_endController/specific_category_list/<?= $row['id'] ?>"
								value="<?php echo  $row['id'];?>"><?php echo  $row['category_name'];?></a>
								</li>
								<?php }?>
								</ul>
							</ul>
						</div>
					</div>
					<nav class="nav-menu mobile-menu">
						<ul>
							<li class="active">
								<a href="<?php echo base_url();?>front_end">Home</a>
							</li>
							<li><a href="<?php echo base_url();?>shop">Shop</a></li>
							<li>
								<!-- <a href="#">Collection</a> -->
								<!-- <ul class="dropdown">
									<li><a href="#">Men's</a></li>
									<li><a href="#">Women's</a></li>
									<li><a href="#">Kid's</a></li>
								</ul> -->
							</li>
							<li><a href="<?php echo base_url();?>blog">Blog</a></li>
							<li><a href="<?php echo  base_url();?>contact">Contact</a></li>

							<li>
								<a href="#">Pages</a>
								<ul class="dropdown">
									
									
									<li><a href="check_out">Checkout</a></li>
									<!-- <li><a href="faq.html">Faq</a></li> -->
									<li>
										<a href="<?php echo base_url();?>register_customer"
											>Register</a
										>
									</li>
									<li>
										<a href="<?php echo base_url();?>login_customer">Login</a>
                                        
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
	</body>
</html>
