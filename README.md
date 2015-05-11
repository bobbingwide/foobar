# foobar 
* Contributors: bobbingwide
* Donate link: http://www.oik-plugins.com/oik/oik-donate/
* Tags: foo, bar, foobar
* Requires at least: 3.7.1
* Tested up to: 4.2.2
* Stable tag: 1.2
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html
* Text Domain: foobar
* Domain Path: /languages/

## Description 
Sample plugin where function foo() calls bar()
BUT neither function gets invoked

Also includes a call to do_action( "foobar" );
and another with a call to do_action( "barfoo" );
Both with their own docBlock.

* Note: Action and filter hooks may be dynamically registered when encountered during display of the API.


## Installation 
1. Upload the contents of the foobar plugin to the `/wp-content/plugins/foobar' directory
1. DON'T bother to activate it

## Frequently Asked Questions 
# What does this do? 
Nothing. It was used during a demonstration of the oik-shortcodes plugin - creating dynamic documentation for WordPress plugins

# Where is this demonstration? 
It's part of a presentation given to PHP Hants in November 2013.

[I'm probably doing it wrong](http://rowlandscastlewebdesign.com/phphants/)

There's some more documentation in
[Building a plugin's API reference using oik-shortcodes and oik-batch](http://www.oik-plugins.com/wordpress-plugins-from-oik-plugins/premium-oik-plugins/oik-shortcode-and-api-server/building-plugins-api-reference-using-oik-shortcodes-oik-batch/)


## Screenshots 
1. nothing to see here


## Upgrade Notice 
# 1.2 
Now contains a localized version for the bbboing language ( bb_BB locale ). Tested to WordPress 4.2.2

# 1.1
Version made available on oik-plugins.com, 8th April 2014

# 1.0 
For education purposes only

## Changelog 
# 1.2 
* Added localized version for bb_BB.

# 1.1 
* Changed: Added a calls to do_action( "foobar" ) and do_action( "barfoo" ) with preceding docblocks; to test oik-shortcodes

# 1.0 
* Added: New plugin

