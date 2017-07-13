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

for ($i = 1; $i <= get_theme_mod('slide_amount'); $i++) {
	$test = get_theme_mod('slide_test_'.$i);
	switch ($test) {
		case '1':
			// include ('sidebar-slide-hero.php');
			break;

		case '2':
			// include ('sidebar-slide-acts.php');
			break;

		case '3':
			// include ('sidebar-slide-gallery.php');
			break;

		case '4':
			// include ('sidebar-slide-contact.php');
			break;

		default:
			# code...
			echo "say what";
			break;
	}
	//  echo "test";
};
?>

<aside id="slide-3" class="widget-area slide slide-gallery">

	<div class="container-simple">
		<?php dynamic_sidebar( 'slide-1' ); ?>
	</div>
</aside><!-- #secondary -->
