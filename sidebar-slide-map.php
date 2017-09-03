<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

if ( ! is_active_sidebar( 'slide-map' ) ) {
	return;
}
?>

<aside id="slide-5" class="widget-area slide-map">

	<div class="container-simple">
		<h2 class="widget-title">Karte</h2>

		<div class="map-background">
			<div class="map-holder">
				<img class="img_map_overlay" src="<?php bloginfo('stylesheet_directory'); ?>/src/img/Karte_Beschriftung.png" alt="">
				<img class="img_map" src="<?php bloginfo('stylesheet_directory'); ?>/src/img/Karte_ohne.png" alt="">
			</div>
				<h3 class="show_stand">Stände anzeigen</h3>
		</div>
	</div>
</aside><!-- #secondary -->
