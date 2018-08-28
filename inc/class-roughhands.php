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
			add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_child_styles' ), 99 );
		}

		/**
		 * Enqueue Storechild Styles
		 *
		 * @return void
		 */
		public function enqueue_child_styles() {
			wp_dequeue_style( 'storefront-style' );
			wp_dequeue_style( 'storefront-woocommerce-style' );
			wp_dequeue_style( 'storefront-icons' );
			wp_dequeue_style( 'storefront-fonts' );
		}
	}

}

return new RoughHands();
