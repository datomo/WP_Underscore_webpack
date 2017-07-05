<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Sprungbrätt_Festival_17
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			get_sidebar('slide-hero');
			get_sidebar('slide-acts');
			get_sidebar('slide-gallery');
			get_sidebar('slide-contact');?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
