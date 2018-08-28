<?php
/**
 * RoughHands_Template Class
 *
 * @package RoughHands
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Remove cart from header
 *
 * @return void.
 */
function roughhands_remove_storefront_header_cart() {
	remove_action( 'storefront_header', 'storefront_header_cart', 60 );
}
add_action( 'init', 'roughhands_remove_storefront_header_cart' );


/**
 * Remove product search from header
 *
 * @link https://wordpress.stackexchange.com/questions/189062/remove-parent-theme-action-in-child#189066
 * @return void.
 */
function roughhands_remove_storefront_product_search() {
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
}
add_action( 'init', 'roughhands_remove_storefront_product_search' );
