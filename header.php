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
			<div class="link social-logos">
				<a href="https://www.facebook.com/sprungbraett/" target="_blank">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" width="512px" height="512px" viewBox="0 0 60.734 60.733" xml:space="preserve">
						<g>
							<path d="M57.378,0.001H3.352C1.502,0.001,0,1.5,0,3.353v54.026c0,1.853,1.502,3.354,3.352,3.354h29.086V37.214h-7.914v-9.167h7.914   v-6.76c0-7.843,4.789-12.116,11.787-12.116c3.355,0,6.232,0.251,7.071,0.36v8.198l-4.854,0.002c-3.805,0-4.539,1.809-4.539,4.462   v5.851h9.078l-1.187,9.166h-7.892v23.52h15.475c1.852,0,3.355-1.503,3.355-3.351V3.351C60.731,1.5,59.23,0.001,57.378,0.001z" />
						</g>
					</svg>
				</a>
			</div>

			<div class="link social-logos">
				<a href="https://www.instagram.com/sprungbraettfestival/" target="_blank">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="800px" height="800px" viewBox="0 0 800 800" enable-background="new 0 0 800 800" xml:space="preserve">
				<g>
					<defs>
						<rect id="SVGID_1_" width="800" height="800"/>
					</defs>
					<clipPath id="SVGID_2_">
						<use xlink:href="#SVGID_1_"  overflow="visible"/>
					</clipPath>
					<path clip-path="url(#SVGID_2_)" d="M400.003,72.068c106.804,0,119.451,0.408,161.633,2.332
						c38.997,1.781,60.178,8.298,74.274,13.774c18.673,7.257,31.996,15.926,45.993,29.923c13.999,13.997,22.669,27.317,29.923,45.99
						c5.477,14.097,11.993,35.277,13.771,74.275c1.924,42.181,2.332,54.829,2.332,161.636s-0.408,119.457-2.332,161.636
						c-1.778,39-8.295,60.181-13.771,74.274c-7.254,18.669-15.924,31.993-29.923,45.993c-13.997,13.996-27.32,22.666-45.993,29.923
						c-14.097,5.476-35.277,11.993-74.274,13.771c-42.175,1.927-54.82,2.331-161.633,2.331c-106.815,0-119.46-0.404-161.636-2.331
						c-38.997-1.778-60.178-8.296-74.275-13.771c-18.669-7.257-31.996-15.927-45.993-29.923c-13.996-14-22.663-27.324-29.92-45.993
						c-5.476-14.094-11.996-35.274-13.774-74.274c-1.924-42.179-2.332-54.829-2.332-161.636s0.408-119.455,2.332-161.636
						c1.778-38.998,8.298-60.178,13.774-74.275c7.257-18.672,15.924-31.993,29.92-45.99c13.997-13.997,27.324-22.666,45.993-29.923
						c14.097-5.476,35.278-11.994,74.275-13.774C280.549,72.476,293.196,72.068,400.003,72.068 M400.003-0.003
						c-108.636,0-122.258,0.459-164.92,2.408c-42.577,1.942-71.654,8.706-97.096,18.593C111.683,31.22,89.376,44.896,67.14,67.133
						C44.903,89.37,31.223,111.68,21.004,137.98C11.111,163.429,4.35,192.502,2.408,235.08c-1.948,42.666-2.405,56.285-2.405,164.917
						c0,108.636,0.457,122.255,2.405,164.917c1.942,42.58,8.703,71.654,18.596,97.1c10.219,26.303,23.899,48.61,46.136,70.85
						c22.236,22.237,44.543,35.914,70.847,46.136c25.442,9.887,54.519,16.647,97.096,18.593c42.663,1.945,56.285,2.408,164.92,2.408
						c108.633,0,122.255-0.463,164.917-2.408c42.578-1.945,71.654-8.706,97.097-18.593c26.304-10.222,48.61-23.898,70.851-46.136
						c22.236-22.239,35.913-44.547,46.135-70.85c9.891-25.445,16.651-54.52,18.594-97.1c1.947-42.662,2.404-56.281,2.404-164.917
						c0-108.633-0.457-122.252-2.404-164.917c-1.942-42.577-8.703-71.651-18.594-97.099c-10.222-26.3-23.898-48.61-46.135-70.847
						c-22.24-22.237-44.547-35.914-70.851-46.135c-25.442-9.887-54.519-16.651-97.097-18.593C522.258,0.457,508.636-0.003,400.003-0.003
						"/>
					<path clip-path="url(#SVGID_2_)" d="M400.003,194.594c-113.442,0-205.406,91.961-205.406,205.403S286.561,605.4,400.003,605.4
						c113.439,0,205.403-91.961,205.403-205.403S513.442,194.594,400.003,194.594 M400.003,533.329
						c-73.639,0-133.335-59.693-133.335-133.332s59.696-133.333,133.335-133.333s133.332,59.694,133.332,133.333
						S473.642,533.329,400.003,533.329"/>
					<path clip-path="url(#SVGID_2_)" d="M661.523,186.479c0,26.507-21.488,47.998-48.002,47.998c-26.508,0-47.998-21.491-47.998-47.998
						c0-26.514,21.49-48.002,47.998-48.002C640.035,138.477,661.523,159.965,661.523,186.479"/>
				</g>
				</svg>
				</a>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
