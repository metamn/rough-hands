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
 * Remove product search from header
 *
 * @link https://wordpress.stackexchange.com/questions/189062/remove-parent-theme-action-in-child#189066
 * @return void.
 */
function roughhands_remove_storefront_product_search() {
	remove_action( 'storefront_header', 'storefront_product_search', 40 );
}
add_action( 'init', 'roughhands_remove_storefront_product_search' );


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
 * Remove breadcrumb
 *
 * @return void.
 */
function roughhands_remove_woocommerce_breadcrumb() {
	remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
}
add_action( 'init', 'roughhands_remove_woocommerce_breadcrumb' );


/**
 * Remove everything before the shop loop
 *
 * See `storefront/inc/woocommerce/storefront-woocommerce-template-hooks.php`
 *
 * @return void.
 */
function roughhands_remove_storefront_before_shop_loop() {
	remove_action( 'woocommerce_before_shop_loop', 'storefront_sorting_wrapper', 9 );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 10 );
	remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
	remove_action( 'woocommerce_before_shop_loop', 'storefront_woocommerce_pagination', 30 );
	remove_action( 'woocommerce_before_shop_loop', 'storefront_sorting_wrapper_close', 31 );
}
add_action( 'init', 'roughhands_remove_storefront_before_shop_loop' );


/**
 * Remove everything after the shop loop except navigation
 *
 * See `storefront/inc/woocommerce/storefront-woocommerce-template-hooks.php`
 *
 * @return void.
 */
function roughhands_remove_storefront_after_shop_loop() {
	remove_action( 'woocommerce_after_shop_loop', 'storefront_sorting_wrapper', 9 );
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_catalog_ordering', 10 );
	remove_action( 'woocommerce_after_shop_loop', 'woocommerce_result_count', 20 );
	remove_action( 'woocommerce_after_shop_loop', 'storefront_sorting_wrapper_close', 31 );
}
add_action( 'init', 'roughhands_remove_storefront_after_shop_loop' );



/**
 * Remove credit from footer
 *
 * @return void.
 */
function roughhands_remove_storefront_credit() {
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
}
add_action( 'init', 'roughhands_remove_storefront_credit' );
