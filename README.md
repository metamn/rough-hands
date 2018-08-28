# Rough Hands
Rough Hands - Store Page demo

## Overview

This is a demo page for the Rough Hands online store.

It is based on the WordPress WooCommerce plugin and their Storefront e-commerce theme.

Storefront is the default standard for WooCommerce and we are adapting it to the Rough Hands needs using this current child theme.

This child theme, again, was inspired by another official child theme, Boutique.

The idea is to stick to the standards whenever possible for better performance and future compatibility.

## Content

### Dynamic

All content is dynamic - coming from the WordPress Dashboard. No content chunks were inserted into the site through code.

### Products

There are six original demo products, and the rest are imported from the WooCommerce sample data to make pagination work.

### Menu, Sidebar and Footer

They are all using content set up in the Dashboard and customized via the Appearance menu.

### Add to cart

The `Add to cart` button text was changed to `Reserve` with a plugin, following these instructions: https://docs.woocommerce.com/document/change-add-to-cart-button-text/

## Template structure

Some template parts coming from the parent theme were removed, some new parts were added, and a few configuration parameters were changed.

All these can be found at `inc/class-roughhands-template.php`.

## Styling

It makes sense for the site's functionality to rely heavily on standard frameworks like Storefront, for stability and performance.

And there is a standard mechanism to build upon the parent theme functionality with template hooks, actions and filters.

None of these are true for the site's styling.

What one can do is to overwrite manually the parent theme CSS styles which leads to more code, more bloat, less speed.

On responsive design Storefront doesn't makes a difference between how the site looks on tablet / portrait mode (https://imgur.com/a/zW1ylHt) and laptop / landscape mode (https://imgur.com/a/Rx3X6Hn), and, it adds lots of code we don't need on mobile screens (https://imgur.com/a/Pxhu6o8).

As a solution we are rebuilding the site's style with scratch using the same technologies (SASS) as the parent theme.
