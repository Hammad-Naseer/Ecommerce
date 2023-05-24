<?php
echo require_once  APPPATH . ('views\Front-End\header.php');
?>
<link href="<?= base_url() ?>assets/front_end/css/order_detail.css" rel="stylesheet">
<link href="<?= base_url() ?>assets/front_end/css/link.css" rel="stylesheet">

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootdey text-center">
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">
			<div class="widget-box">
				<div class="widget-header widget-header-large">
          <? //print_r($temp);?>
		  			<?php //if(!empty()) ?>
					<div class="widget-toolbar no-border invoice-info">
						<span class="invoice-info-label">Invoice:</span>
						<span class="red">#000<?= $temp[0]['order_id'] ?></span>

						<br>
						<span class="invoice-info-label">Date:</span>
						<span class="blue"> <?php echo date('d M y H:i:s', strtotime($temp[0]['date'])) ?></span>

					</div>

					<div class="widget-toolbar hidden-480">
				

						<a href="<?php echo  base_url().'Pdfgenerate/project_summery_pdf/'.$temp[0]['order_id'] ;?>">
							<i class="ace-icon fa fa-print"></i>
						</a>
					</div>
				</div>
				<div class="widget-body">
					<div class="widget-main padding-24">
						<div class="row">
							<div class="col-sm-6">
								<div class="row">
									<div class="col-xs-11 label label-lg label-info arrowed-in arrowed-right" style="height:35px">
										<b class="text-black py-4" style="padding:16px 11px">Customer Info</b>
									</div>
								</div>
								<div>
									<ul class="list-unstyled  spaced" style="text-align:start;">
										<li>
											<b>First Name</b> : <i class="ace-icon fa fa-caret-right green"> </i><?= $temp[0]['firstname'] ?>
										</li>

										<li>
											<b>Last Name</b> : <i class="ace-icon fa fa-caret-right green"> </i><?= $temp[0]['lastname'] ?>
										</li>
										<li>
											<b>State, Country</b>: <i class="ace-icon fa fa-caret-right green"> </i><b class="green"> <?= $temp[0]['country'] ?></b>
										</li>


										<li class="divider"></li>

										<li>
											<b>Contact Info</b>: <i class="ace-icon fa fa-caret-right green"></i>
											<b class="red"><?= $temp[0]['contact'] ?></b>
										</li>
										<li>
											<b>Email</b> : <i class="ace-icon fa fa-caret-right green"></i><?= $temp[0]['email'] ?>
										</li>
										<li>
											<b>Address</b> : <i class="ace-icon fa fa-caret-right green"></i><?= $temp[0]['address'] ?>
										</li>
									</ul>
								</div>
							</div><!-- /.col -->
						</div><!-- /.row -->

						<div class="space"></div>

						<div>
							<table class="table table-striped table-bordered">
								<thead>
									<tr>

										<th>Product Title</th>
										<th class="center">Price</th>
										<th class="center">Qty</th>
										<th>Total</th>
									</tr>
								</thead>

								<tbody>

									<?php foreach ($temp as $product) : ?>
										<tr>
											<td>
												<a href="#"><?= $product['product_title'] ?></a>
											</td>
											<td class="center"><?= $product['sale_price'] ?></td>
											<td class="center"><?= $product["qty"]  ?></td>
										
											<td><?php $sale_price = $product['sale_price']; $qty = $product['qty']; echo $sale_price*$qty; ?></td>
										</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>

						<div class="hr hr8 hr-double hr-dotted"></div>

						<div class="row">
							<div class="col-sm-5 pull-left">
								<h4 class="pull-left">
									Total amount :
									<span class="red"><?= $temp[0]['grand_total'] ?></span>
								</h4>
							</div>

						</div>

						<div class="space-6"></div>

					</div>

				</div>
			</div>
		</div>
	</div>
</div>
<br> <br>

<?php
echo require_once  APPPATH . ('views\Front-End\footer.php');
?>
<script src="<?= base_url() ?>assets/front_end/js/link.js"></script>