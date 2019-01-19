=== foobar === 
Contributors: bobbingwide
Donate link: https://www.oik-plugins.com/oik/oik-donate/
Tags: foo, bar, foobar
Requires at least: 3.7.1
Tested up to: 4.2.2
Stable tag: 1.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: foobar
Domain Path: /languages/

== Description ==
Sample plugin where function foo() calls bar()
BUT neither function gets invoked

Also includes a call to do_action( "foobar" );
and another with a call to do_action( "barfoo" );
Both with their own docBlock.

* Note: Action and filter hooks may be dynamically registered when encountered during display of the API.

