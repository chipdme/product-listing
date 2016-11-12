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
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>

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
	<div id="site-header" class="banner">
		<!--		<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">-->
		<!--			<img src="--><?php //header_image(); ?><!--" width="--><?php //echo get_custom_header()->width; ?><!--" height="--><?php //echo get_custom_header()->height; ?><!--" alt="--><?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><!--">-->
		<!--		</a>-->
		<div class="video-demo-wrapper animate">
			<!--            <div class="video-circle-control no-events flex justify-center items-center">-->
			<!--                <span style="margin-left: 5px; margin-top: 2px;">-->
			<!--					<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 16 16" class="icon animate" style="shape-rendering: geometricPrecision;"><path fill-rule="evenodd" class="animate" fill="white" d="M3.882 2.48C3.395 2.216 3 2.457 3 3.003v9.996c0 .553.391.788.882.521l9.236-5.038c.487-.266.49-.695 0-.962L3.882 2.481z"></path></svg>-->
			<!--				</span>-->
			<!--            </div>-->
			<!--			<img src="//cdn.optimizely.com/img/1859790579/e2a06a015616437391c4c0c8adc0c111.jpg"-->
			<!--				 class="video-thumbnail"-->
			<!--			>-->
			<iframe
				class="animate"
				width="560"
				height="315"
				src="https://www.youtube.com/embed/chKbozl32qA"
				frameborder="0"
				allowfullscreen>

			</iframe>
		</div>
	</div>
	<div id="main" class="site-main">
