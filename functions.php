<?php
/**
 * Sprungbrätt Festival 17 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Sprungbrätt_Festival_17
 */

if ( ! function_exists( 'sp_br_fe_17_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function sp_br_fe_17_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Sprungbrätt Festival 17, use a find and replace
	 * to change 'sp_br_fe_17' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'sp_br_fe_17', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'sp_br_fe_17' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'sp_br_fe_17_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'sp_br_fe_17_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function sp_br_fe_17_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'sp_br_fe_17_content_width', 640 );
}
add_action( 'after_setup_theme', 'sp_br_fe_17_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function sp_br_fe_17_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'sp_br_fe_17' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'SlideHero', 'sp_br_fe_17' ),
		'id'            => 'slide-hero',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'SlideGallery', 'sp_br_fe_17' ),
		'id'            => 'slide-gallery',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'SlideActs', 'sp_br_fe_17' ),
		'id'            => 'slide-acts',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'SlideActsBands', 'sp_br_fe_17' ),
		'id'            => 'slide-acts-bands',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'SlideActsTanz', 'sp_br_fe_17' ),
		'id'            => 'slide-acts-tanz',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'SlideActsSlam', 'sp_br_fe_17' ),
		'id'            => 'slide-acts-slam',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'SlideContact', 'sp_br_fe_17' ),
		'id'            => 'slide-contact',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'SlideContactLeft', 'sp_br_fe_17' ),
		'id'            => 'slide-contact-left',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'SlideContactRight', 'sp_br_fe_17' ),
		'id'            => 'slide-contact-right',
		'description'   => esc_html__( 'Add widgets here.', 'sp_br_fe_17' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'sp_br_fe_17_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function sp_br_fe_17_scripts() {
	//no style atm, just my bundle
	// wp_enqueue_style( 'sp_br_fe_17-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sp_br_fe_17-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'sp_br_fe_17-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sp_br_fe_17_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
	* enque scripts
	*/


function my_theme_enqueue_scripts() {
	wp_enqueue_script( 'bundle', get_stylesheet_directory_uri() . '/dist/bundle.js', array('jquery'), 1, false );
	wp_enqueue_style( 'bundle', get_stylesheet_directory_uri() . '/dist/bundle.css', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );
/**
	* enque scripts
	*/

	// The proper way to enqueue GSAP script
	// wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	function theme_gsap_script() {
	    wp_enqueue_script( 'gsap-js', 'http://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), false, true );
	    wp_enqueue_script( 'gsap-js', get_template_directory_uri() . '/dist/bundle.js', array('jquery'), 1, true );
	}
	add_action( 'wp_enqueue_scripts', 'theme_gsap_script' );
