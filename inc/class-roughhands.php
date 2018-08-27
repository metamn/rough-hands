<?php
/**
 * RoughHands Class
 *
 * @package RoughHands
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'RoughHands' ) ) {
	/**
	 * The RoughHands main class.
	 */
	class RoughHands {
		/**
		 * Setup class.
		 *
		 * @since 1.0
		 */
		public function __construct() {
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_styles' ) );
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_child_styles' ), 99 );
			add_filter( 'storefront_woocommerce_args', array( $this, 'woocommerce_support' ) );
			add_action( 'body_class', array( $this, 'body_classes' ) );
		}

		/**
		 * Adds custom classes to the array of body classes.
		 *
		 * @param array $classes Classes for the body element.
		 * @return array
		 */
		public function body_classes( $classes ) {
			global $storefront_version;

			if ( version_compare( $storefront_version, '2.3.0', '>=' ) ) {
				$classes[] = 'storefront-2-3';
			}

			return $classes;
		}

		/**
		 * Override Storefront default theme settings for WooCommerce.
		 *
		 * @param array $args Storefront default theme settings.
		 * @return array the modified arguments
		 */
		public function woocommerce_support( $args ) {
			$args['single_image_width']    = 416;
			$args['thumbnail_image_width'] = 324;

			return $args;
		}

		/**
		 * Enqueue Storefront Styles
		 *
		 * @return void
		 */
		public function enqueue_styles() {
			global $storefront_version;

			wp_enqueue_style( 'storefront-style', get_template_directory_uri() . '/style.css', $storefront_version );
		}

		/**
		 * Enqueue Storechild Styles
		 *
		 * @return void
		 */
		public function enqueue_child_styles() {
			global $storefront_version, $store_shaw_version;

			/**
			 * Styles
			 */
			wp_style_add_data( 'storefront-child-style', 'rtl', 'replace' );

			wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:400,700,400italic', array( 'storefront-style' ) );
			wp_enqueue_style( 'playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic', array( 'storefront-style' ) );
		}

	}

}

return new RoughHands();
