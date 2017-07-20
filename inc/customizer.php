<?php
function sp_br_fe_17_customizer( $wp_customize ) {
	//remove standart options
	require_once 'custom_controls.php';

	$wp_customize->remove_section( 'title_tagline' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_section( 'colors' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_panel( 'nav_menus');

	// add Theme panel
	$wp_customize->add_panel( 'sp_br_fe_17_panel' , array(
		'title'      => __( 'Theme Options', 'sp_br_fe_17' ),
		'capability' => 'edit_theme_options',
		'priority'   => 101,
	) );

	// add "Content Options" section
	$wp_customize->add_section( 'sp_br_fe_17_colors_section' , array(
		'title'      => __( 'Colors', 'sp_br_fe_17' ),
		'priority'   => 100,
		// 'panel'			 => 'sp_br_fe_17_panel',
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

	//enable live reload
	$wp_customize->get_setting( 'background-color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'menu-color' )->transport = 'postMessage';

	$wp_customize->get_setting( 'widget-color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'text-color' )->transport = 'postMessage';
	$wp_customize->get_setting( 'heading-color' )->transport = 'postMessage';

	//add Posts section
	$wp_customize->add_section( 'sp_br_fe_17_posts_section' , array(
		'title'      => __( 'Posts Option', 'sp_br_fe_17' ),
		'panel'			 => 'sp_br_fe_17_panel',
	) );

	//add a titel
	$wp_customize->add_setting('titel-posts', array(
		'default'           => '',
	));
	$wp_customize->add_control(new Title_Custom_control($wp_customize, 'title_posts', array(
		'label'    		=> esc_html__('Posts options', 'sp_br_fe_17'),
		// 'description' 	=> esc_html__('There are times that you just need to say something.', 'mytheme'),
		'settings'		=> 'titel-posts',
		'section'  		=> 'sp_br_fe_17_posts_section',
	)));

	$wp_customize->add_setting( 'posts-show', array(
		'default' => true,
	) );

	$wp_customize->add_control(new Toggle_Checkbox_Custom_control($wp_customize, 'posts_show', array(
		'label'    		=> esc_html__('Show Posts?', 'sp_br_fe_17'),
		'type'     		=> 'toggle_checkbox',
		'settings'		=> 'posts-show',
		'section'  		=> 'sp_br_fe_17_posts_section',
	)));

	$wp_customize->get_setting( 'posts-show' )->transport = 'postMessage';

	// add Slides section
	$wp_customize->add_section( 'sp_br_fe_17_slides_section' , array(
		'title'      => __( 'General Slides', 'sp_br_fe_17' ),
		'panel'			 => 'sp_br_fe_17_panel',
		'priority'   => 101,
	) );

	// // add setting to highlight widgets
	// $wp_customize->add_setting( 'highlight-widgets' , array(
	// 	'default'   => false
	// ) );
	//
	// //add controll to hightlight widgets
	// $wp_customize->add_control( 'highlight-widgets', array(
	// 	'label'     => __( 'Highlight all widget areas? ', 'sp_br_fe_17' ),
	// 	'section'   => 'sp_br_fe_17_slides_section',
	// 	'priority'  => 11,
	// 	'type'      => 'checkbox'
	// ) );


	// add setting control amount of slides
	$wp_customize->add_setting( 'slide_amount', array(
		'default' => 4,
	) );

	$amount = get_theme_mod('slide_amount');
	// add control for amount of slides
	$wp_customize->add_control( 'slide_amount', array(
		'label'     => __( 'How many slides are needed? At the moment there are: '.$amount, 'sp_br_fe_17' ),
		'description' => __( 'If you add new slides you need to reload the window.'),
		'section'   => 'sp_br_fe_17_slides_section',
		// 'panel'			 => 'sp_br_fe_17_panel',
		'type'      => 'number'
	) );


	// add setting radius
	$wp_customize->add_setting( 'slide-radius', array(
		'default' => 0,
	) );

	$wp_customize->add_control( 'slide-radius', array(
		'label'     => __( 'Change the border radius here:', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_slides_section',
		// 'panel'			 => 'sp_br_fe_17_panel',
		'type'      => 'number'
	) );

	$wp_customize->get_setting( 'slide-radius' )->transport = 'postMessage';

	// add setting padding
	$wp_customize->add_setting( 'slide-padding', array(
		'default' => 0,
	) );

	$wp_customize->add_control( 'slide-padding', array(
		'label'     => __( 'Change the space between background and widget here:', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_slides_section',
		// 'panel'			 => 'sp_br_fe_17_panel',
		'type'      => 'number'
	) );

	$wp_customize->get_setting( 'slide-padding' )->transport = 'postMessage';

	/**
	*Info
	**///add titel for shadow options
	$wp_customize->add_setting('titel-shadow'.$i, array(
		'default'           => '',
	));
	$wp_customize->add_control(new Title_Custom_control($wp_customize, 'custom-shadow', array(
		'label'    		=> esc_html__('Shadow Options', 'sp_br_fe_17'),
		// 'description' 	=> esc_html__('There are times that you just need to say something.', 'mytheme'),
		'settings'		=> 'titel-shadow',
		'section'  		=> 'sp_br_fe_17_slides_section'.$i,
	)));

	// add setting for box shadow
	$wp_customize->add_setting( 'shadow-color', array(
		'default' => 'rgba(0,0,0,0.75)',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'shadow-color', array(
		'label'      => __( 'Add shadow color here:', 'sp_br_fe_17' ),
		'section'    => 'sp_br_fe_17_slides_section',
		'settings'   => 'shadow-color',
	) ) );

	$wp_customize->get_setting( 'shadow-color' )->transport = 'postMessage';

/**
	*Range
	*/
	//shadow h value
	$wp_customize->add_setting( 'shadow-hvalue', array(
		'default' => 20,
	) );

	$wp_customize->add_control(
	    new WP_Customize_Range_Control(
	        $wp_customize,
	        'shadow-hvalue',
	        array(
	            'label'       => __('Horizontal Shadow'),
	            'section'     => 'sp_br_fe_17_slides_section',
	            'settings'    => 'shadow-hvalue',
	            // 'description' => __('Measurement is in pixel.'),
	            'input_attrs' => array(
	                'min' => -50,
	                'max' => 50,
	            ),
	        )
	    )
	);

	$wp_customize->get_setting( 'shadow-hvalue' )->transport = 'postMessage';

	//shadow v value
	$wp_customize->add_setting( 'shadow-vvalue', array(
		'default' => 20,
	) );

	$wp_customize->add_control(
	    new WP_Customize_Range_Control(
	        $wp_customize,
	        'shadow-vvalue',
	        array(
	            'label'       => __('Vertical Shadow'),
	            'section'     => 'sp_br_fe_17_slides_section',
	            'settings'    => 'shadow-vvalue',
	            // 'description' => __('Measurement is in pixel.'),
	            'input_attrs' => array(
	                'min' => -50,
	                'max' => 50,
	            ),
	        )
	    )
	);

	$wp_customize->get_setting( 'shadow-vvalue' )->transport = 'postMessage';

	//shadow v value
	$wp_customize->add_setting( 'shadow-blur', array(
		'default' => 20,
	) );

	$wp_customize->add_control(
	    new WP_Customize_Range_Control(
	        $wp_customize,
	        'shadow-blur',
	        array(
	            'label'       => __('Shadow Blur'),
	            'section'     => 'sp_br_fe_17_slides_section',
	            'settings'    => 'shadow-blur',
	            // 'description' => __('Measurement is in pixel.'),
	            'input_attrs' => array(
	                'min' => 0,
	                'max' => 100,
	            ),
	        )
	    )
	);

	$wp_customize->get_setting( 'shadow-blur' )->transport = 'postMessage';

	//shadow v value
	$wp_customize->add_setting( 'shadow-spread', array(
		'default' => 20,
	) );

	$wp_customize->add_control(
	    new WP_Customize_Range_Control(
	        $wp_customize,
	        'shadow-spread',
	        array(
	            'label'       => __('Shadow Spreading'),
	            'section'     => 'sp_br_fe_17_slides_section',
	            'settings'    => 'shadow-spread',
	            // 'description' => __('Measurement is in pixel.'),
	            'input_attrs' => array(
	                'min' => 0,
	                'max' => 100,
	            ),
	        )
	    )
	);

	$wp_customize->get_setting( 'shadow-spread' )->transport = 'postMessage';

	/**
	*Separator
	**/
	$wp_customize->add_setting('separator', array(
		'default'           => '',
		'sanitize_callback' => 'esc_html',
	));
	$wp_customize->add_control(new Separator_Custom_control($wp_customize, 'separator', array(
		'settings'		=> 'separator',
		'section'  		=> 'sp_br_fe_17_slides_section',
	)));

	for ($i = 1; $i <= get_theme_mod('slide_amount'); $i++) {
		//loop throught the amount of desired slide-acts
		// echo "<h2>test</h2>";
		// echo get_theme_mod('slide_amount');

		/**
		*Info
		**/
		$wp_customize->add_setting('custom-info'.$i, array(
			'default'           => '',
		));
		$wp_customize->add_control(new Title_Custom_control($wp_customize, 'custom_info'.$i, array(
			'label'    		=> esc_html__('Slide '.$i, 'sp_br_fe_17'),
			// 'description' 	=> esc_html__('There are times that you just need to say something.', 'mytheme'),
			'settings'		=> 'custom-info'.$i,
			'section'  		=> 'sp_br_fe_17_slides_section'.$i,
		)));

		$wp_customize->add_setting( 'slide-type-'.$i, array(
			'default' => '1',
		) );

		$wp_customize->add_control( 'slide-type-'.$i, array(
			'label'     => __( 'Type of Slide '.$i, 'sp_br_fe_17' ),
			'section'   => 'sp_br_fe_17_slides_section'.$i,
			'type'      => 'select',
			'choices' => array(
				'1' => __( 'Widget 100%' ),
				'2' => __( 'Widget 50%' )
			)
		) );


		if (get_theme_mod('slide-type-'.$i) == 1) {
			$repeat = 1;
			// echo "<h2>test</h2>";
			// echo "<h1>".get_theme_mod('slide-type-'.$i)."</h1>";
		}else {
			$repeat = 2;
		}

		for ($jj = 1; $jj <= $repeat; $jj++) {
			if (get_theme_mod('slide-type-'.$i) == 1) {
				//one 100 panel same
				$string = '';
				$position = '';
			} elseif ($jj == 1) {
				//first run, still same
				$string = '';
				$position = ' Left Panel';
			} else {
				//add the string for secend panel
				$string = '-'.$jj;
				$position = ' Right Panel';
			}

			// add setting if background is shown
			$wp_customize->add_setting( 'slide-'.$i.'-background'.$string, array(
				'default' => true
			) );

			// add control if background is shown
			$wp_customize->add_control( 'slide-'.$i.'-background'.$string, array(
				'label'     => __( 'Slide '.$i.$position.' Background', 'sp_br_fe_17' ),
				'section'   => 'sp_br_fe_17_slides_section'.$i,
				'type'      => 'checkbox',
				// 'active_callback' => 'choice_options_callback',
			) );

			//section for slides??
			$wp_customize->add_section( 'sp_br_fe_17_slides_section'.$i , array(
				'title'      => __( 'Slide '.$i, 'sp_br_fe_17' ),
				'panel'			 => 'sp_br_fe_17_panel',
			) );

			// add setting for slide id
			$wp_customize->add_setting( 'slide-'.$i.'-class'.$string, array(
				'default' => 'slide-'.$i
			) );

			// add control for slide id
			$wp_customize->add_control( 'slide-'.$i.'-class'.$string, array(
				'label'     => __( 'Add Styling Classes to Slide'.$position.' :', 'sp_br_fe_17' ),
				'section'   => 'sp_br_fe_17_slides_section'.$i,
				'type'      => 'text',
				// 'active_callback' => 'choice_options_callback',
			) );


			/**
			*Separator
			**/
			$wp_customize->add_setting('separator-'.$i.$string, array(
				'default'           => '',
				'sanitize_callback' => 'esc_html',
			));
			$wp_customize->add_control(new Separator_Custom_control($wp_customize, 'separator'.$string, array(
				'settings'		=> 'separator'.$i.$string,
				'section'  		=> 'sp_br_fe_17_slides_section'.$i,
				// 'active_callback' => 'choice_options_callback',
			)));
		}
	}

	//enable live reload
	// $wp_customize->get_setting( 'highlight-widgets' )->transport = 'postMessage';

	// add Typograph section
	$wp_customize->add_section( 'sp_br_fe_17_typo_section' , array(
		'title'      => __( 'Typography', 'sp_br_fe_17' ),
		'priority'   => 102,
		// 'panel'			 => 'sp_br_fe_17_panel',
	) );

	// add setting for typo link
	$wp_customize->add_setting( 'typo-link', array(
		'default' => '<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">'
	) );

	// add control for typo link
	$wp_customize->add_control( 'typo-link', array(
		'label'     => __( 'Place Link from Google Fonts here:', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_typo_section',
		'priority'  => 11,
		'type'      => 'textarea'
	) );

	// add setting for typo style
	$wp_customize->add_setting( 'typo-style', array(
		'default' => 'font-familiy: "Montserrat", sans-serif;'
	) );

	// add control for typo style
	$wp_customize->add_control( 'typo-style', array(
		'label'     => __( 'Place Styletag from Google Fonts here:', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_typo_section',
		'priority'  => 12,
		'type'      => 'textarea'
	) );

	// add setting for typo align
	$wp_customize->add_setting( 'typo-align', array(
		'default' => 1
	) );

	//add controll for type align
	$wp_customize->add_control( 'typo-align', array(
		'label'     => __( 'How should the text be aligned?', 'sp_br_fe_17' ),
		'section'   => 'sp_br_fe_17_typo_section',
		'priority'  => 13,
		'type'      => 'select',
		'default' => 1,
		'choices' => array(
			'left' => __( 'left' ),
			'center' => __( 'center' ),
			'right' => __( 'right' ),
			'justify' => __( 'justify' )
		)
	) );


}
add_action( 'customize_register', 'sp_br_fe_17_customizer' );



/**
 * Enqueue the stylesheet.
 */
function my_enqueue_customizer_stylesheet() {

	wp_register_style( 'my-customizer-css', get_template_directory_uri() . '/inc/customizer.css', NULL, NULL, 'all' );
	wp_enqueue_style( 'my-customizer-css' );

}
add_action( 'customize_controls_print_styles', 'my_enqueue_customizer_stylesheet' );


// 1. customizer-preview.js
function customize_preview_js() {
    wp_enqueue_script( 'customizer_preview', get_template_directory_uri() . '/js/customizer-preview.js', array( 'customize-preview' ), null, true );
		wp_enqueue_style( 'custom_snt_control_style', get_stylesheet_directory_uri() . '/inc/controls/css/customizer-controls.css' );
}
add_action( 'customize_preview_init', 'customize_preview_js' );

// 2. customizer-control.js
function customize_control_js() {
    wp_enqueue_script( 'customizer_control', get_template_directory_uri() . '/js/customizer-control.js', array( 'customize-controls', 'jquery' ), null, true );
}
add_action( 'customize_controls_enqueue_scripts', 'customize_control_js' );
