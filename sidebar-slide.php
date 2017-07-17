<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sprungbrätt_Festival_17
 */


for ($i = 1; $i <= get_theme_mod('slide_amount'); $i++) {
	if ( ! is_active_sidebar( 'slide-'.$i) and ! is_active_sidebar( 'slide-'.$i.'-right')) {
		return;
	}
	?>
	<aside id="<?php echo 'slide-'.$i?>" class="widget-area slide <?php echo get_theme_mod('slide-'.$i.'-class')?>">
	<?php
	$test = get_theme_mod('slide-type-'.$i);
	// echo '<h1>'.$test.'</h1>';
	switch ($test) {
		case 1:
			$class100 = get_theme_mod('slide-'.$i.'-background') ? 'background': '';
			?>
				<div class="container-simple slide-100 <?php echo $class100;?>">

					<?php dynamic_sidebar( 'slide-'.$i ); ?>
				</div>
			</aside><!-- #secondary -->
			<?php
			break;

		case 2:
				//check if both slides have a background add one to the slide
				if(get_theme_mod('slide-'.$i.'-background') and get_theme_mod('slide-'.$i.'-background-2')) {
					$class5050 = 'background';
					//just a slide background not two panels
					$class50left = '';
					$class50right = '';
				}else {
					$class5050 = '';
					//only one will be true
					$class50left = get_theme_mod('slide-'.$i.'-background') ? 'background': '' ;
					$class50right = get_theme_mod('slide-'.$i.'-background-2') ? 'background': '' ;
				}

				?>
				<div class="container-simple  slide-5050 <?php echo $class5050;?>">
					<div class="container-50 container <?php echo $class50left;?>">
						<?php dynamic_sidebar( 'slide-'.$i ); ?>
					</div>

					<div class="container-50 container <?php echo $class50right;?>">
						<?php dynamic_sidebar( 'slide-'.$i.'-right' ); ?>
					</div>
				</div>
			</aside><!-- #secondary -->
			<?php
			break;

		default:
			# code...
			echo "ups something went wrong...";
			break;
	}
	//  echo "test";
};
?>
