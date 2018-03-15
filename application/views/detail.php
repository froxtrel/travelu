<?php 

include('include/header.php');
// print "<pre>";
// print_r($detail);
$discount = 25;

$year = date("Y");
$month = date("m");
$day = date("d");

// gets the user IP Address
$user_ip = $_SERVER['REMOTE_ADDR'];

//gets full page URL
$page = $_SERVER['REQUEST_URI'];

$this->load->model('Main');

$this->Main->insert_page_view($page,$user_ip,$year,$month,$day); 

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
		<?php foreach ($detail as $key ) :;?>

		<div class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="<?=$key['photo_2'];?>">
			<div class="tg-sectionspace tg-haslayout">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
					</div>
				</div>
			</div>
		</div>
		<!--************************************
				Inner Banner End
		*************************************-->
		<!--************************************
				Main Start
		*************************************-->
		<main id="tg-main" class="tg-main tg-haslayout">
			<div class="container">
				<div class="row">			 	

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div id="tg-content" class="tg-content">
							<div class="tg-tourbookingdetail">
								<div class="tg-bookinginfo">
									<h3><?=strtoupper($key['name']);?></h3>
									<div class="tg-durationrating">
										<span class="tg-stars"><span></span></span>
										<em>(3 Review)</em>
									</div>
									<div class="tg-pricearea">
										<span>From</span>
										<del><b>MYR</b> <?=$key['price_adult'] + ($key['price_adult'] * $discount/100);?></del>
										<h4><b>MYR</b> <?=$key['price_adult'];?></h4>
									</div>
									<div class="tg-description">
										<!-- <p>There’s only 5 spot left. Join 19 others at Travelu’s experience this Saturday.</p> -->
									</div>
									<form class="tg-formtheme tg-formbookingdetail">
										<fieldset>
											<div class="form-group">
												<div class="tg-formicon"><i class="icon-user-check"></i></div>
												<span class="tg-select">
													<select name="adultcount" class="selectpicker" data-live-search="true" data-width="100%">
														<option data-tokens="Number of Rooms" value="0">Number of Adult</option>

														<?php $x = 1; while ( $x <= 30) { ?>
															
															<option data-tokens="<?=$x;?>" value="<?=$x;?>" ><?=$x;?></option> 

														<?php	$x++;

															}

														?>
													</select>
												</span>
											</div>										

											<div class="form-group">
												<div class="tg-formicon"><i class="icon-users"></i></div>
												<span class="tg-select">

													    <?php $stat = ($key['price_child'] == 0) ? 'disabled' : '';?>

															<select name="childcount" class="selectpicker" data-live-search="true" data-width="100%" <?=$stat;?>>
															<option data-tokens="Number of Rooms" value="0" selected>Number of Child</option>

														<?php $x = 1; while ( $x <= 30) { ?>
															
															<option data-tokens="<?=$x;?>" value="<?=$x;?>"><?=$x;?></option> 

														<?php	$x++;

															}

														?>
													</select>
												</span>
											</div>		

											<script type="text/javascript">

												function redirect(){

												    var adult = ($('select[name=adultcount]').val());
												    var child = ($('select[name=childcount]').val());												    										

												    window.location.href = "<?=base_url();?>welcome/payment/<?=$key['id'];?>/"+ adult+"/"+""+child+"";
												};

											</script>																		

											<div class="form-group">
												<a href="javascript:void(0)"  class="tg-btn tg-btn-lg" onclick="redirect()"><span>proceed boking</span></a>
											</div>
											
										</fieldset>
									</form>									

									<ul class="tg-tripinfo">
										<li><span class="tg-tourduration"><?=strtoupper($key['duration']);?></span></li>
										<li><span class="tg-tourduration tg-availabilty">Available</span></li>
										<li><span class="tg-tourduration tg-location"><?=ucfirst($key['des_name']);?></span></li>
										<!-- <li><span class="tg-tourduration tg-peoples">24 People in Group</span></li> -->
									</ul>
									<div class="tg-refundshare">
										<div class="tg-refund">
											<figure><img src="<?= base_url();?>public/images/img-03.jpg" alt="image description"></figure>
											<div class="tg-refundinfo">
												<h3>100% refundable</h3>
												<div class="tg-description">
													<p>Cancel up to 12 days before your trip and get a full refund, including service fees.</p>
												</div>
											</div>
										</div>
										<ul class="tg-likeshare">
											<li class="tg-shareicon">
												<a href="javascript:void(0);"><i class="icon-share-button-outline"></i>share</a>
												<ul class="tg-share">
													<li><a href="javascript:void(0);"><i class="icon-twitter"></i></a></li>
													<li><a href="javascript:void(0);"><i class="icon-facebook"></i></a></li>
													<li><a href="javascript:void(0);"><i class="icon-pinterest"></i></a></li>
												</ul>
											</li>
											<li><a href="javascript:void(0);"><i class="icon-heart"></i>save to wish list</a></li>
											<li>
											<?php

												$view = $this->Main->get_page_view_year($page); 

											?>
												<a href="javascript:void(0);"><i class="icon-eye"></i><?=$view;?> View </a>
											</li>
										</ul>
									</div>
								</div>
								<div class="tg-sectionspace tg-haslayout">
									<div class="tg-themetabs tg-bookingtabs">
										<ul class="tg-themetabnav" role="tablist">
											<li role="presentation" class="active">
												<a href="#america" aria-controls="america" role="tab" data-toggle="tab">
													<span>Overview</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#pricing" aria-controls="india" role="tab" data-toggle="tab">
													<span>Price List</span>
												</a>
											</li>
											<!-- <li role="presentation">
												<a href="#check" aria-controls="india" role="tab" data-toggle="tab">
													<span>Check Price</span>
												</a>
											</li> -->
											<li role="presentation">
												<a href="#australia" aria-controls="australia" role="tab" data-toggle="tab">
													<span>Itinerary</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#italy" aria-controls="italy" role="tab" data-toggle="tab">
													<span>location</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#london" aria-controls="london" role="tab" data-toggle="tab">
													<span>Reviews</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#india" aria-controls="india" role="tab" data-toggle="tab">
													<span>Gallery</span>
												</a>
											</li>
											<li role="presentation">
												<a href="#info" aria-controls="india" role="tab" data-toggle="tab">
													<span>Add Info</span>
												</a>
											</li>
										</ul>
										<div class="tab-content tg-themetabcontent">
											<div role="tabpanel" class="tab-pane active tg-overviewtab" id="america">
												<div class="tg-bookingdetail">
													<div class="tg-box">
														<h2>About <?=ucfirst($key['name']);?></h2>
														<div class="tg-description">
															<p><?=$key['tour_desc'];?></p>
															<br><br><br>
														</div>
													</div>
													<!-- <div class="tg-box">
														<h2>Guest access</h2>
														<div class="tg-description">
															<p>Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam.</p>
															<p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
															<ul class="tg-liststyle">
																<li><span>Ipsum Amet Mattis Pellentesque</span></li>
																<li><span>Ultricies Vehicula Mollis Vestibulum Fringilla</span></li>
																<li><span>Condimentum Sollicitudin Fusce Vestibulum Ultricies</span></li>
																<li><span>Sollicitudin Consectetur Quam Ligula Vehicula</span></li>
																<li><span>Cursus Pharetra Purus Porta Parturient</span></li>
															</ul>
														</div>
													</div> -->
												</div>
												<!-- <div class="tg-bookingdetail tg-bookingdetailstyle">
													<div class="tg-box tg-amentities">
														<h3>Amenities</h3>
														<div class="tg-content">
															<ul class="tg-liststyle">
																<li><span>Pets allowed</span></li>
																<li><span>Internet</span></li>
																<li><span>Gym</span></li>
																<li><span>Hot tub</span></li>
																<li><span>Doorman</span></li>
																<li><span>Wheelchair accessible</span></li>
																<li><span>Pool</span></li>
															</ul>
															<ul class="tg-liststyle">
																<li><span>Kitchen</span></li>
																<li><span>Suitable for events</span></li>
																<li><span>Dryer</span></li>
																<li><span>Family/kid friendly</span></li>
																<li><span>Cable TV</span></li>
																<li><span>Wireless Internet</span></li>
															</ul>
														</div>
													</div>
												</div> -->
												<div class="tg-bookingdetail tg-bookingdetailstyle">
													<div class="tg-box tg-priceinclude">
														<h3>Price Includes</h3>
														<div class="tg-content">
															<ul class="tg-liststyle">
																<li><span><?=ucfirst($key['include_1']);?></span></li>
																<li><span><?=ucfirst($key['include_2']);?></span></li>
																<li><span><?=ucfirst($key['include_3']);?></span></li>
																<li><span><?=ucfirst($key['include_4']);?></span></li>
																<li><span><?=ucfirst($key['include_5']);?></span></li>
															</ul>
														</div>
													</div>
												</div>
												<div class="tg-bookingdetail tg-bookingdetailstyle">
													<div class="tg-box tg-amentities">
														<h3>Tour Notes</h3>
														<div class="tg-content">
															<div class="tg-description">
																<p><?=ucfirst($key['note']);?></p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane tg-locationtab" id="australia">

											<script type="text/javascript">
												
												function changeColor() {
													alert('test');
												}

											</script>
												
													<object data="http://borneowavehunters.com/<?=strtoupper($key['tour_code']);?>.pdf" type="application/pdf" width="100%" height="500px">
   														<p><b>Example fallback content</b>: This browser does not support PDFs. Please download the PDF to view it: <a href="http://borneowavehunters.com/<?=strtoupper($key['tour_code']);?>.pdf">Download PDF</a>.</p>
													</object>

											</div>
											<div role="tabpanel" class="tab-pane tg-locationtab" id="italy">
												<div class="tg-box tg-location">
													<h3><?=ucfirst($key['des_name']);?></h3>
													<div class="tg-description">
													<!-- <p>Curabitur blandit tempus porttitor. Lorem ipsum dolor sit </p> -->
													</div>												
														<iframe
														  width="600"
														  height="450"
														  frameborder="0" style="border:0"
														  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD93qTVcvvvkwHL2uXgon70J9p4zy_RxhQ
														    &q=<?=ucfirst($key['des_name']);?> sabah" allowfullscreen>
														</iframe>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane tg-reviewtab" id="london">

											<?php include('include/review.php') ?>
											
											</div>
											<div role="tabpanel" class="tab-pane tg-gallerytab" id="india">
												<div class="tg-gallery">
													<ul>
														<li>
															<figure>
																<a href="<?=$key['photo_2'];?>" data-rel="prettyPhoto[instagram]">
																	<img src="<?=$key['photo_2'];?>" alt="image decruoton">
																</a>
															</figure>
														</li>	

														<li>
															<figure>
																<a href="<?=$key['photo_3'];?>" data-rel="prettyPhoto[instagram]">
																	<img src="<?=$key['photo_3'];?>" alt="image decruoton">
																</a>
															</figure>
														</li>	

														<li>
															<figure>
																<a href="<?=$key['photo_4'];?>" data-rel="prettyPhoto[instagram]">
																	<img src="<?=$key['photo_4'];?>" alt="image decruoton">
																</a>
															</figure>
														</li>	

														<li>
															<figure>
																<a href="<?=$key['photo_5'];?>" data-rel="prettyPhoto[instagram]">
																	<img src="<?=$key['photo_5'];?>" alt="image decruoton">
																</a>
															</figure>
														</li>															

													</ul>
												</div>
											</div>
											<div role="tabpanel" class="tab-pane tg-reviewtab" id="pricing">

												<hr>
												
											</div>
											<!-- <div role="tabpanel" class="tab-pane tg-reviewtab" id="check">

												<hr>
												
											</div> -->
											<div role="tabpanel" class="tab-pane tg-reviewtab" id="info">

												<hr>
												
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<?php endforeach;?>

				</div>
			</div>
			<!--************************************
					Article Start
			*************************************-->
			<!-- <div class="tg-sectionspace tg-haslayout tg-bglight">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="tg-sectionhead tg-sectionheadvtwo">
								<div class="tg-sectiontitle">
									<h2>Latest Articles</h2>
								</div>
								<div class="tg-description">
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer</p>
								</div>
							</div>
						</div>
						<div class="tg-posts">
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<article class="tg-post">
									<figure>
										<img src="<?= base_url();?>public/images/blog/img-01.jpg" alt="image description">
										<figcaption>
											<h3><a href="javascript:void(0);">Bungee Jumping Trip</a></h3>
											<time datetime="2017-06-08">Feb 22, 2017</time>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<article class="tg-post">
									<figure>
										<img src="<?= base_url();?>public/images/blog/img-02.jpg" alt="image description">
										<figcaption>
											<h3><a href="javascript:void(0);">Bungee Jumping Trip</a></h3>
											<time datetime="2017-06-08">Feb 22, 2017</time>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<article class="tg-post">
									<figure>
										<img src="<?= base_url();?>public/images/blog/img-03.jpg" alt="image description">
										<figcaption>
											<h3><a href="javascript:void(0);">Bungee Jumping Trip</a></h3>
											<time datetime="2017-06-08">Feb 22, 2017</time>
										</figcaption>
									</figure>
								</article>
							</div>
							<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
								<article class="tg-post">
									<figure>
										<img src="<?= base_url();?>public/images/blog/img-04.jpg" alt="image description">
										<figcaption>
											<h3><a href="javascript:void(0);">Bungee Jumping Trip</a></h3>
											<time datetime="2017-06-08">Feb 22, 2017</time>
										</figcaption>
									</figure>
								</article>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			<!--************************************
					Article End
			*************************************-->
		</main>
		<!--************************************
				Main End
		*************************************-->
		
<?php include('include/footer.php') ?>