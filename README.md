# WordPress Full-Site Editing Block Starter Theme

This is a starter theme for WordPress developers to create a custom Full-Site Editing Block Theme.

You'll need familiarity with [WordPress Block Theme development](https://developer.wordpress.org/themes/block-themes/) to get the most out of it.

For those less familiar with Block Theme development, I provide links below to upgrade your WordPress development skills.

## What is a Full-Site Editing Block Theme?

In a nutshell, it's a native replacement for WordPress third-party page-builder plugins such as Elementor, Divi, Beaver Builder, and WPBakery. It was created by the core WP team to allow WordPress users to build a website with no-code and for WordPress to compete with the likes of Wix, Squarespace, and other no-code website-building platforms.

The Full-Site Editor uses components called "Blocks" (think Legos) to create pages and reusable design patterns (multiple blocks combined). It's very flexible in that it allows both no-code users and block developers to modify it for their uses.

For an official explanation, read [WordPress's Full-Site Editing documentation](https://developer.wordpress.org/block-editor/getting-started/full-site-editing/).

## Developing a Block Theme

Out-of-the-box, WordPress has a block library with dozens of core blocks (see the [Core Blocks Reference](https://developer.wordpress.org/block-editor/reference-guides/core-blocks/)) which can be used to build a site. The core blocks have minimum styles applied to them and can be modified in the WordPress Editor without knowing any code. However, the no-code editor is both overloaded with options and limited in customization abilities (as are all page-builders).

For this reason, brands often want to have a custom Block Theme developed with specific blocks and patterns options to match their brand styles.

When developing a Block Theme (or plugin), there are two main types of customization you will make.

1. Customizing an existing core block. You can modify an existing block with new or removed attributes, styles, and abilities.

2. You can create wholly new blocks for a specific need.

Both options can be developed using PHP or JavaScript. Since Block development has shifted almost entirely to the JavaScript way, I recommend using JavaScript for most of the Block Theme development. You'll still need PHP for theme functions though.

## Learn JavaScript and React for Block Development

WordPress has traditionally been a PHP-based platform since its start, and while PHP is still used for the core functions, the block editor uses a modern paradigm of developing with JavaScript, or more specifically `React.js`, to render the blocks.

Since [React](https://react.dev/) is a JavaScript library, a Block Theme developer should have a strong foundation in JavaScript fundamentals. While expert JavaScript knowledge is not required to develop blocks, you should at least be familiar with variables, data types, string methods, loops, and conditionals to be able to get around well in React.

React itself uses a paradigm of combining HTML and JavaScript together called `JSX`, which is used in WordPress's block development. Knowing the fundamentals of JavaScript and JSX will go a long ways in developing new blocks or modifying existing ones.

The best place to learn modern React is from the [official React website](https://react.dev/learn). And the best reference resource for JavaScript is [MDN](https://developer.mozilla.org/en-US/docs/Web/JavaScript). Both are free and provide fantastic documentation for developers.

## What's New?

View the [Changelog](https://github.com/jacobcassidy/wp-starter-fse-block-theme/blob/main/CHANGELOG.md) to see what's new.

## Found An Issue?

If you come across any theme issues, please report them [here](https://github.com/jacobcassidy/wp-starter-fse-block-theme/issues).
