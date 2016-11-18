<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php if ( get_header_image() ) : ?>
	<?php endif; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<h1 class="site-title">
            	</h1>
			</a>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container"><?php _e( 'Search', 'twentyfourteen' ); ?></a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle"><?php _e( 'Primary Menu', 'twentyfourteen' ); ?></button>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'twentyfourteen' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<?php get_search_form(); ?>
			</div>
		</div>
	</header><!-- #masthead -->
	<?php if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/about/') : ?>

	<div id="site-header" class="banner flex">
		<div class="flex justify-center items-center">
			<h1 class="tag-line">Minor defects, major discounts.</h1>
		</div>
		<div class="video-demo-wrapper animate">
			<video id="video-demo" width="560" height="315">
				<source src="<?php echo(includes_url() . 'images/explanation.mp4') ?>" type="video/mp4">
			</video>
			<div class="video-demo-play-wrapper flex justify-center items-center">
				<div class="video-demo-play flex justfify-center items-center">
					<btn id="video-demo-start">
						<h3>See how it works</h3>
					</btn>
					<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 16 16" class="icon animate" style="shape-rendering: geometricPrecision;"><path fill-rule="evenodd" class="animate" fill="white" d="M3.882 2.48C3.395 2.216 3 2.457 3 3.003v9.996c0 .553.391.788.882.521l9.236-5.038c.487-.266.49-.695 0-.962L3.882 2.481z"></path></svg>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>
	<div id="main" class="site-main">
