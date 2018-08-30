<?php
/**
 * RoughHands Template Class
 *
 * @todo Move the code below insisde a class.
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
 * Sort products in the loop.
 *
 * @link http://hookr.io/plugins/woocommerce/3.0.6/functions/woocommerce_catalog_ordering/
 * @return string The string defining the sort order
 */
function roughhands_woocommerce_default_catalog_orderby() {
	return 'date';
}
add_filter( 'woocommerce_default_catalog_orderby', 'roughhands_woocommerce_default_catalog_orderby', 10, 1 );


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
 * Change the number of products displayed per page
 *
 * @link https://docs.woocommerce.com/document/change-number-of-products-displayed-per-page/
 * @param  integer $cols The number of products.
 * @return inetger       The new number of products.
 */
function roughhands_loop_shop_per_page( $cols ) {
	// $cols contains the current number of products per page based on the value stored on Options -> Reading
	// Return the number of products you wanna show per page.
	$cols = 6;
	return $cols;
}
add_filter( 'loop_shop_per_page', 'roughhands_loop_shop_per_page', 20 );


/**
 * Change the size of the product thumbnail
 *
 * @link http://hookr.io/plugins/woocommerce/3.0.6/files/includes-wc-template-functions/
 * @param  string $size The original value.
 * @return string       The new value
 */
function roughhands_single_product_archive_thumbnail_size( $size ) {
	$size = 'post-thumbnail';
	return $size;
}
add_filter( 'single_product_archive_thumbnail_size', 'roughhands_single_product_archive_thumbnail_size' );


/**
 * Display product short description.
 *
 * @return void
 */
function roughhands_woocommerce_after_shop_loop_item_title() {
	the_excerpt();
}
add_action( 'woocommerce_after_shop_loop_item_title', 'roughhands_woocommerce_after_shop_loop_item_title', 10, 0 );



/**
 * Remove the pagination prev and next links
 *
 * @todo Also the ::after pseuda class in CSS has to be removed.
 *
 * @link http://hookr.io/plugins/woocommerce/3.0.6/filters/woocommerce_pagination_args/
 * @param  array $args The pagination arguments.
 * @return array       The modified pagination arguments
 */
function roughhands_woocommerce_pagination_args( $args ) {
	$args['prev_text'] = '';
	$args['next_text'] = '';
	return $args;
}
add_filter( 'woocommerce_pagination_args', 'roughhands_woocommerce_pagination_args', 10, 1 );


/**
 * Add another footer widget.
 *
 * By default there are 4 widgets and we need 5.
 *
 * @param  integer $widgets The number of widgets.
 * @return integer          The updated number of widgets.
 */
function roughhands_storefront_footer_widget_columns( $widgets ) {
	$widgets = 5;
	return $widgets;
}
add_action( 'storefront_footer_widget_columns', 'roughhands_storefront_footer_widget_columns', 10, 1 );


/**
 * Suffix widget title with ':'
 *
 * @param  string $title The widget title.
 * @return string        The suffixed widget title
 */
function roughhands_widget_title( $title ) {
	$title .= ':';
	return $title;
}
add_filter( 'widget_title', 'roughhands_widget_title', 10, 1 );

/**
 * Remove credit from footer
 *
 * @return void.
 */
function roughhands_remove_storefront_credit() {
	remove_action( 'storefront_footer', 'storefront_credit', 20 );
}
add_action( 'init', 'roughhands_remove_storefront_credit' );


/**
 * Remove footer bar on mobile screens
 *
 * @return void
 */
function roughhands_storefront_handheld_footer_bar() {
	remove_action( 'storefront_footer', 'storefront_handheld_footer_bar', 999 );
}
add_action( 'init', 'roughhands_storefront_handheld_footer_bar' );
