<?php
define('THEME_URI', get_template_directory_uri() );
define('THEME_PATH', get_template_directory() );


/* Include Theme Files*/
include(THEME_PATH.'/inc/theme_file.php');
include(THEME_PATH.'/inc/theme-setup.php');
include(THEME_PATH.'/inc/navwalker.php');




/* Add Hooks */
add_action('wp_enqueue_scripts','xpent_scripts');
add_action( 'after_setup_theme', 'xpent_theme_support' );
add_image_size( 'logo', 138, 50 );

add_filter('acf/settings/remove_wp_meta_box', '__return_false');

add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption','custom-fields' ) );

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
require_once dirname( __FILE__ ) . '/inc/framework/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
 
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#example_showhidden').click(function() {
  		jQuery('#section-example_text_hidden').fadeToggle(400);
	});

	if (jQuery('#example_showhidden:checked').val() !== undefined) {
		jQuery('#section-example_text_hidden').show();
	}

});
</script>
<?php
}




function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Logo', 'agency' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'agency' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );




  register_sidebar( array(
        'name'          => __( 'Example Link', 'agency' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'agency' ),
'before_widget' => '<div id="%1$s" class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        
    ) );

 register_sidebar( array(
        'name'          => __( 'Social link', 'agency' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'agency' ),
'before_widget' => '<div id="%1$s"  class="top-link top-link-left %2$s"><ul class="social-icon">',
        'after_widget'  => '</ul></div>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
        
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );
function cptui_register_my_cpts() {

	/**
	 * Post Type: Icons.
	 */

	$labels = [
		"name" => __( "Icons", "xpent" ),
		"singular_name" => __( "Icons", "xpent" ),
	];

	$args = [
		"label" => __( "Icons", "xpent" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "icon", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "icon", $args );

	/**
	 * Post Type: logo.
	 */

	$labels = [
		"name" => __( "logo", "xpent" ),
		"singular_name" => __( "logo", "xpent" ),
	];

	$args = [
		"label" => __( "logo", "xpent" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "logo", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "logo", $args );

	/**
	 * Post Type: pagemenu.
	 */

	$labels = [
		"name" => __( "pagemenu", "xpent" ),
		"singular_name" => __( "pagemenu", "xpent" ),
	];

	$args = [
		"label" => __( "pagemenu", "xpent" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "pagemenu", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "pagemenu", $args );

	/**
	 * Post Type: Page Mega Menu.
	 */

	$labels = [
		"name" => __( "Page Mega Menu", "xpent" ),
		"singular_name" => __( "Page Mega Menu", "xpent" ),
	];

	$args = [
		"label" => __( "Page Mega Menu", "xpent" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "pagemagmenu", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "pagemagmenu", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts_icon() {

	/**
	 * Post Type: Icons.
	 */

	$labels = [
		"name" => __( "Icons", "xpent" ),
		"singular_name" => __( "Icons", "xpent" ),
	];

	$args = [
		"label" => __( "Icons", "xpent" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "icon", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "icon", $args );
}

add_action( 'init', 'cptui_register_my_cpts_icon' );
function cptui_register_my_cpts_logo() {

	/**
	 * Post Type: logo.
	 */

	$labels = [
		"name" => __( "logo", "xpent" ),
		"singular_name" => __( "logo", "xpent" ),
	];

	$args = [
		"label" => __( "logo", "xpent" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "logo", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "logo", $args );
}

add_action( 'init', 'cptui_register_my_cpts_logo' );
function cptui_register_my_cpts_pagemenu() {

	/**
	 * Post Type: pagemenu.
	 */

	$labels = [
		"name" => __( "pagemenu", "xpent" ),
		"singular_name" => __( "pagemenu", "xpent" ),
	];

	$args = [
		"label" => __( "pagemenu", "xpent" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "pagemenu", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "pagemenu", $args );
}

add_action( 'init', 'cptui_register_my_cpts_pagemenu' );
function cptui_register_my_cpts_pagemagmenu() {

	/**
	 * Post Type: Page Mega Menu.
	 */

	$labels = [
		"name" => __( "Page Mega Menu", "xpent" ),
		"singular_name" => __( "Page Mega Menu", "xpent" ),
	];

	$args = [
		"label" => __( "Page Mega Menu", "xpent" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "pagemagmenu", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail", "custom-fields" ],
	];

	register_post_type( "pagemagmenu", $args );
}

add_action( 'init', 'cptui_register_my_cpts_pagemagmenu' );



function atg_menu_classes($classes, $item, $args) {
  if($args->theme_location == 'level-menu12') {
    $classes[] = 'level3';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classes', 1, 3);


function atg_menu_classe($classes, $item, $args) {
  if($args->theme_location == 'level-menu14') {
    $classes[] = 'level';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'atg_menu_classe', 1, 3);







function add_specific_menu_location_atts( $atts, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'level-menu14' ) {
      // add the desired attributes:
      $atts['class'] = 'page-scroll';
    }
    return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_location_atts', 10, 3 );



function add_specific_menu_loca( $classes, $item, $args ) {
    // check if the item is in the primary menu
    if( $args->theme_location == 'top-leftbar' ) {

      $menu_items = array(285);
    if (in_array($item->ID, $menu_items)) {
      // add the desired attributes:
     $classes[] = 'compare-icon';
 }

   $menu_items = array(286);
    if (in_array($item->ID, $menu_items)) {
      // add the desired attributes:
     $classes[] = 'Register-icon"';
 }


}
  return $classes;

}
add_filter( 'nav_menu_css_class', 'add_specific_menu_loca', 10, 4 );





add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}



/**
 * Remove the breadcrumbs 
 */
function xpent_remove_breadcurms(){
	remove_action('woocommerce_before_main_content','woocommerce_breadcrumb',20,0);
}
add_action('init','xpent_remove_breadcurms');


/**
 * Remove show result remove
 */
function xpent_remove_show_result(){
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
}
add_action('init','xpent_remove_show_result');


/**
 * Remove show result remove
 */
function xpent_remove_ordering(){
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}
add_action('init','xpent_remove_ordering');

/**
 * Remove pagination
 */
function xpent_remove_paginatation(){
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );
}
add_action('init','xpent_remove_paginatation');


/**
 * change all thins breadcrums
 */

function xpent_woocommerce_breadcrum(){

	return array(
		'delimiter'  => '&#47;',
		'wrap_before'  => '<div class="bread-crumb right-side"><ul>',
		'wrap_after'  => '</ul></div>',
		'before'  => ' ',
		'after'  => ' ',
		'home'  => _x('Home','breadcrum','woocommerce'),
	);

}
add_filter('woocommerce_breadcrumb_defaults','xpent_woocommerce_breadcrum');


function xpent_custom_woocommerce_catalog_orderby( $sortby ) {
	$sortby['random_list'] = 'position';
	$sortby['price-desc'] = 'Price:Lowest first';
	$sortby['price'] = 'Price:HIghest first';
	$sortby['menu_order'] = 'Product Name:A to Z';
	unset($sortby['popularity']);
	unset($sortby['rating']);
	unset($sortby['date']);
	return $sortby;
}
add_filter( 'woocommerce_catalog_orderby', 'xpent_custom_woocommerce_catalog_orderby' );


function xpent_pagination(){
	global $wp_query;

	if ( $wp_query->max_num_pages <= 1 ) return; 

	$big = 999999999; // need an unlikely integer

	$pages = paginate_links( array(
	    'base'    	=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	    'format'  	=> '?paged=%#%',
	    'current' 	=> max( 1, get_query_var('paged') ),
	    'total'   	=> $wp_query->max_num_pages,
	    'type'    	=> 'array',
	    'prev_next' => true,
		'prev_text' => __('<i class="fa fa-angle-left" aria-hidden="true"></i>'),
		'next_text' => __('<i class="fa fa-angle-right" aria-hidden="true"></i>'),
	) );
	
	if( is_array( $pages ) ) {
	    $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
	    echo ' <div class="pagination-bar"><ul>';
	    foreach ( $pages as $page ) {
	            echo "<li>$page</li>";
	    }
	   echo '</ul></div>';
    }
}




function flipmart_pagination() {

global $wp_query;

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
		'prev_next'          => true,
		'prev_text'          => __('<i class="fa fa-angle-left"></i>'),
		'next_text'          => __('<i class="fa fa-angle-right"></i>'),

    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="pagination-bar"><ul>';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ul></div>';
        }
}

function xpent_woocommerce_catalog_page_ordering() {
?>
<?php echo '<div class="show-item right-side float-left-sm"> <span class="lbl">Show'  ?>
<?php echo '<div class="select-item"> '?>
    <form action="" method="POST" name="results" class="woocommerce-ordering">
    <select name="woocommerce-sort-by-columns" id="woocommerce-sort-by-columns" class="sortby" onchange="this.form.submit()">
<?php
 
//Get products on page reload
if  (isset($_POST['woocommerce-sort-by-columns']) && (($_COOKIE['shop_pageResults'] <> $_POST['woocommerce-sort-by-columns']))) {
        $numberOfProductsPerPage = $_POST['woocommerce-sort-by-columns'];
          } else {
        $numberOfProductsPerPage = $_COOKIE['shop_pageResults'];
          }
 
//  This is where you can change the amounts per page that the user will use  feel free to change the numbers and text as you want, in my case we had 4 products per row so I chose to have multiples of four for the user to select.
			$shopCatalog_orderby = apply_filters('woocommerce_sortby_page', array(
			//Add as many of these as you like, -1 shows all products per page
			  //  ''       => __('Results per page', 'woocommerce'),
				'20' 		=> __('20', 'woocommerce'),
				'-1' 		=> __('All', 'woocommerce'),
			));

		foreach ( $shopCatalog_orderby as $sort_id => $sort_name )
			echo '<option value="' . $sort_id . '" ' . selected( $numberOfProductsPerPage, $sort_id, true ) . ' >' . $sort_name . '</option>';
?>
</select>
</form>
<?php echo ' </div>' ?>
<?php echo ' </span></div>' ?>
<?php
}
 
// now we set our cookie if we need to
function dl_sort_by_page($count) {
  if (isset($_COOKIE['shop_pageResults'])) { // if normal page load with cookie
     $count = $_COOKIE['shop_pageResults'];
  }
  if (isset($_POST['woocommerce-sort-by-columns'])) { //if form submitted
    setcookie('shop_pageResults', $_POST['woocommerce-sort-by-columns'], time()+1209600, '/', 'www.your-domain-goes-here.com', false); //this will fail if any part of page has been output- hope this works!
    $count = $_POST['woocommerce-sort-by-columns'];
  }
  // else normal page load and no cookie
  return $count;
}
 add_filter('loop_shop_per_page','dl_sort_by_page');

function add_star_rating(){
    global $woocommerce, $product;
    $average = $product->get_average_rating();

    echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';
}
add_action('woocommerce_after_shop_loop_item', 'add_star_rating' );



remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10 );
  
add_action( 'woocommerce_after_single_product_summary', 'bbloomer_wc_output_long_description', 10 );
  
function bbloomer_wc_output_long_description() {
	 global $product;
	 global $post;
?>

   <?php the_content(); ?>
   
<?php
}
function simple_bootstrap_theme_load_wp_customizer($wp_customize)
{
    /// customizer code

    // adding section
    $wp_customize->add_section("sec_copyright", array(
        "title" => "Copyright Section",
        "description" => "This is a copyright section",
    ));

    // adding settings/field
    $wp_customize->add_setting("set_copyright", array(
        "type" => "theme_mod",
        "default" => "",
        "sanitize_callback" => "sanitize_text_field",
    ));

    // add control
    $wp_customize->add_control("set_copyright", array(
        "label" => "Copyright",
        "description" => "Please fill the copyright text",
        "section" => "sec_copyright",
        "type" => "text",
    ));

    /* section of new arrival / popularity control limit and columns */

    // adding section
    $wp_customize->add_section("sec_product_panel", array(
        "title" => "Product Panel Limit & Columns",
        "description" => "This is a section which is going to provide the controls for home page product panels",
    ));

        // adding settings/field
        $wp_customize->add_setting("set_new_arrival_limit", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_new_arrival_limit", array(
            "label" => "New Arrival - Product Limit",
            "description" => "Please fill provide the limit of new arrival",
            "section" => "sec_product_panel",
            "type" => "number",
        ));

        // adding settings/field
        $wp_customize->add_setting("set_new_arrival_column", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_new_arrival_column", array(
            "label" => "New Arrival - Product Columns",
            "description" => "Please fill provide the columns of new arrival",
            "section" => "sec_product_panel",
            "type" => "number",
        ));


        // adding settings/field
        $wp_customize->add_setting("set_popular_limit", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_popular_limit", array(
            "label" => "Popularity - Product Limit",
            "description" => "Please fill provide the limit of popularity",
            "section" => "sec_product_panel",
            "type" => "number",
        ));

        // adding settings/field
        $wp_customize->add_setting("set_popular_columns", array(
            "type" => "theme_mod",
            "default" => "",
            "sanitize_callback" => "absint",
        ));

        // add control
        $wp_customize->add_control("set_popular_columns", array(
            "label" => "Popularity - Product Columns",
            "description" => "Please fill provide the columns of popularity",
            "section" => "sec_product_panel",
            "type" => "number",
        ));
}

add_action("customize_register", "simple_bootstrap_theme_load_wp_customizer");