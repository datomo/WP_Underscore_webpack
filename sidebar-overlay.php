<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

if ( ! is_active_sidebar( 'overlay' ) ) {
	return;
}
?>

<aside id="overlay" class="hidden widget-area overlay">

	<div class="container-simple">
		<?php dynamic_sidebar( 'overlay' ); ?>
		<div class="closebar">
			<a href="">
				<h3 class="closetools close">Schliessen</h3>
			</a>
			<a href="">
				<h3 class="closetools download">Plan herunterladen</h3>
			</a>
		</div>
	</div>
</aside><!-- #secondary -->
