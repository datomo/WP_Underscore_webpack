<?php
function sp_br_fe_17_customizer( $wp_customize ) {
	//remove standart options

	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'nav' );

	// add "Content Options" section
	$wp_customize->add_section( 'sp_br_fe_17_content_options_section' , array(
		'title'      => __( 'datoTheme options', 'sp_br_fe_17' ),
		'priority'   => 100,
	) );

	// add setting for page comment toggle checkbox
	$wp_customize->add_setting( 'slide_1', array(
		'default' => 1
	) );

	// add control for page comment toggle checkbox
	$wp_customize->add_control( 'slide_1', array(
		'label'     => __( 'Show Slide 1', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_content_options_section',
		'priority'  => 10,
		'type'      => 'checkbox'
	) );

}
add_action( 'customize_register', 'sp_br_fe_17_customizer' );?>
