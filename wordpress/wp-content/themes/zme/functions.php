<?php
/**
 * zme functions and definitions
 *
 * @package zme
 * @since zme 1.0
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since zme 1.0
 */

if ( ! isset( $content_width ) )

	$content_width = 640; /* pixels */

if ( ! function_exists( 'zme_setup' ) ):

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * @since zme 1.0
 */

function zme_setup() {

	/**
	 * Custom template tags for this theme.
	 */
	require( get_template_directory() . '/inc/template-tags.php' );

	/**
	 * Custom functions that act independently of the theme templates
	 */
	//require( get_template_directory() . '/inc/tweaks.php' );

	/**
	 * Custom Theme Options
	 */
	//require( get_template_directory() . '/inc/theme-options/theme-options.php' );

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on zme, use a find and replace
	 * to change 'zme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'zme', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'featured_image', 540, 9999 );
	add_image_size( 'link_thumbnail', 72, 72, true );

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'zme' ),
	) );

	/**
	 * Add support for the Aside Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'link', 'quote', 'image', ) );
}
endif; // zme_setup
add_action( 'after_setup_theme', 'zme_setup' );

/**
 * Display Post Image and Caption
 *
 * @link http://www.billerickson.net/wordpress-featured-image-captions/
 * @author Bill Erickson
 */
function be_display_image_and_caption() {
	echo '<div class="entry-thumbnail">';
	the_post_thumbnail( 'featured_image' );
	echo '<span class="caption">' . get_post( get_post_thumbnail_id() )->post_excerpt . '</span>';
	echo '</div>';
}

/**
 * Register widgetized area and update sidebar with default widgets
 *
 * @since zme 1.0
 */
function zme_widgets_init() {
	register_sidebar( array(
		'name' => __( 'Sidebar', 'zme' ),
		'id' => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '<h1 class="widget-title">',
		'after_title' => '</h1>',
	) );
}
add_action( 'widgets_init', 'zme_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function zme_scripts() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery-tweet', get_template_directory_uri() . '/js/jquery.tweet.js', array( 'jquery' ), '', true );

	//wp_enqueue_script( 'small-menu', get_template_directory_uri() . '/js/small-menu.js', array( 'jquery' ), '20120206', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( 'keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
}
add_action( 'wp_enqueue_scripts', 'zme_scripts' );

/**
 * Implement the Custom Header feature
 */
//require( get_template_directory() . '/inc/custom-header.php' );

/**
 * Custom permalink after the excerpt
 */
//function wpfme_replace_excerpt($content) {
//	return str_replace('[...]',
//		'<a class="readmore" href="'. get_permalink() .'">Continue Reading</a>',
//		$content
//	);
//}
//add_filter('the_excerpt', 'wpfme_replace_excerpt');

?>