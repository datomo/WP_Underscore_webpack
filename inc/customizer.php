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
	$wp_customize->add_setting( 'slide_amount', array(
		'default' => 4
	) );

	// add control for page comment toggle checkbox
	$wp_customize->add_control( 'slide_amount', array(
		'label'     => __( 'How many slides are needed?', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_content_options_section',
		'priority'  => 11,
		'type'      => 'number'
	) );

		/* Category */
	$wp_customize->add_setting(
	    'tcx_category'
	);

	$wp_customize->add_control(
    new WP_Customize_Category_Control(
        $wp_customize,
        'tcx_category',
        array(
            'label'    => 'Category',
            'settings' => 'tcx_category',
            'section'  => 'tcx_category'
        )
    )
	);

	for ($i = 1; $i <= get_theme_mod('slide_amount'); $i++) {
		//loop throught the amount of desired slide-acts
		// echo "<h2>test</h2>";
		// echo get_theme_mod('slide_amount');

		$wp_customize->add_setting( 'slide_test_'.$i, array(
			'default' => 1
		) );

		$wp_customize->add_control( 'slide_test_'.$i, array(
			'label'     => __( 'Type of Slide '.$i, 'sp_br_fe_17' ),
			'section'   => 'sp_br_fe_17_content_options_section',
			'priority'  => 11,
			'type'      => 'radio',
			'default' => $i,
			'choices' => array(
				'1' => __( 'Hero Picture' ),
				'2' => __( 'Acts' ),
				'3' => __( 'Gallery' ),
				'4' => __( 'Contact' )
			)
		) );

	}



	//update the refresh MongoCode
	//$wp_customize->get_setting( 'slide_1' )->transport = 'postMessage';

}
add_action( 'customize_register', 'sp_br_fe_17_customizer' );

function sp_br_fe_17_customize_preview_js() {
	wp_enqueue_script( '_s-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'sp_br_fe_17_customize_preview_js' );
?>
