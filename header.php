<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
	<script src="https://player.vimeo.com/api/player.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Poppins|Raleway:400,400i,700,700i" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

<div class="container-fluid">

<div class="row main-nav">
	<div class="col-6 col-md-4 no-gutter">
		<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Sensa Digital Logo">
	</div>
	<div id="main-menu" class="col-6 col-md-8 no-gutter text-right d-none d-md-block">
		<ul>
			<li><a href=""><i class="far fa-hand-point-right"></i> Home</a></li>
			<li><a href=""><i class="far fa-hand-point-right"></i> About</a></li>
			<li><a href=""><i class="far fa-hand-point-right"></i> Gallery</a></li>
			<li><a href=""><i class="far fa-hand-point-right"></i> Contact</a></li>
		</ul>
	</div>
	<div class="col-6 col-md-8 no-gutter text-right d-md-none">
		<i class="fas fa-bars menu-button collapsed" data-toggle="collapse" data-target="#mobile-menu" role="button" aria-expanded="false" aria-controls="mobile-menu"></i>
	</div>
	<div id="mobile-menu" class="col-12 no-gutter collapse">
		<div class="mobile-menu-holder">
			<ul class="text-center">
				<li><a href="">Home</a></li>
				<li><a href="">About</a></li>
				<li><a href="">Gallery</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</div>
	</div>
</div>
