<?php 

include('include/header.php');
// print "<pre>";
// print_r($featured);
$discount = 25;

 ?>

<body class="tg-home tg-homevone">
<!-- <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=208984096129106&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> -->
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
				Loader Start
	*************************************-->
	<div class="loader">
		<div class="span">
			<div class="location_indicator"></div>
		</div>
	</div>
	<!--************************************
				Loader End
	*************************************-->
	<!--************************************
				Loader Start
	*************************************-->
	<div class="loader">
		<div class="span">
			<div class="location_indicator"></div>
		</div>
	</div>
	<!--************************************
				Loader End
	*************************************-->

<?php include('include/mobile_menu.php') ?>
	
	<!--************************************
			Wrapper Start
	*************************************-->

<?php include('include/menu.php') ?>
		<!--************************************
				Inner Banner Start
		*************************************-->
		<!-- <section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>Tour Details</h1>
							<h2>Donec id elit non mi porta gravida at eget metus</h2>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">Home</a></li>
								<li class="tg-active">Tour Details</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</section> -->
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-sectionspace tg-haslayout tg-bglight">
			<div class="container">
				<div class="row">
				<br><br><br>

				<?php foreach ($detail as $key ) :;?>

					<div id="tg-twocolumns" class="tg-twocolumns">
						<form class="tg-formtheme tg-formtourpayment">
							<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 pull-left">
								<div id="tg-content" class="tg-content">
									<div class="tg-tourpaymentdetail">
										<div class="tg-tourname">
											<a class="tg-btnedit" href="#">(Edit Tour)</a>
											<figure>
												<a href="javascript:void(0);"><img src="<?=base_url();?>public/images/img-04.jpg" alt="image destinations"></a>
											</figure>
											<div class="tg-populartourcontent">
												<div class="tg-populartourtitle">
													<h3><a href="javascript:void(0);"><?=strtoupper($key['name']);?></a></h3>
												</div>
												<div class="tg-populartourfoot">
													<div class="tg-durationrating">
														<span class="tg-tourduration"><?=strtoupper($key['duration']);?></span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 pull-right">
								<aside id="tg-sidebar" class="tg-sidebar">
									<div class="tg-widget tg-widgettourinfo">
										<div class="tg-widgetcontent">
											<ul>
												<li><span>Travel Date</span><em>May 12, 2017</em></li>
												<li></li>
												<li><span>Adult</span><em><?=$adult;?></em></li>
												<li><span>Child</span><em><?=$child;?></em></li>
												<li class="tg-couponapply">
													<div class="form-group">
														<input type="text" name="text" class="form-control" placeholder="Coupon Code">
														<button class="tg-btn">apply</button>
													</div>
												</li>
											</ul>
										</div>
									</div>
									<div class="tg-widget tg-widgetpersonprice">
										<div class="tg-widgetcontent">
										<ul>
										<br>
											<li class="tg-personprice"><div class="tg-perperson"><span>Adult Base Price <i>(<?=$adult;?> x <?=$key['price_adult'];?>)</i>
											</span><em>MYR <?=$key['price_adult'] *  $adult ;?></em></div></li>
											<li class="tg-personprice"><div class="tg-perperson"><span>Child Base Price <i>(<?=$child;?> x <?=$key['price_child'];?>)</i>
											</span><em>MYR <?=$key['price_child'] *  $child ;?></em></div></li>

											<li><span>Sub Total</span><em>MYR <?=($key['price_child'] *  $child) + ($key['price_adult'] *  $adult );?></em></li>
											<li><span>Tax Rate</span><em>5%</em></li>
											<li><span>Tax Due</span><em>MYR <?=((($key['price_child'] *  $child) + ($key['price_adult'] *  $adult ) )* 0.05 );?></em></li>
											<li class="tg-totalprice"><div class="tg-totalpayment"><span>Total Price</span><em>MYR <?=($key['price_child'] *  $child) + ($key['price_adult'] *  $adult ) + ((($key['price_child'] *  $child) + ($key['price_adult'] *  $adult ) )* 0.05 );?></em></div></li>
											<li><a href="#" class="tg-btn tg-btn-lg">next step</a></li>
										</ul>
										</div>
									</div>
								</aside>
							</div>
						</form>
					</div>
				</div>
			</div>
		</main>

		<?php endforeach;?>

		<!--************************************
				Main End
		*************************************-->
<?php include('include/footer.php') ?>