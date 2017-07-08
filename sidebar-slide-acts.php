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
<div id="slide-acts">
	<div class="tab">
	  <button  class="tablinks" onclick="openTab(event, 'acts')"><h3>Auftritte</h3></button>
	  <button  class="tablinks" onclick="openTab(event, 'tanz')"><h3>Tanz</h3></button>
	  <button  class="tablinks" onclick="openTab(event, 'slam')"><h3>Slam</h3></button>
	</div>

	<div class="tabcontent" id="acts">
		<aside class="widget-area slide clearfix">
			<h2 class="widget-title">Bands</h2>
			<?php dynamic_sidebar( 'slide-acts-bands' ); ?>
		</aside><!-- #secondary -->
	</div>

	<div class="tabcontent" id="tanz">
		<aside class="widget-area slide clearfix">
			<h2 class="widget-title">Tanz</h2>
			<?php dynamic_sidebar( 'slide-acts-tanz' ); ?>
		</aside><!-- #secondary -->
	</div>

	<div class="tabcontent" id="slam">
		<aside class="widget-area slide clearfix">
			<h2 class="widget-title">Slam</h2>
			<?php dynamic_sidebar( 'slide-acts-slam' ); ?>
		</aside><!-- #secondary -->
	</div>
</div>
