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
<?php echo get_theme_mod('typo-link'); ?>
<link href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- dont need the skip -->
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sp_br_fe_17' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="ham-background">
			<div class="hamburger">
				<svg width="40" height="30" id="burger">
					<rect class="text" y="0" width="40" height="4" rx="2" fill="white"/>
					<rect class="text" y="8" width="30" height="4" rx="2" fill="white"/>
					<rect class="text" y="18" width="40" height="4" rx="2" fill="white"/>
					<rect class="text" y="26" width="20" height="4" rx="2" fill="white"/>
					<rect class="cross cross-top" y="14" rx="2" width="40" height="4" rx="2" fill="white"/>
					<rect class="cross cross-bottom" y="14" rx="2" width="40" height="4" rx="2" fill="white"/>
				</svg>
			</div>
		</div>


		<nav id="site-navigation" class="main-navigation closed">
			<div class="link" id="link-slide-hero" rel="#slide-1"><h3>Start</h3></div>
			<div class="link" id="link-slide-acts" rel="#slide-2"><h3>Programm</h3></div>
			<div class="link" id="link-slide-gallery" rel="#slide-3"><h3>Impressionen</h3></div>
			<div class="link" id="link-slide-contact" rel="#slide-4"><h3>Kontakt</h3></div>
			<div class="link faceboot-logo">
				<a href="https://www.facebook.com/sprungbraett/" target="_blank" rel="noopener" >
					<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/fb.png" alt="">
				</a>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
