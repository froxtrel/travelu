<?php include('include/header.php');
//print_r($list);
?>

<body>
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
	
<?php include('include/mobile_menu.php') ?>

	<!--************************************
			Wrapper Start
	*************************************-->

<?php include('include/menu.php') ?>

<!--************************************
				Inner Banner Start
		*************************************-->
		<!-- <section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?= base_url();?>public/images/parallax/kiulu-2.jpg">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>White Water Rafting </h1>
							<h2>The best thing to do in raging river</h2>
							<ol class="tg-breadcrumb">
								<li><a href="javascript:void(0);">Home</a></li>
								<li class="tg-active">Listing</li>
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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-listing tg-listingvthree">
								<div class="tg-sectiontitle">
									<h2><?=@$cat;?> Packages</h2>
								</div>

								 <?php foreach ($list as $key ) :;?>	

								<div class="tg-populartour tg-populartourvtwo">
									<figure>
										<a href="<?= base_url();?>welcome/detail/<?=$key['id'];?>"><img src="<?= base_url();?>public/images/tours/<?=$key['photo_1'];?>" alt="image destinations"></a>
									</figure>
									<div class="tg-populartourcontent">
										<div class="tg-populartourtitle">
											<h3><a href="<?= base_url();?>welcome/detail/<?=$key['id'];?>"><?=strtoupper($key['name']);?></a></h3>
										</div>
										<div class="tg-description">
											<p><?=substr($key['tour_desc'],0,115);?></p>
											<p><br><br><br></p>
										</div>
										<div class="tg-populartourfoot">
											<div class="tg-durationrating">
												<span class="tg-tourduration"><?=strtoupper($key['duration']);?></span>
												<span class="tg-stars"><span></span></span>
												<em>(3 Review)</em>
											</div>
											<ul class="tg-likeshare">
												<li class="tg-shareicon">
													<a href="javascript:void(0);"><i class="icon-share-button-outline"></i><span>share</span></a>
													<ul class="tg-share">
														<li><a href="javascript:void(0);"><i class="icon-twitter"></i></a></li>
														<li><a href="javascript:void(0);"><i class="icon-facebook"></i></a></li>
														<li><a href="javascript:void(0);"><i class="icon-pinterest"></i></a></li>
													</ul>
												</li>
												<li><a href="javascript:void(0);"><i class="icon-heart"></i></a></li>
											</ul>
										</div>
										<div class="tg-priceavailability">
											<div class="tg-availhead">
												<time datetime="2017-12-12">Availability : <span style="color:green"><b>Yes</b></span> </time>
											</div>
											<div class="tg-pricearea">
												<span>From</span>
												<h4>
													<?php 
													$price = ($key['price_adult'] != 0) ? $key['price_adult'] : $key['price_child'];
													echo strtoupper($price);
													?>													
											    </h4>
											</div>
											<a class="tg-btn" href="<?= base_url();?>welcome/detail/<?=$key['id'];?>"><span>Explore Tour</span></a>
										</div>
									</div>
								</div>

								<?php endforeach;?>
																												
								<!-- <nav class="tg-pagination">
									<ul>
										<li class="tg-active"><a href="javascript:void(0);">1</a></li>
										<li><a href="javascript:void(0);">2</a></li>
										<li><a href="javascript:void(0);">3</a></li>
										<li><a href="javascript:void(0);">4</a></li>
										<li class="tg-nextpage"><a href="javascript:void(0);"><i class="fa fa-angle-right"></i></a></li>
									</ul>
								</nav> -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<!--************************************
				Main End
		*************************************-->

<?php include('include/footer.php') ?>
		