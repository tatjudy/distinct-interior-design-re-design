<?php
/**
 * distinctinteriordesign functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package distinctinteriordesign
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'distinctinteriordesign_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function distinctinteriordesign_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Omakase, use a find and replace
		 * to change 'omakase' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'distinctinteriordesign', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'distinctinteriordesign' ),
			)
		);

		register_nav_menus(
			array(
				'menu-2' => esc_html__( 'Footer Menu', 'distinctinteriordesign' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'distinctinteriordesign_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'distinctinteriordesign_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function distinctinteriordesign_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'distinctinteriordesign_content_width', 640 );
}
add_action( 'after_setup_theme', 'distinctinteriordesign_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function distinctinteriordesign_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'distinctinteriordesign' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'distinctinteriordesign' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'distinctinteriordesign_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function distinctinteriordesign_scripts() {
	global $post;

	wp_enqueue_style( 'distinctinteriordesign-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'distinctinteriordesign-style', 'https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Playfair+Display&display=swap', false );
	wp_style_add_data( 'distinctinteriordesign-style', 'rtl', 'replace' );

	wp_enqueue_script( 'distinctinteriordesign-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'distinctinteriordesign-main', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if (is_front_page()) {
		wp_enqueue_script( 'distinctinteriordesign-slider', get_template_directory_uri() . '/js/slider.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', false );
		wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css', false);
	}
	if (is_post_type_archive('projects') || is_singular('projects')) {
		wp_enqueue_script( 'distinctinteriordesign-projects', get_template_directory_uri() . '/js/projects.js', array(), _S_VERSION, true );
	}
}
add_action( 'wp_enqueue_scripts', 'distinctinteriordesign_scripts' );

function ww_load_dashicons(){
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'ww_load_dashicons');

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	acf_add_options_sub_page('Footer');

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
}

// Logo

function distinctinteriordesign_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'distinctinteriordesign_setup');

add_image_size('distinctinteriordesign-logo', 370, 72);
add_theme_support('custom-logo', array(
    'size' => 'distinctinteriordesign-logo'
));

// limit image sizes to 200kb to optimize website loading time
function whero_limit_image_size($file) {

	// Calculate the image size in KB
	$image_size = $file['size']/1024;

	// File size limit in KB
	$limit = 200;

	// Check if it's an image
	$is_image = strpos($file['type'], 'image');

	if ( ( $image_size > $limit ) && ($is_image !== false) )
        	$file['error'] = 'Your picture is too large. It has to be smaller than '. $limit .'KB';

	return $file;

}
add_filter('wp_handle_upload_prefilter', 'whero_limit_image_size');

// remove auto p tags 

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function custom_post_type() {
	$args = array(
		'labels' => array(
			'name' => 'Projects',
			'singular_name' => 'Project',
		),
		'hierarchical' => true,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-portfolio',
		'supports' => array('title', 'editor', 'thumbnail'),
	);

	register_post_type('projects', $args);
}

add_action('init', 'custom_post_type');

function cpt_settings() {
	acf_add_options_sub_page(array (
		'page_title' => 'Projects Settings',
		'parent_slug' => 'edit.php?post_type=projects',
		'capability' => 'manage_options',
	));
}

add_action('init', 'cpt_settings');

//featured image
add_theme_support( 'post-thumbnails' );