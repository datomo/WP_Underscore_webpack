<?php
function sp_br_fe_17_customizer( $wp_customize ) {
	//remove standart options

	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_panel( 'nav_menus' );

	// add "Content Options" section
	$wp_customize->add_section( 'sp_br_fe_17_content_options_section' , array(
		'title'      => __( 'datoTheme options', 'sp_br_fe_17' ),
		'priority'   => 100,
	) );

	// add setting for the background_color
	$wp_customize->add_setting( 'background-color' , array(
    'default'   => '#000000'
	) );

	// added the colorpicker
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
		'label'      => __( 'Background Color', 'sp_br_fe_17' ),
		'section'    => 'sp_br_fe_17_content_options_section',
		'settings'   => 'background-color',
	) ) );

	// add setting for the menu_color
	$wp_customize->add_setting( 'menu-color' , array(
    'default'   => '#000000'
	) );

	// added the colorpicker
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color', array(
		'label'      => __( 'Menu Color', 'sp_br_fe_17' ),
		'section'    => 'sp_br_fe_17_content_options_section',
		'settings'   => 'menu-color',
	) ) );

	//enable live reload
	$wp_customize->get_setting( 'background-color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'menu-color' )->transport = 'postMessage';

	// add setting for page comment toggle checkbox
	$wp_customize->add_setting( 'slide_amount', array(
		'default' => 4
	) );

	// add control for amount of slides
	$wp_customize->add_control( 'slide_amount', array(
		'label'     => __( 'How many slides are needed?', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_content_options_section',
		'priority'  => 11,
		'type'      => 'number'
	) );

	for ($i = 1; $i <= get_theme_mod('slide_amount'); $i++) {
		//loop throught the amount of desired slide-acts
		// echo "<h2>test</h2>";
		// echo get_theme_mod('slide_amount');

		$wp_customize->add_setting( 'slide_'.$i, array(
			'default' => 1
		) );

		$wp_customize->add_control( 'slide_'.$i, array(
			'label'     => __( 'Type of Slide '.$i, 'sp_br_fe_17' ),
			'section'   => 'sp_br_fe_17_content_options_section',
			'priority'  => 11,
			'type'      => 'select',
			'default' => 1,
			'choices' => array(
				'1' => __( 'Widget 100%' ),
				'2' => __( 'Widget 50%' )
			)
		) );

	}



	//update the refresh MongoCode
	//$wp_customize->get_setting( 'slide_1' )->transport = 'postMessage';

}
add_action( 'customize_register', 'sp_br_fe_17_customizer' );

function sp_br_fe_17_customize_preview_js() {
	wp_enqueue_script( 'sp_br_fe_17_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sp_br_fe_17_customize_preview_js' );
?>
