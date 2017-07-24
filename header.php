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

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo(); ?>
		</div><!-- .site-branding -->

		<!-- <input id="toggle" type="checkbox"> -->

		<div class="toggle-container" >
			<span class="button button-toggle"></span>
			<span class="button button-toggle"></span>
			<span class="button button-toggle"></span>
			<span class="button button-toggle"></span>
		</div>



		<nav id="site-navigation" class="main-navigation nav">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary', 'sp_br_fe_17' ); ?></button> -->
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
