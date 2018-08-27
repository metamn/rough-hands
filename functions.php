<?php
/**
 * Rough Hands engine room.
 *
 * Based on the Boutique Storefront child theme @see https://docs.woocommerce.com/document/boutique-storefront-child-theme/
 *
 * @package RoughHands
 */

/**
 * Set the theme version number as a global variable
 */
$theme            = wp_get_theme( 'rough-hands' );
$boutique_version = $theme['Version'];

$theme              = wp_get_theme( 'storefront' );
$storefront_version = $theme['Version'];

/**
 * Load the individual classes required by this theme
 */
require_once 'inc/class-roughhands.php';
require_once 'inc/class-roughhands-integrations.php';
require_once 'inc/class-roughhands-template.php';

/**
 * Do not add custom code / snippets here.
 * While Child Themes are generally recommended for customisations, in this case it is not
 * wise. Modifying this file means that your changes will be lost when an automatic update
 * of this theme is performed. Instead, add your customisations to a plugin such as
 * https://github.com/woothemes/theme-customisations
 */
