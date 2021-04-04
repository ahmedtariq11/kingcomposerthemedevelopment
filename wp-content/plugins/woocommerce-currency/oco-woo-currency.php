<?php
/**
 * Plugin Name: Our currencies of the world
 * Plugin URI: https://www.solutionsplayer.com/
 * Author: Ahmed Ali Tariq
 * Author URI: https://www.solutionsplayer.com/
 * Description: Add currencies of the world
 * Version: 0.1.0
 * License: GPL2
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: oco
*/

/**
 * Add new Country/Economy currency.
 */
 defined('ABSPATH') || die("You Can't Access this File Directly");
 if(!class_exists('oco_woo_currency')):
class oco_woo_currency{
	public function __construct(){
	
		add_filter('woocommerce_currencies', array($this, 'oco_add_world_currencies'));
		add_filter('woocommerce_currency_symbol', array($this, 'oco_add_world_currencies_symbol'),10, 2);
	}

public function oco_add_world_currencies( $currencies ) {
$currencies['ARUB'] = __( 'United Arab Emirates', 'oco' );

	return $currencies;
}

public function oco_add_world_currencies_symbol( $currency_symbol, $currency ) {
	switch ( $currency ) {
		case 'ARUB': 
			$currency_symbol = 'QR'; 
		break;
	}
	return $currency_symbol;
}
}
new oco_woo_currency;
endif;