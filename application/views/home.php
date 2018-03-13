<?php 

include('include/header.php');
// print "<pre>";
// print_r($featured);
$discount = 25;

 ?>

<body class="tg-home tg-homevone">
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=208984096129106&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
				Home Slider Start
		*************************************-->
		<div class="tg-bannerholder">
			<div class="tg-slidercontent">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<?php foreach ($wording as $key ) :;?>
								<h1><?=$key['main_title'];?></h1>
							<?php endforeach;?>
								<?php foreach ($wording as $key ) :;?>
									<h2><?=$key['sub_title'];?></h2>
								<?php endforeach;?>
							<form class="tg-formtheme tg-formtrip">
								<fieldset>
									<div class="form-group">
										<div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Destinations">Destinations</option>

												<?php foreach ($destination as $key ) :;?>
														<option data-tokens="All Areas"><?=ucfirst($key['des_name']);?></option>
												<?php endforeach;?>

											</select>
										</div>
									</div>
									<div class="form-group">
										<div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Adventure Type">Adventure Type</option>
												<?php foreach ($type as $key ) :;?>
														<option data-tokens="All Areas"><?=ucfirst($key['adv_name']);?></option>
												<?php endforeach;?>
											</select>
										</div>
									</div>
									<!-- <div class="form-group">
										<div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Travel Month">Travel Month</option>
												<option data-tokens="January">January</option>
												<option data-tokens="February">February</option>
												<option data-tokens="March">March</option>
												<option data-tokens="April">April</option>
												<option data-tokens="May">May</option>
												<option data-tokens="June">June</option>
												<option data-tokens="July">July</option>
												<option data-tokens="August">August</option>
												<option data-tokens="September">September</option>
												<option data-tokens="October">October</option>
												<option data-tokens="November">November</option>
												<option data-tokens="December">December</option>
											</select>
										</div>
									</div> -->
									<!-- <div class="form-group">
										<div class="tg-select">
											<select class="selectpicker" data-live-search="true" data-width="100%">
												<option data-tokens="Duration">Duration</option>
												<option data-tokens="2 weeks">2 weeks</option>
												<option data-tokens="3 weeks">3 weeks</option>
												<option data-tokens="4 weeks">4 weeks</option>
												<option data-tokens="5 weeks">5 weeks</option>
												<option data-tokens="6 weeks">6 weeks</option>
												<option data-tokens="7 weeks">7 weeks</option>
												<option data-tokens="8 weeks">8 weeks</option>
												<option data-tokens="9 weeks">9 weeks</option>
												<option data-tokens="10 weeks">10 weeks</option>
											</select>
										</div>
									</div> -->
									<div class="form-group">
										<button class="tg-btn" type="submit"><span>find tours</span></button>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div id="tg-homeslider" class="tg-homeslider owl-carousel tg-haslayout">
					<?php foreach ($slider as $key ) :;?>
							<figure class="item" data-vide-bg="poster: <?= base_url();?>public/images/slider/<?=$key['slider_one'];?>" data-vide-options="position: 0% 50%"></figure>
					<?php endforeach;?>
					<?php foreach ($slider as $key ) :;?>
							<figure class="item" data-vide-bg="poster: <?= base_url();?>public/images/slider/<?=$key['slider_two'];?>" data-vide-options="position: 0% 50%"></figure>
					<?php endforeach;?>
					<?php foreach ($slider as $key ) :;?>
							<figure class="item" data-vide-bg="poster: <?= base_url();?>public/images/slider/<?=$key['slider_three'];?>" data-vide-options="position: 0% 50%"></figure>
					<?php endforeach;?>
			</div>
		</div>
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<!--************************************
					Advantures Start
			*************************************-->
			<section class="tg-parallax tg-sectionspace tg-haslayout" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?= base_url();?>public/images/parallax/climb.jpg">
				<div class="container" style="padding: 0px;">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-toursdestinations">
								<div class="tg-tourdestination tg-tourdestinationbigbox">
									<figure>
										<a href="javascript:void(0);">
											<img src="<?= base_url();?>public/images/destination/padas.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>WHITE WATER RAFTING</h2>
												</div>
												<div class="tg-description">
													<p>your best experience ever</p>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="javascript:void(0);">
											<img src="<?= base_url();?>public/images/destination/kayak.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>SEA KAYAKING</h2>
												</div>
												<div class="tg-description">
													<p>so relaxing</p>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="javascript:void(0);">
											<img src="<?= base_url();?>public/images/destination/combo.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>COMBO TOUR</h2>
												</div>
												<div class="tg-description">
													<p>family bonding time</p>
												</div>
											</div>
										</a>
									</figure>
								</div>		
							</div>
						</div>
					</div>

					<br>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-toursdestinations">
								<div class="tg-tourdestination tg-tourdestinationbigbox">
									<figure>
									<a href="javascript:void(0);">
										<div style="width:100%;height:0;padding-bottom:75%;position:relative;"><iframe src="https://giphy.com/embed/cO3UqWhbsxlzIcZR6g" width="100%" height="100%" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>SEA WALKING</h2>
												</div>
												<div class="tg-description">
													<p>your best underwater experience ever</p>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="javascript:void(0);">
											<img src="<?= base_url();?>public/images/destination/faks.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>FAQ</h2>
												</div>
												<div class="tg-description">
													<p>Lets get all your question answered</p>
												</div>
											</div>
										</a>
									</figure>
								</div>
								<div class="tg-tourdestination">
									<figure>
										<a href="javascript:void(0);">
											<img src="<?= base_url();?>public/images/destination/chats.jpg" alt="image destinations">
											<div class="tg-hoverbox">
												<div class="tg-adventuretitle">
													<h2>CHAT WITH US</h2>
												</div>
												<div class="tg-description">
													<p>Want a custom tour?</p>
												</div>
											</div>
										</a>
									</figure>
								</div>		
							</div>
						</div>
					</div>

				</div>
			</section>
			<!--************************************
					Advantures End
			*************************************-->
			<!--************************************
					Features Start
			*************************************-->


			<!-- *********************************** Open soon
			 <section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="tg-features">
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span><i class="fa fa-bullhorn"></i></span>Announcement</h2>
									</div>
									<div class="tg-description">
										<p><i class="fa fa-minus" aria-hidden="true"></i> Padas water is currently low</p>
										<p><i class="fa fa-minus" aria-hidden="true"></i> New promotion coming soon</p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>Hot Tips</h2>
									</div>
									<div class="tg-description">
										<p><i class="fa fa-minus" aria-hidden="true"></i> Nothing for today </p>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
								<div class="tg-feature">
									<div class="tg-featuretitle">
										<h2><span><i class="fa fa-user-circle" aria-hidden="true"></i></span>Latest Companion</h2>
									</div>
									<div class="tg-description">
										<p><i class="fa fa-minus" aria-hidden="true"></i> Nothing for today </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> 
			*********************************** -->

			<!--************************************
					Features End
			*************************************-->
			<!--************************************
					Popular Tour Start
			*************************************-->
			<section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?= base_url();?>public/images/parallax/kiulu.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectiontitle tg-sectiontitleleft">
									<h2>Popular Tours</h2>
									<a class="tg-btnvtwo" href="javascript:void(0);">All Tours</a>
								</div>

							   <div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours owl-carousel">

							   <?php foreach ($featured as $key ) :;?>				
								
									<div class="item tg-populartour">
										<figure>
											<a href="tourbookingdetail.html"><img src="<?=$key['photo_1'];?>" alt="image destinations"></a>
											<span class="tg-descount"><?=$discount;?>% Off</span>
										</figure>
										<div class="tg-populartourcontent">
											<div class="tg-populartourtitle">
												<h5><b><a href="tourbookingdetail.html"><?=strtoupper($key['name']);?></a></b></h5>
											</div>
											<div class="tg-description">
												<p><?=substr($key['tour_desc'],0,120);?>...</p>
											</div>
											<div class="tg-populartourfoot">
												<div class="tg-durationrating">
													<span class="tg-tourduration"><?=strtoupper($key['duration']);?></span>
													<span class="tg-stars"><span></span></span>
													<em>Recomendded</em>
												</div>
												<div class="tg-pricearea">
													<del><b>MYR</b> <?=$key['price_adult'] + ($key['price_adult'] * $discount/100);?></del>
													<h4><b>MYR</b> <?=$key['price_adult'];?></h4>
												</div>
											</div>
										</div>
									</div>																										

								<?php endforeach;?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Popular Tour End
			*************************************-->
			
			<!--************************************
					Destination Start
			*************************************-->
			
			<section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
				<div class="container">
					<div class="row">
					<br><br><br><br>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectiontitle tg-sectiontitleleft">
									<h2>Popular Destination</h2>
									<a class="tg-btnvtwo" href="javascript:void(0);" style="color:#000">All Destination</a>
								</div>
						<div id="tg-destinationsslider" class="tg-destinationsslider tg-destinations owl-carousel">
							<div class="item tg-destination">
								<figure>
									<a href="tourbookingdetail.html"><img src="<?= base_url();?>public/images/destination/kiulu.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="tourbookingdetail.html">KIULU RIVER</a></h2>
										<div class="tg-description">
											<!-- <p>in the streets of London</p> -->
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="tourbookingdetail.html"><img src="<?= base_url();?>public/images/destination/padas_r.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="tourbookingdetail.html">PADAS RIVER</a></h2>
										<div class="tg-description">
											<!-- <p>in the streets of London</p> -->
										</div>
									</figcaption>
								</figure>
								<figure>
									<a href="tourbookingdetail.html"><img src="<?= base_url();?>public/images/destination/tanjung.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="tourbookingdetail.html">TANJUNG ARU</a></h2>
										<div class="tg-description">
											<!-- <p>in the streets of London</p> -->
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="<?= base_url();?>public/images/destination/mamutik_.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">MAMUTIK ISLAND</a></h2>
										<div class="tg-description">
											<!-- <p>Beautiful Mosque</p> -->
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="<?= base_url();?>public/images/destination/climb.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">MOUNT KINABALU</a></h2>
										<div class="tg-description">
											<!-- <p>in the streets of London</p> -->
										</div>
									</figcaption>
								</figure>
							</div>
							<div class="item tg-destination">
								<figure>
									<a href="javascript:void(0);"><img src="<?= base_url();?>public/images/destination/img-05.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">MANUKAN ISLAND</a></h2>
										<div class="tg-description">
											<!-- <p>in the streets of London</p> -->
										</div>
									</figcaption>
								</figure>
								<figure>
									<a href="javascript:void(0);"><img src="<?= base_url();?>public/images/destination/img-06.jpg" alt="image description"></a>
									<figcaption>
										<h2><a href="javascript:void(0);">KUNDASANG</a></h2>
										<div class="tg-description">
											<!-- <p>in the streets of London</p> -->
										</div>
									</figcaption>
								</figure>
							</div>						
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Destination End
			*************************************-->
			<!--************************************
					Call To Action Start
			*************************************-->
			<section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?= base_url();?>public/images/parallax/child.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-calltoaction">
									<div class="tg-pattern"><img src="<?= base_url();?>public/images/patternw.png" alt="image destination"></div>
									<h2>Get 10% Off on your Next Travel</h2>
									<div class="tg-description"><p>Travel between 22 April to 21 May and get existing offers along with a sure 10% cash discount</p></div>
									<a class="tg-btn" href="javascript:void(0);"><span>Give Us Review</span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Call To Action End
			*************************************-->
			<!--************************************
					Our Guides Start
			*************************************-->
			<section class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead">
								<div class="tg-sectiontitle">
									<h2>What People Are Saying</h2>
								</div>
								<div class="tg-description">
									<p>Holiday in Sabah was such a fabulous unforgettable experience! Many show their love and appreciation even back to their own country.</p>
								</div>
							</div>
							<div id="tg-guidesslider" class="tg-guidesslider tg-guides owl-carousel">							
								<div class="item tg-guide">
									<div class="tg-guidecontent">
										<div class="fb-post" data-href="https://web.facebook.com/megstredwick/posts/10153342679475094:0" data-width="401" data-show-text="true"><blockquote cite="https://www.facebook.com/megstredwick/posts/10153342679475094:0" class="fb-xfbml-parse-ignore"><p>Yiew!!! Rafting with the legend!!! What a trip
 high water, lots of rapids and amazing service and delicous food! Definitely will be coming back!</p>Posted by <a href="#" role="button">Meg Stredwick</a> on&nbsp;<a href="https://www.facebook.com/megstredwick/posts/10153342679475094:0">Saturday, October 12, 2013</a></blockquote></div>
									</div>
								</div>
								<div class="item tg-guide">
									<div class="tg-guidecontent">
										<iframe src="https://web.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2Fheidi.miu%2Fposts%2F10154995721805546%3A0&width=500" width="500" height="374" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
									</div>
								</div>		
								<div class="item tg-guide">
									<div class="tg-guidecontent">
										<iframe src="https://web.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2FFarhanDaud90s%2Fposts%2F10153192633318661%3A0&width=500" width="500" height="418" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
									</div>
								</div>		
								<div class="item tg-guide">
									<div class="tg-guidecontent">
										<iframe src="https://web.facebook.com/plugins/post.php?href=https%3A%2F%2Fweb.facebook.com%2Fkenji.kasai.96%2Fposts%2F10205989905385881%3A0&width=500" width="500" height="354" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
									</div>
								</div>															
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Our Guides End
			*************************************-->

			<!--************************************
					Call To Action Start
			*************************************-->
			<section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?= base_url();?>public/images/parallax/pad2.jpg">
				<div class="tg-sectionspace tg-zerobottompadding tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-sectionhead tg-sectionheadvtwo">
									<div class="tg-sectiontitle">
										<h2>What makes white water rafting so fun?</h2>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 col-lg-push-2">
								<figure class="tg-videobox">
									<img src="<?= base_url();?>public/images/pad1.jpg" alt="image description">
									<a class="tg-btnplay" href="https://www.youtube.com/watch?v=nFVO1ImYJyg" data-rel="prettyPhoto[instagram]"><i class="icon-play3"></i></a>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--************************************
					Call To Action End
			*************************************-->

			<!--************************************
					Our Partners Start
			*************************************-->
			<!-- <section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-03.jpg">
				<div class="tg-sectionspace tg-haslayout">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<div class="tg-ourpartners">
									<div class="tg-pattern"><img src="images/patternw.png" alt="image destination"></div>
									<h2>Our Partners</h2>
									<ul class="tg-partners">
										<li><figure><a href="javascript:void(0);"><img  width="100px" height="100px" src="https://seeklogo.com/images/M/Matta-logo-8AE90BBBFF-seeklogo.com.png" alt="image destinations"></a></figure></li>
										<li><figure><a href="javascript:void(0);"><img width="100px" height="100px" src="http://www.archive.sportscene.tv/files/partners/IRF_Rafting_I.png" alt="image destinations"></a></figure></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section> -->
			<!--************************************
					Our Partners End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->

<?php include('include/footer.php') ?>