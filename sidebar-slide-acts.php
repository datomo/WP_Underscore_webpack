<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

if ( ! is_active_sidebar( 'slide-acts' ) ) {
	return;
}
?>

<aside id="slide-acts" class="widget-area slide clearfix">
	<h2 class="widget-title">Acts</h2>
	<?php dynamic_sidebar( 'slide-acts' ); ?>
</aside><!-- #secondary -->
