<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

// if ( ! is_active_sidebar( 'slide-contact' ) ) {
// 	return;
// }
?>
<div class="contact-holder clearfix slide-contact" id="slide-4">
	<h2 class="widget-title">Kontakt</h2>
	<div class="contact-back">
		<div class="contact-left contact-widget">
			<aside id="slide-contact-left" class="widget-area">
				<?php dynamic_sidebar( 'slide-contact-left' ); ?>
			</aside><!-- #secondary -->
		</div>

		<div class="contact-right contact-widget">
			<aside id="slide-contact-right" class="widget-area">
				<?php dynamic_sidebar( 'slide-contact-right' ); ?>
			</aside><!-- #secondary -->
		</div>

	</div>

</div>
