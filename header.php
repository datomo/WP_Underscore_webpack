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

			<?php
			if (  is_active_sidebar( 'slide-gallery' ) ) {
				?>
				<div class="link" id="link-slide-gallery" rel="#slide-3"><h3>Impressionen</h3></div>
				<?php
			}
			?>

			<div class="link" id="link-slide-contact" rel="#slide-4"><h3>Kontakt</h3></div>
			<!-- <div class="link faceboot-logo">
				<a href="https://www.facebook.com/sprungbraett/" target="_blank" rel="noopener" >
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 60.734 60.733" style="enable-background:new 0 0 60.734 60.733;" xml:space="preserve">
					<g>
						<path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914   v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462   v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z" fill="#FAA527"/>
					</g>
					</svg>
				</a>
			</div> -->
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
