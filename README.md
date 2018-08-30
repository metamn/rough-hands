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

It makes sense for the site's functionality to rely heavily on standard frameworks like Storefront for stability and performance.

And there is built-in support to build upon the parent theme functionality with template hooks, actions and filters.

None of these are true for the site's styling.

Instead of built-in support what one can do is to overwrite manually the parent theme CSS styles which leads to more code, more bloat, less speed.

There are other caveats with the Storefront styling. On responsive design Storefront doesn't makes a difference between how the site looks on tablet / portrait mode (https://imgur.com/a/zW1ylHt) and laptop / landscape mode (https://imgur.com/a/Rx3X6Hn), and, it adds lots of code we don't need on mobile screens (https://imgur.com/a/Pxhu6o8).

To get a clean code we rebuild the site's style from scratch using the same technologies (SASS/SCSS) as the parent theme.

### Node, Gulp, BEM

We use standard front-end tools to build and generate the theme style. Please check this link for the technologies used and their usage adoption: https://morethemes.baby/2018/05/12/more-themes-baby-is-in-the-loop/

These technologies are adding the following files and folders to the theme:

```
/assets/
/node_modules/
.stylelintrc
gulpfile.js
package.json
style.scss
style.scss.map
```

And there is a command to compile the SCSS files into CSS:

```
gulp
```

The documentation for installing and using these technologies is out of scope of this current document. On request a tutorial can be put together.

### Naming conventions

CSS class names always follow HTML class names. This consistency is necessary for clean and maintainable code.

CSS code structure is pretty straightforward. Inside the `assets/scss` folder you'll find:

* `/framework` - a folder containing a custom CSS framework.
* `/pages` - styles for pages
* `/parts` - styles for all template parts
* `/themes` - settings for this current theme.
