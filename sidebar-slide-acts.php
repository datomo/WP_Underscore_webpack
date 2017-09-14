<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

if ( ! is_active_sidebar( 'slide-acts-bands' ) ) {
	return;
}
?>
<div class="slide-acts" id="slide-2">
	<h2 class="widget-title">Programm</h2>

	<?php
	get_sidebar('programmpdf');
	?>

	<div class="tab">
	  <button  class="tablinks active" id="link-acts">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/Speaker.svg" alt="">
			<h3>Musik</h3>
		</button>
	  <button  class="tablinks" id="link-tanz">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/Tanz.svg" alt="">
			<h3>Tanz</h3>
		</button>
	  <button  class="tablinks" id="link-slam">
			<img src="<?php bloginfo('stylesheet_directory'); ?>/src/img/Mic.svg" alt="">
			<h3>Slam</h3>
		</button>
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
