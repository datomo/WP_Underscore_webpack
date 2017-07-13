<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */


for ($i = 1; $i <= get_theme_mod('slide_amount'); $i++) {
	$test = get_theme_mod('slide_'.$i);
	switch ($test) {
		case '1':
			if ( ! is_active_sidebar( 'slide-'.$i ) ) {
				return;
			}
			?>
			<aside id="<?php echo 'slide'.$i?>" class="widget-area slide slide-100">

				<div class="container-simple">
					<?php dynamic_sidebar( 'slide-'.$i ); ?>
				</div>
			</aside><!-- #secondary -->
			<?php
			break;

		case '2':
			if ( ! is_active_sidebar( 'slide-'.$i.'-left') and ! is_active_sidebar( 'slide-'.$i.'-left') ) {
				return;
			}
			?>
			<aside id="<?php echo 'slide'.$i?>" class="widget-area slide slide-5050">

				<div class="container-simple">
					<div class="container-50">
						<?php dynamic_sidebar( 'slide-'.$i.'-left' ); ?>
					</div>
					<div class="container-50">
						<?php dynamic_sidebar( 'slide-'.$i.'-right' ); ?>
					</div>
				</div>
			</aside><!-- #secondary -->
			<?php
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
