<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */


for ($i = 1; $i <= get_theme_mod('slide_amount'); $i++) {
	if ( ! is_active_sidebar( 'slide-'.$i) and ! is_active_sidebar( 'slide-'.$i.'-right') ) {
		return;
	}
	?>
	<aside id="<?php echo 'slide-'.$i?>" class="widget-area slide <?php echo get_theme_mod('slide-'.$i.'-class')?>">
	<?php
	$test = get_theme_mod('slide-type-'.$i);
	switch ($test) {
		case '1':
			if (get_theme_mod('slide-'.$i.'-background')) {
				$background100 = "container-simple slide-100 background";
			} else {
				$background100 = "container-simple slide-100";
			} ?>

				<div class="<?php echo $background100;?>">
					<?php dynamic_sidebar( 'slide-'.$i ); ?>
				</div>
			</aside><!-- #secondary -->
			<?php
			break;

		case '2':
				if (get_theme_mod('slide-'.$i.'-background')) {
					$background50 = "container-simple  slide-5050 background";
				} else {
					$background50 = "container-simple  slide-5050";
				} ?>

				<div class="<?php echo $background50;?>">
					<div class="container-50 container">
						<?php dynamic_sidebar( 'slide-'.$i ); ?>
					</div>

					<div class="container-50 container">
						<?php dynamic_sidebar( 'slide-'.$i.'-right' ); ?>
					</div>
				</div>
			</aside><!-- #secondary -->
			<?php
			break;

		default:
			# code...
			echo "say what";
			echo get_theme_mod('slide-type-'.$i);
			echo "empty...";
			break;
	}
	//  echo "test";
};
?>
