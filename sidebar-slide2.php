<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

if ( ! is_active_sidebar( 'slide-2' ) ) {
	return;
}
?>

<aside id="slide-2" class="widget-area slide">
	<?php dynamic_sidebar( 'slide-2' ); ?>
</aside><!-- #secondary -->
