<?php
/* 
Plugin Name: Turbolinks
Description: Speed up your site with Turbolinks.
Author:      Sushant

Turbolinks plugin
*/

if (!defined('WPINC')) {die;}

function turbolinks_function_new() {

	wp_register_script( 'turbolinks', plugin_dir_url( __FILE__ ) . '/js/turbolinks.js', NULL, '', true );
	wp_enqueue_script( 'turbolinks' );
}

add_action( 'init', 'turbolinks_function_new' );