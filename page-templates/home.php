<?php
/**
 * Template Name: Home Page Template
 *
 * Template for displaying a page just with the header and footer area and a "naked" content area in between.
 * Good for landingpages and other types of pages where you want to add a lot of custom markup.
 *
 * @package understrap
 */

get_header(); ?>

<div class="row main-row main-slider">
	<div class="col-12 no-gutter">
		<div class="video-placeholder">
			<i class="fas fa-circle-notch fa-spin"></i>
			<div class="bg-img" style="background-image:url('https://alpha.aeon.co/images/4a0855b3-5d8e-4772-b4ba-37f660eab119/idea_SIZED-Charlie-Nguyen-2752238107_75e145e9ef_o.jpg')"></div>
		</div>
		<div class="slider-text">
			<div class="text-holder text-center">
				<h1>A film company</h1><br />
				<p>"We provide the highest quality video production in Dubai"<br /><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
			</div>
		</div>
		<div class="iframe-wrapper">
			<iframe class="vimeo-iframe" src="https://player.vimeo.com/video/260794343?autoplay=1&loop=1&title=0&byline=0&portrait=0&background=1" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
	</div>
</div>

<div class="row main-row about-us">
	<div class="col-12 text-center">
		<h2>We are...</h2>
	</div>
	<div class="col-12 offset-md-2 col-md-8 offset-lg-3 col-lg-6 text-center">
		<p style="margin-bottom:0">...lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.<br /><br />Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="col-md-12 offset-lg-2 col-lg-8">
		<div class="row">
			<div class="col-6 col-md-6 col-lg-3 no-gutter text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/award1.png" alt="Sensa Digital Logo">
			</div>
			<div class="col-6 col-md-6 col-lg-3 no-gutter text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/award1.png" alt="Sensa Digital Logo">
			</div>
			<div class="col-6 col-md-6 col-lg-3 no-gutter text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/award1.png" alt="Sensa Digital Logo">
			</div>
			<div class="col-6 col-md-6 col-lg-3 no-gutter text-center">
				<img src="<?php echo get_template_directory_uri(); ?>/img/award1.png" alt="Sensa Digital Logo">
			</div>
			<div class="col-12 text-center">
				<p>and more...</p>
			</div>
		</div>
	</div>
</div>

<div class="row main-row mini-gallery">
	<!-- <div class="col-12 text-center">
		<h2>Feast your eyes</h2>
	</div> -->
	<div class="col-sm-12 col-md-6 col-xl-4 item">
		<div class="clip" data-toggle="modal" data-vimeo-id="132905823" data-target="#vimeo-modal" style="background-image:url('https://cdn.theatlantic.com/assets/media/img/photo/2017/08/winners-of-the-2017-national-geogra/n01_People_3rd_Bursiel/main_900.jpg?1501604539')">
			<div class="hover-bg"></div>
			<div class="hover-box"><i class="far fa-play-circle"></i></div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-xl-4 item">
		<div class="clip" data-toggle="modal" data-target="#vimeo-modal" style="background-image:url('https://i.pinimg.com/originals/24/df/a0/24dfa014781b3afb8ab2f1f4186bab06.jpg')">
			<div class="hover-bg"></div>
			<div class="hover-box"><i class="far fa-play-circle"></i></div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-xl-4 item">
		<div class="clip" data-toggle="modal" data-target="#vimeo-modal" style="background-image:url('http://www.fubiz.net/wp-content/uploads/2016/09/National-Geographic-Nature-Photographer-of-the-Year-2016-Contest-27.jpg')">
			<div class="hover-bg"></div>
			<div class="hover-box"><i class="far fa-play-circle"></i></div>
		</div>
	</div>
	<div class="col-sm-12 col-md-6 col-xl-4 item">
		<div class="clip" data-toggle="modal" data-target="#vimeo-modal" style="background-image:url('https://petapixel.com/assets/uploads/2017/12/NGNP-GRANDPRIZE-1stPlace-Wildlife-1-800x534.jpg')">
			<div class="hover-bg"></div>
			<div class="hover-box"><i class="far fa-play-circle"></i></div>
		</div>
	</div>
</div>

<div class="row main-row clients">
	<div class="col-12 text-center">
		<h2>Be like them</h2>
	</div>
	<div class="col-12 offset-lg-2 col-lg-8">
		<div class="row">
			<div class="col-6 col-lg-3">
				<img src="https://www.thesustainablecity.ae/wp-content/uploads/2017/09/TSC-Long-Logo-1.png">
			</div>
			<div class="col-6 col-lg-3">
				<img src="http://www.jumeirahgolfestates.com/files/cache/2493062a36db3aae5a13fc616588580d_f653.png">
			</div>
			<div class="col-6 col-lg-3">
				<img src="https://static1.squarespace.com/static/58868ba0ebbd1a01f783c3a7/588695ffe4fcb5de2d61fe48/58869e1b86e6c036cd09ec91/1485217308276/2_Ferrari+Logo.png?format=1000w">
			</div>
			<div class="col-6 col-lg-3">
				<img src="https://tickets.virginmegastore.me/files/ort_image_61.png">
			</div>
		</div>
	</div>
</div>

<div class="row main-row contact-us">
	<div class="col-12 text-center">
		<h2>Let's hook up!</h2>
	</div>
	<!-- <div class="col-12 offset-md-3 col-md-3 text-center text-md-left">
		<p><b>Find us</b></p>
		<p><i class="fas fa-map-marker-alt"></i> 905 Prime Tower<br />Business Bay, Dubai<br />United Arab Emirates</p>
		<p><i class="fas fa-phone"></i> +971 40 1234</p>
		<p><i class="fas fa-mobile-alt"></i> +971 50 123 4567</p>
		<p><i class="far fa-envelope"></i> info@sensa.digital</p>
	</div> -->
	<div class="col-12 offset-md-4 col-md-4">
		<form>
			<div class="form-group">
				<!-- <label for="email">Email</label> -->
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="far fa-envelope"></i></div>
					</div>
					<input type="email" class="form-control" id="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group">
				<!-- <label for="exampleInputEmail1">Phone/Mobile</label> -->
				<div class="input-group">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-phone"></i></div>
					</div>
					<input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone/mobile number">
				</div>
			</div>
			<div class="form-group">
				<!-- <label for="exampleInputPassword1">So what's up?</label> -->
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="So what's up?"></textarea>
			</div>
			<div class="text-center">
				<button type="submit" class="btn btn-primary btn-sm"><i class="fas fa-video"></i> Shoot!</button>
			</div>
		</form>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="vimeo-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i class="fas fa-times"></i>
				</button>
			</div>
			<div class="modal-body">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
