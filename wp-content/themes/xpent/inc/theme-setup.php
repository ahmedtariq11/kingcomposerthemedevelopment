<?php
/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 add_action( 'after_setup_theme', 'woocommerce_support' );
 */
 if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		if ( class_exists( 'woocommerce' ) ) { return true; } else { return false; }
	}
}
 add_action( 'after_setup_theme', 'xpent_theme_support' );
function xpent_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	

	
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	//add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post', 'page','bannerpicture') );

		add_theme_support( 'automatic-feed-links' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999);

	// Add custom image size used in Cover Template.
	add_image_size( 'xpent-fullscreen', 1980, 9999 );
	// Add custom image size used in Cover Template.
	add_image_size( 'bannerpicture', 570, 339,true );
	
	
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

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
			'script',
			'style',
		)
	);

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Twenty, use a find and replace
	 * to change 'twentytwenty' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'xpent' );

	// Add support for full and wide align images.
	add_theme_support( 'title-tag' );

	// Add support for responsive embeds.
	add_theme_support( 'wocommerce' );
add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	/*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
	

}


function myCarnewsMenu() {

	if (function_exists('register_nav_menu')) {
		register_nav_menu( 'primary-menu', __( 'primary-menu', 'xpent' ) );
		register_nav_menu( 'level-menu12', __( 'Level Menu', 'xpent' ) );
			register_nav_menu( 'shop_subcat1', __( 'shop_subcat1', 'xpent' ) );
				register_nav_menu( 'Fashion Sub Menu', __( 'Fashion Sub Menu', 'xpent' ) );
							register_nav_menu( 'Fashion Parent Menu', __( 'Fashion Parent Menu', 'xpent' ) );
					register_nav_menu( 'Page', __( 'Page', 'xpent' ) );
					register_nav_menu( 'Pagemenu1', __( 'pagemenu1', 'xpent' ) );
			register_nav_menu( 'level-menu14', __( 'Level Menuss', 'xpent' ) );
			register_nav_menu( 'footer-socialmenu', __( 'Footer Social', 'xpent' ) );
				register_nav_menu( 'top-leftbar', __( 'Top leftBar', 'xpent' ) );

		register_nav_menu( 'footer_menu', __( 'Footer Menu', 'xpent' ) );

		register_nav_menu( 'product_cat', __( 'product_cat', 'xpent' ) );
register_nav_menu( 'pa_menu', __( 'Pa Menu', 'xpent' ) );

	}
}

add_action('init', 'myCarnewsMenu');




function add_menu_atts($atts, $item, $args){
  // your check for primary menu location
  if( $args->theme_location == 'Fashion Parent Menu' ) {
    //$atts['class'] = "page-scroll ";
    
   
  

  }     

  return $atts;
}
add_filter('nav_menu_link_attributes', 'add_menu_atts', 10, 3);

