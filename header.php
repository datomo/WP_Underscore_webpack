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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- dont need the skip -->
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sp_br_fe_17' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">

		</div><!-- .site-branding -->


		<nav id="site-navigation" class="main-navigation">
			<a id="link-slide-1" href="#slide-1"><h3>Start</h3></a>
			<a id="link-slide-2" href="#slide-2"><h3>Imporessionen</h3></a>
			<a id="link-slide-3" href="#slide-3"><h3>Slide 3</h3></a>
			<a id="link-slide-4" href="#slide-4"><h3>Kontakt</h3></a>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
