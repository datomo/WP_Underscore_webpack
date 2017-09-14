<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */

if ( ! is_active_sidebar( 'programmpdf' ) ) {
	return;
}
?>

<aside id="slide-acts-plan" class="hidden widget-area">

	<div class="container-simple">
		<?php dynamic_sidebar( 'programmpdf' ); ?>
		<div class="closebar">

			<button type="submit" onclick="window.open('http://www.sprungbraett-festival.ch/wp-content/uploads/2017/09/Ablauf_Acts_2017.pdf')">
				<h3 class="closetools download">Plan herunterladen</h3>
			</button>


		</div>
	</div>
</aside><!-- #secondary -->
