<?php
/**
Plugin Name: foobar
Plugin URI: http://www.oik-plugins.com/oik-plugins/foobar-least-amazing-plugin-world
Description: sample plugin - foo() calls bar()
Version: 1.2
Author: bobbingwide
Author URI: http://www.oik-plugins.com/author/bobbingwide
Text Domain: foobar
Domain Path: /languages/
License: GPL2
*/

/**
 * foo calls bar
 *
 * The function named *foo* calls the function named *bar* 
 * 
 */
function foo() {
  bar();
}

/**
 * bar invokes "foobar" action hook
 *
 */
function bar() {
  /**
   * Invoke the 'foobar' action
   *
   * Let other plugins know that someone's called foo() which called bar()
   * 
   * @param
   */
  do_action( "foobar" );
  /**
   * Invoke the "barfoo" action
   *
   * Let other plugins know that bar() was called by foo()
   * 
   * @param string $barfoo - always set to "barfoo"
   */
  do_action( "barfoo", "barfoo" );
} 

