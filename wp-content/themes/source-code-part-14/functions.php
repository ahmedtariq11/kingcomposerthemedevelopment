<?php

//*** Support Title Tag 
add_theme_support( 'title-tag' );

//*** Enqueue FlipMart Scripts
function flipmart_enqueue_scripts(){
	
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '3.2.0' );
		
	wp_enqueue_style( 'main', get_template_directory_uri().'/assets/css/main.css', array(), '1.0' );
	
	wp_enqueue_style( 'blue', get_template_directory_uri().'/assets/css/blue.css', array(), '1.0' );
	
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.css', array(), '1.0' );
	
	wp_enqueue_style( 'owl.transitions', get_template_directory_uri().'/assets/css/owl.transitions.css', array(), '1.0' );
	
	wp_enqueue_style( 'animate.min', get_template_directory_uri().'/assets/css/animate.min.css', array(), '1.0' );
	
	wp_enqueue_style( 'rateit', get_template_directory_uri().'/assets/css/rateit.css', array(), '1.0' );
	
	wp_enqueue_style( 'bootstrap-select.min', get_template_directory_uri().'/assets/css/bootstrap-select.min.css', array(), '1.0' );
	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css', array(), '1.0' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	
	// WP Latest JQuery
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'bootstrap-hover-dropdown.min', get_template_directory_uri() . '/assets/js/bootstrap-hover-dropdown.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'echo.min', get_template_directory_uri() . '/assets/js/echo.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'jquery.easing', get_template_directory_uri() . '/assets/js/jquery.easing-1.3.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'bootstrap-slider.min', get_template_directory_uri() . '/assets/js/bootstrap-slider.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'jquery.rateit.min', get_template_directory_uri() . '/assets/js/jquery.rateit.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'lightbox.min', get_template_directory_uri() . '/assets/js/lightbox.min.js', array(), '1.0.0', true );

	wp_enqueue_script( 'bootstrap-select.min', get_template_directory_uri() . '/assets/js/bootstrap-select.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'wow.min', get_template_directory_uri() . '/assets/js/wow.min.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0.0', true );
	

}

add_action('wp_enqueue_scripts','flipmart_enqueue_scripts');


// WooCommerce Theme Support 

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


add_filter( 'woocommerce_product_add_to_cart_text' , 'custom_woocommerce_product_add_to_cart_text' );
/**
 * custom_woocommerce_template_loop_add_to_cart
*/
function custom_woocommerce_product_add_to_cart_text() {
	global $product;
	
	$product_type = $product->product_type;
	
	switch ( $product_type ) {
		case 'external':
			return __( 'Buy product', 'woocommerce' );
		break;
		case 'grouped':
			return __( 'View products', 'woocommerce' );
		break;
		case 'simple':
			return __( 'Add to cart', 'woocommerce' );
		break;
		case 'variable':
			return __( 'Select options', 'woocommerce' );
		break;
		default:
			return __( 'Read more', 'woocommerce' );
	}
	
}
// Change woocommerce defaults breadcrumb
add_filter( 'woocommerce_breadcrumb_defaults', 'flipmart_woocommerce_breadcrumbs' );
function flipmart_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => ' &#47; ',
            'wrap_before' => '<div class="breadcrumb-inner">
          <ul class="list-inline list-unstyled">',
            'wrap_after'  => '</ul>
        </div>',
            'before'      => '',
            'after'       => '',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}


// Add remove woocommerce defaults functions
add_action( 'init', 'flipmart_add_remove_woocommerce_defaults_functions' );
function flipmart_add_remove_woocommerce_defaults_functions() {
	
	// Shop page
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10, 0 );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
	remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	 
	// Single page
   remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
    add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 25 );
    remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
	
}

// Remove list/grid view plugin default option
function flipmart_listgrid_plugin_option(){
   global $WC_List_Grid;
   remove_action( 'woocommerce_before_shop_loop', array( $WC_List_Grid, 'gridlist_toggle_button' ), 30); 
}
add_action('woocommerce_archive_description','flipmart_listgrid_plugin_option');



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
        echo '<div class="pagination-container"><ul class="list-inline list-unstyled">';
        foreach ( $pages as $page ) {
                echo "<li>$page</li>";
        }
       echo '</ul></div>';
        }
}

// WooCommerce shop page show per page drop down

function flipmart_woocommerce_catalog_page_ordering() {
?>
<div class="lbl-cnt">
<?php echo '<span class="lbl">Show</span>' ?>
<form action="" method="POST" name="results" class="fld inline">
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
'12' 		=> __('12', 'flipmart'),
'20' 		=> __('20', 'flipmart'),
'30' 		=> __('30', 'flipmart'),
'40' 		=> __('40', 'flipmart'),
'50' 		=> __('50', 'flipmart'),
'-1' 		=> __('All', 'flipmart'),
));
foreach ( $shopCatalog_orderby as $sort_id => $sort_name )
echo '<option value="' . $sort_id . '" ' . selected( $numberOfProductsPerPage, $sort_id, true ) . ' >' . $sort_name . '</option>';
?>
</select>
</form>
</div>
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


// WooCommerce custom catalog ordering 
add_filter( 'woocommerce_catalog_orderby', 'flipmart_custom_woocommerce_catalog_orderby' );
function flipmart_custom_woocommerce_catalog_orderby( $sortby ) {
	$sortby['menu_order'] = 'Position';
	$sortby['price'] = 'Price:Lowest first';
	$sortby['price-desc'] = 'Price:HIghest first';
	unset($sortby['popularity']);
	unset($sortby['date']);
	unset($sortby['rating']);
	
	return $sortby;
}



