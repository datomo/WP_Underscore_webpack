<?php
function sp_br_fe_17_customizer( $wp_customize ) {
	//remove standart options

	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_panel( 'nav_menus');

	// add "Content Options" section
	$wp_customize->add_section( 'sp_br_fe_17_colors_section' , array(
		'title'      => __( 'Colors', 'sp_br_fe_17' ),
		'priority'   => 100,
	) );

	// add setting for the background_color
	$wp_customize->add_setting( 'background-color' , array(
    'default'   => '#000000'
	) );

	// added the colorpicker
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'background_color', array(
		'label'      => __( 'Background Color', 'sp_br_fe_17' ),
		'section'    => 'sp_br_fe_17_colors_section',
		'settings'   => 'background-color',
	) ) );

	// add setting for the menu_color
	$wp_customize->add_setting( 'menu-color' , array(
    'default'   => '#000000'
	) );

	// added the colorpicker
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'menu_color', array(
		'label'      => __( 'Menu Color', 'sp_br_fe_17' ),
		'section'    => 'sp_br_fe_17_colors_section',
		'settings'   => 'menu-color',
	) ) );

	// add setting for the menu_color
	$wp_customize->add_setting( 'widget-color' , array(
    'default'   => '#000000'
	) );

	// added the colorpicker
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'widget_color', array(
		'label'      => __( 'Widget Background Color', 'sp_br_fe_17' ),
		'section'    => 'sp_br_fe_17_colors_section',
		'settings'   => 'widget-color',
	) ) );

	// add setting for the menu_color
	$wp_customize->add_setting( 'text-color' , array(
		'default'   => '#ffffff'
	) );

	// added the colorpicker
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'text_color', array(
		'label'      => __( 'Text Color', 'sp_br_fe_17' ),
		'section'    => 'sp_br_fe_17_colors_section',
		'settings'   => 'text-color',
	) ) );

	// add setting for the menu_color
	$wp_customize->add_setting( 'heading-color' , array(
		'default'   => '#ffffff'
	) );

	// added the colorpicker
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'heading_color', array(
		'label'      => __( 'Heading Color', 'sp_br_fe_17' ),
		'section'    => 'sp_br_fe_17_colors_section',
		'settings'   => 'heading-color',
	) ) );

	// add setting to highlight widgets
	$wp_customize->add_setting( 'highlight-widgets' , array(
		'default'   => false
	) );

	//add controll to hightlight widgets
	$wp_customize->add_control( 'highlight-widgets', array(
		'label'     => __( 'Highlight all widget areas? ', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_slides_section',
		'priority'  => 11,
		'type'      => 'checkbox'
	) );

	//enable live reload
	$wp_customize->get_setting( 'background-color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'menu-color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'highlight-widgets' )->transport = 'postMessage';
	$wp_customize->get_setting( 'widget-color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'text-color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'heading-color' )->transport = 'postMessage';


	// add Slides section
	$wp_customize->add_section( 'sp_br_fe_17_slides_section' , array(
		'title'      => __( 'Slides', 'sp_br_fe_17' ),
		'priority'   => 101,
	) );

	// add setting control amount of slides
	$wp_customize->add_setting( 'slide_amount', array(
		'default' => 4
	) );

	// add control for amount of slides
	$wp_customize->add_control( 'slide_amount', array(
		'label'     => __( 'How many slides are needed?', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_slides_section',
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
			'section'   => 'sp_br_fe_17_slides_section',
			'priority'  => 11,
			'type'      => 'select',
			'default' => 1,
			'choices' => array(
				'1' => __( 'Widget 100%' ),
				'2' => __( 'Widget 50%' )
			)
		) );

		// add setting control amount of slides
		$wp_customize->add_setting( 'slide-'.$i.'-background', array(
			'default' => 4
		) );

		// add control for amount of slides
		$wp_customize->add_control( 'slide-'.$i.'-background', array(
			'label'     => __( 'Slide '.$i.' Background', 'sp_br_fe_17' ),
			'section'   => 'sp_br_fe_17_slides_section',
			'priority'  => 11,
			'type'      => 'checkbox'
		) );
	}


}
add_action( 'customize_register', 'sp_br_fe_17_customizer' );

function sp_br_fe_17_customize_preview_js() {
	wp_enqueue_script( 'sp_br_fe_17_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sp_br_fe_17_customize_preview_js' );
