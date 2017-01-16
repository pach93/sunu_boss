<?php
/**
 * Twenty Seventeen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
function benen_setup() {
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
	) );


// add_theme_support('post-thumbnails');

// add_image_size( 'future-featured-image', 840, 341, true );

// add_image_size( 'future-thumbnail-avatar', 300, 300, true );

// register_nav_menus( array(
// 		'top'    => __( 'Top Menu', 'future' ),
// 		'social' => __( 'Social Links Menu', 'future' ),
// 	) );
 }
 add_action( 'after_setup_theme', 'benen_setup' );

function benen_scripts() {
	
		wp_enqueue_style( 'font-awesome', get_theme_file_uri( '/assets/css/font-awesome.min.css' ));

    // Theme stylesheet.
	wp_enqueue_style( 'benen-style', get_stylesheet_uri() );

    wp_enqueue_script( 'benen-ie8-shiv', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'benen-ie8-shiv', 'conditional', 'lte IE 8' );

    wp_enqueue_style( 'benen-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'future-style' ), '1.0' );
    wp_style_add_data( 'benen-ie9', 'conditional', ' lte IE 9' );

        // Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'benen-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'future-style' ), '1.0' );
	wp_style_add_data( 'benen-ie8', 'conditional', 'lte IE 8' );
    //footer
    wp_enqueue_script( 'benen-skel', get_theme_file_uri( 'assets/js/jquery.min.js' ), array(), '3.7.3' ,true);
    wp_enqueue_script( 'benen-skel', get_theme_file_uri( 'assets/js/skel.min.js' ), array('jquery'), '3.7.3' ,true);
    wp_enqueue_script( 'benen-util', get_theme_file_uri( 'assets/js/util.js' ), array(), '3.7.3',true );
     wp_enqueue_script( 'benen-ie8-respond', get_theme_file_uri( 'assets/js/ie/respond.min.js' ), array(), '4.7',true );
	wp_script_add_data( 'benen-ie8-respond', 'conditional', 'lte IE 8' );
    wp_enqueue_script( 'benen-main', get_theme_file_uri( 'assets/js/main.js' ), array(), '3.7.3',true );

	//font awesome

	

	
}
add_action( 'wp_enqueue_scripts', 'benen_scripts' );
