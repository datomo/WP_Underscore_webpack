<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

if ( ! is_active_sidebar( 'slide-1' ) ) {
	return;
}
?>

<aside id="slide-1" class="widget-area slide clearfix">
	<!--start svg-->
	<div class="banner" id="banner_start">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/banner.svg" alt="Banner">
	</div>

	<div id="badge_start" class="badge">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/badge.svg" alt="Datum" class="date">
	</div>

	<!--end svg-->
	<div class="widget-start">
		<?php dynamic_sidebar( 'slide-1' ); ?>
	</div>


</aside><!-- #secondary -->