// FlipMart sidebar register
add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Left Sidebar', 'flipmart' ),
        'id' => 'left_sidebar',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'flipmart' ),
        'before_widget' => '<div class="sidebar-widget wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="section-title">',
		'after_title'   => '</h3>',
    ) );
}


function remove_css_js_version( $src ) {
    if( strpos( $src, '?ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );
function no_wordpress_errors(){
  return 'Something is wrong!';
}
add_filter( 'login_errors', 'no_wordpress_errors' );
function artisansweb_remove_version() {
    return '';
}
add_filter('the_generator', 'artisansweb_remove_version');
 remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'index_rel_link');
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'start_post_rel_link', 10, 0);
  remove_action('wp_head', 'parent_post_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('wp_head', 'rel_canonical');
  remove_action('wp_head', 'rel_alternate');
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  remove_action('wp_head', 'wp_oembed_add_host_js');
  remove_action('wp_head', 'rest_output_link_wp_head');
   
  //remove_action('rest_api_init', 'wp_oembed_register_route');
  remove_action('wp_print_styles', 'print_emoji_styles');
   
  remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
  remove_filter('pre_oembed_result', 'wp_filter_pre_oembed_result', 10);
   
  add_filter('embed_oembed_discover', '__return_false');
  //add_filter('show_admin_bar', '__return_false');
remove_action('welcome_panel', 'wp_welcome_panel');
add_filter('show_admin_bar', '__return_false');
add_action( 'wp_dashboard_setup', function()
{
    remove_meta_box( 'dashboard_plugins', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_secondary', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_browser_nag', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_recent_drafts', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_incoming_links', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_recent_comments', 'dashboard', 'normal' );
} );
function cry_clean_header_hook(){
	wp_deregister_script( 'comment-reply' );
         }
add_action('init','cry_clean_header_hook');
function speed_stop_loading_wp_embed() {
    if (!is_admin()) {
        wp_deregister_script('wp-embed');
    }
}
add_action('init', 'speed_stop_loading_wp_embed');
// Disable Self Pingback
function disable_pingback( &$links ) {
  foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, get_option( 'home' ) ) )
            unset($links[$l]);
}

add_action( 'pre_ping', 'disable_pingback' );
function disable_emojis() {
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
    remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
    remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
    add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );
add_action( 'init', 'stop_heartbeat', 1 );
    function stop_heartbeat() {
    wp_deregister_script('heartbeat');
}

add_action( 'wp_enqueue_scripts', 'child_manage_woocommerce_styles', 99 );

function child_manage_woocommerce_styles() {
 //remove generator meta tag
 remove_action( 'wp_head', array( $GLOBALS['woocommerce'], 'generator' ) );

//first check that woo exists to prevent fatal errors
 if ( function_exists( 'is_woocommerce' ) ) {
 //dequeue scripts and styles
 if ( ! is_woocommerce() && ! is_cart() && ! is_checkout() ) {
 
 wp_dequeue_style( 'woocommerce_frontend_styles' );
 wp_dequeue_style( 'woocommerce-general');
 wp_dequeue_style( 'woocommerce-layout' );
 wp_dequeue_style( 'woocommerce-smallscreen' );
 wp_dequeue_style( 'woocommerce_fancybox_styles' );
 wp_dequeue_style( 'woocommerce_chosen_styles' );
 wp_dequeue_style( 'woocommerce_prettyPhoto_css' );
 wp_dequeue_style('wc-memberships-frontend');
 wp_dequeue_style('membership-metaboxes');
 wp_dequeue_style('membership-frontendcss');
 wp_dequeue_style('membership-subscriptionformcss');
 wp_dequeue_style('membership-accountformcss');
 wp_dequeue_style('membership-subscriptionformcss');
 wp_dequeue_style('membership-upgradeformcss');
 wp_dequeue_style('membership-renewformcss');
 wp_dequeue_style('membership-fancyboxcss');
 wp_dequeue_style('membership-popupmemcss');
 wp_dequeue_style('membership-accountformcss');
 wp_dequeue_style('membership-upgradeformcss');
 wp_dequeue_style('membership-renewformcss');
 wp_dequeue_style( 'select2' );
 
 // Javascripts

 wp_dequeue_script( 'wc-add-payment-method' );
 wp_dequeue_script( 'wc-lost-password' );
 wp_dequeue_script( 'wc_price_slider' );
 wp_dequeue_script( 'wc-single-product' );
 wp_dequeue_script( 'wc-add-to-cart' );
 wp_dequeue_script( 'wc-cart-fragments' );
 wp_dequeue_script( 'wc-credit-card-form' );
 wp_dequeue_script( 'wc-checkout' );
 wp_dequeue_script( 'wc-add-to-cart-variation' );
 wp_dequeue_script( 'wc-single-product' );
 wp_dequeue_script( 'wc-cart' );
 wp_dequeue_script( 'wc-chosen' );
 wp_dequeue_script( 'woocommerce' );
 wp_dequeue_script( 'prettyPhoto' );
 wp_dequeue_script( 'prettyPhoto-init' );
 wp_dequeue_script( 'jquery-blockui' );
 wp_dequeue_script( 'jquery-placeholder' );
 wp_dequeue_script( 'jquery-payment' );
 wp_dequeue_script( 'fancybox' );
 wp_dequeue_script( 'jqueryui' );

}
 }

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

add_action( 'woocommerce_after_shop_loop_item_title', 'bbloomer_show_all_subcats', 2 );
  
function bbloomer_show_all_subcats() {
  
global $post;
  
$cats = get_the_terms( $post->ID, 'product_cat' );
  
if ( ! empty( $cats ) ) {
    
        foreach ( $cats as $term ) {
  
   // If parent cat ID = 116 echo subcat name...
        if( $term->parent == 17 ) { 
      echo $term->name;
   }
  
        }
  
}
  
}