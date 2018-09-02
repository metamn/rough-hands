<!-- START doctoc generated TOC please keep comment here to allow auto update -->
<!-- DON'T EDIT THIS SECTION, INSTEAD RE-RUN doctoc TO UPDATE -->
**Table of Contents**  *generated with [DocToc](https://github.com/thlorenz/doctoc)*

- [Rough Hands](#rough-hands)
  - [Overview](#overview)
  - [Content](#content)
    - [Dynamic](#dynamic)
    - [Products](#products)
    - [Menu, Sidebar and Footer](#menu-sidebar-and-footer)
    - [Add to cart](#add-to-cart)
  - [Template structure](#template-structure)
  - [Styling](#styling)
    - [Node, Gulp, BEM](#node-gulp-bem)
    - [Naming conventions](#naming-conventions)
  - [Design](#design)
    - [Design thinking](#design-thinking)
    - [Responsiveness](#responsiveness)
      - [Example: Product design](#example-product-design)
        - [The product on screens in portrait mode (mobile, tablet)](#the-product-on-screens-in-portrait-mode-mobile-tablet)
        - [The product on tablet in landscape mode](#the-product-on-tablet-in-landscape-mode)
        - [The product on laptops](#the-product-on-laptops)

<!-- END doctoc generated TOC please keep comment here to allow auto update -->

# Rough Hands
Rough Hands - Store Page demo - https://morethemes.baby/rough-hands/

## Overview

This is a demo page for the Rough Hands online store. It is based on the WordPress WooCommerce plugin and their Storefront e-commerce theme.

Storefront is the default standard for WooCommerce and we are adapting it to the Rough Hands needs with a child theme.

Stick to the standards whenever possible for better performance and future compatibility.

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

All these can be found at [inc/class-roughhands-template.php](inc/class-roughhands-template.php).

## Styling

It makes sense for the site's functionality to rely heavily on standard frameworks like Storefront for stability and performance. And there is built-in support to build upon the parent theme functionality with template hooks, actions and filters.

None of these are true for the site's styling.

Instead of built-in support what one can do is to overwrite manually the parent theme CSS styles which leads to more code, more bloat, less speed.

There are other caveats with the Storefront styling. On responsive design Storefront doesn't makes a difference between how the site looks on tablet / portrait mode (https://imgur.com/a/zW1ylHt) and laptop / landscape mode (https://imgur.com/a/Rx3X6Hn), and, it adds lots of code we don't need on mobile screens (https://imgur.com/a/Pxhu6o8).

To get a really resposnsive design and clean CSS code we've rebuilt the site's style from scratch using the same technologies (SASS/SCSS) as the parent theme.

### Node, Gulp, BEM

We use [standard front-end tools](https://morethemes.baby/2018/05/12/more-themes-baby-is-in-the-loop/) to build and generate the theme style. These technologies are adding the following files and folders to the theme:

```
/assets/
/node_modules/
.stylelintrc
gulpfile.js
package.json
style.scss
style.scss.map
```

And there is a command to compile the SCSS files into the final CSS:

```
gulp
```

The documentation for installing and using these technologies is out of scope of this current document. On request a tutorial can be put together.

### Naming conventions

CSS class names always follow HTML class names: if a HTML element is styled there is always a corresponding, same name CSS component in the `assets/scss/parts` folder. This consistency is necessary for clean and maintainable code.

The CSS code structure is pretty straightforward. Inside the `assets/scss` folder you'll find:

* `/framework` - The folder containing the custom CSS framework.
* `/pages` - Styles for pages.
* `/parts` - Styles for all template parts
* `/themes` - Settings for this current theme.


## Design

If *Rough Hands* then let the design be a little rough.

I took the courage to use your design as a suggestion and rethink it. My best skills are not replicating a Photoshop comp to HTML and CSS but create unique designs which delivers the message.

Rough Hands, in my understanding, has the following major characteristics:

1. It's *rough*.
2. It sells things identified mostly by beautiful images.
3. The images have a relatively small size of 464px each.

### Design thinking

The whole design was built around roughness and the small product images.

To draw the necessary attention - by their simple beauty - images are displayed in their original size, unconstrained, on all screens.

The remaining space around the images was used responsively to display the other facts about the product we are selling.

These elements are styled according to their order of importance. If an element is more important than the other its style is stronger than the others.

### Responsiveness

Every component making up the design was rethinked for three device types: mobile, tablet, laptop; and four display modes: mobile portrait, tablet portrait and landscape, laptop landscape.

That's why we have as many component representations as needed - three for the product design, the site's header, the widgets in the footer; two for the product navigation; and so on.

Making responsiveness so granular are the landmarks of this site's design.

#### Example: Product design

##### The product on screens in portrait mode (mobile, tablet)

![The product on screens in portrait mode](https://i.imgur.com/1gTaWBgl.jpg)

##### The product on tablet in landscape mode

![The product on tablet in landscape mode](https://i.imgur.com/ycfpLEe.jpg)

##### The product on laptops

![The product on tablet in landscape mode](https://i.imgur.com/x71Fhdh.png)
