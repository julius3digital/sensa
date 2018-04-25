<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="row footer">
	<div class="col-12 offset-md-2 col-md-4">
		<div class="row">
			<div class="col-6">
				<p><i class="fas fa-map-marker-alt"></i> 905 Prime Tower<br />Business Bay, Dubai<br />United Arab Emirates</p>
			</div>
			<div class="col-6">
				<p><i class="fas fa-phone"></i> +971 40 1234<br /><i class="fas fa-mobile-alt"></i> +971 50 123 4567<br /><i class="far fa-envelope"></i> info@sensa.digital</p>
			</div>
		</div>
	</div>
	<div class="col-12 col-md-4 text-center text-md-right">
		<a href="#"><i class="fab fa-facebook"></i></a>
		<a href="#"><i class="fab fa-instagram"></i></a>
		<a href="#"><i class="fab fa-youtube"></i></a>
		<a href="#"><i class="fab fa-vimeo-v"></i></a>
	</div>
	<div class="col-12 text-center">
		<span>Copyright 2018 | Sensa Digital<i class="far fa-registered"></i> Film Production</span>
	</div>
</div>

</div><!-- container -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script>
	var width = jQuery('.clip').width();
	jQuery('.clip').height(width / 1.78);

	jQuery('.clip').mouseenter(function() {
		jQuery(this).children('.hover-box').removeClass('fadeOut');
		jQuery(this).children('.hover-bg').removeClass('fadeOut');
		jQuery(this).children('.hover-box').addClass('fadeIn');
		jQuery(this).children('.hover-bg').addClass('fadeIn');
	}).mouseleave(function() {
		jQuery(this).children('.hover-box').removeClass('fadeIn');
		jQuery(this).children('.hover-bg').removeClass('fadeIn');
		jQuery(this).children('.hover-box').addClass('fadeOut');
		jQuery(this).children('.hover-bg').addClass('fadeOut');
	});

	jQuery('.menu-button').click(function(e) {
		if(jQuery(this).closest('.main-nav').find('#mobile-menu').hasClass('collapsing')) {
			e.preventDefault();
		} else {
			if(jQuery(this).hasClass('collapsed')) {
				jQuery(this).removeClass('fa-bars');
				jQuery(this).addClass('fa-times');
				jQuery(this).closest('.main-nav').removeClass('nonsolid');
				jQuery(this).closest('.main-nav').addClass('solid');
			} else {
				jQuery(this).removeClass('fa-times');
				jQuery(this).addClass('fa-bars');
				jQuery(this).closest('.main-nav').removeClass('solid');
				jQuery(this).closest('.main-nav').addClass('nonsolid');
			}
		}
	});

	jQuery('#vimeo-modal').on('show.bs.modal', function (e) {
		console.log(e);

		jQuery(this).find('.modal-body').html('<iframe src="https://player.vimeo.com/video/132905823?autoplay=1&loop=1&title=0&byline=0&portrait=0" width="100%" height="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>');
	})

	jQuery('#vimeo-modal').on('hidden.bs.modal', function (e) {
		jQuery(this).find('iframe').remove();
	})

	//vimeo
    var iframe = document.querySelector('.vimeo-iframe');
    var player = new Vimeo.Player(iframe);

    player.on('progress', function() {
    	player.off('progress');
    	jQuery('.video-placeholder').addClass('fadeOut');
    });
</script>

</body>

</html>

