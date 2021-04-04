<?php
/**
 * Single Product stock.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/stock.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

$product_id            = get_the_ID();
$product               = wc_get_product( $product_id );
$product_thumbnail_url = get_the_post_thumbnail_url( $product_id, 'medium' );
$product_title         = get_the_title();
$product_link          = get_the_permalink();
$sale_price            = $product->get_sale_price();
$regular_price         = $product->get_regular_price();
$is_product_on_sale    = $product->is_on_sale();
$is_product_in_stock   = $product->is_in_stock();
$product_price         = $product->get_price_html();
$discount_percent      = ! empty( $sale_price ) ? floatval( ( $regular_price - $sale_price ) / $regular_price * 100 )  : 0;



// Get Product Dimensions
  
$product->get_weight();
$product->get_length();
$product->get_width();
$product->get_height();
$product->get_dimensions();
  
// Get Linked Products
  
$product->get_upsell_ids();
$product->get_cross_sell_ids();
$product->get_parent_id();
  
// Get Product Variations and Attributes
 
$product->get_children(); // get variations
$product->get_attributes();
$product->get_default_attributes();
$attributes=$product->get_attribute( 'size' ); //get specific attribute value

//var_dump($attributes);
  
// Get Product Taxonomies
  
$product->get_categories();
$product->get_category_ids();
$product->get_tag_ids();

  
// Get Product General Info
  
$product->get_type();
$product->get_name();
$product->get_slug();
$product->get_date_created();
$product->get_date_modified();
$product->get_status();
$product->get_featured();
$product->get_catalog_visibility();
$long_description=$product->get_description();
$short_description=$product->get_short_description();
$sku=$product->get_sku();
$product->get_menu_order();
$product->get_virtual();
?>
<div class="product-info-stock-sku <?php echo esc_attr( $class ); ?>">  <div>
                      <label>Availability: </label>
                      <span class="info-deta">In stock</span> </div>
                    <div>
                      <label>SKU: </label>
                      <span class="info-deta"><?php echo $sku; ?> </span> </div><?php echo wp_kses_post( $availability ); ?></div>

                   
             
