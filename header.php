<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- add custom font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- dont need the skip -->
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sp_br_fe_17' ); ?></a> -->

	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<div id="link-slide-hero" rel="#slide-hero"><h3>Start</h3></div>
			<div id="link-slide-acts" rel="#slide-acts"><h3>Acts</h3></div>
			<div id="link-slide-gallery" rel="#slide-gallery"><h3>Impressionen</h3></div>
			<div id="link-slide-contact" rel="#slide-contact"><h3>Kontakt</h3></div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="masthead-mobile" class="site-header-mobile closed">
		<nav id="site-navigation-mobile" class="main-navigation">
			<div class="hamburger">
				<svg width="50" height="40" id="burger">
				  <rect class="text" y="0" width="50" height="4" rx="2" fill="white"/>
				  <rect class="text" y="12" width="40" height="4" rx="2" fill="white"/>
				  <rect class="text" y="24" width="50" height="4" rx="2" fill="white"/>
				  <rect class="text" y="36" width="30" height="4" rx="2" fill="white"/>
				  <rect class="cross cross-top" y="16" rx="2" width="50" height="4" rx="2" fill="white"/>
				  <rect class="cross cross-bottom" y="16" rx="2" width="50" height="4" rx="2" fill="white"/>
				</svg>
			</div>

			<div id="link-slide-hero" rel="#slide-hero"><h3>Start</h3></div>
			<div id="link-slide-acts" rel="#slide-acts"><h3>Acts</h3></div>
			<div id="link-slide-gallery" rel="#slide-gallery"><h3>Impressionen</h3></div>
			<div id="link-slide-contact" rel="#slide-contact"><h3>Kontakt</h3></div>
		</nav><!-- #site-navigation -->
	</div><!-- #masthead -->

	<div id="content" class="site-content">
