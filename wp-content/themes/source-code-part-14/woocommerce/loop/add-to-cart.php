<?php
/**
 * Loop Add to Cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/add-to-cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

echo apply_filters( 'woocommerce_loop_add_to_cart_link',
	sprintf( '<div class="cart clearfix animate-effect">
	  <div class="action">
		<ul class="list-unstyled">
                                  <li class="add-cart-button btn-group">
                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                    <i class="fa fa-shopping-cart"></i>													
                                    </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </li>
                                  <li class="lnk wishlist">
                                    <a class="add-to-cart" href="detail.html" title="Wishlist">
                                    <i class="icon fa fa-heart"></i>
                                    </a>
                                  </li>
                                  <li class="lnk">
                                    <a class="add-to-cart" href="detail.html" title="Compare">
                                    <i class="fa fa-signal"></i>
                                    </a>
                                  </li>
                                </ul>
	  
	</div>',
		esc_url( $product->add_to_cart_url() ),
		esc_attr( isset( $quantity ) ? $quantity : 1 ),
		esc_attr( $product->id ),
		esc_attr( $product->get_sku() ),
		esc_attr( isset( $class ) ? $class : 'button' ),
		esc_html( $product->add_to_cart_text() )
	),
$product );
