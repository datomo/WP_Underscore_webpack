<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

if ( ! is_active_sidebar( 'slide-gallery' ) ) {
	return;
}
?>

<aside id="slide-3" class="widget-area slide slide-gallery">

	<div class="container-simple">
		<?php dynamic_sidebar( 'slide-gallery' ); ?>
	</div>
</aside><!-- #secondary -->
