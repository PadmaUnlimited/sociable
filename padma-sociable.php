<?php

/*
Plugin Name: Padma Sociable
Plugin URI: https://www.padmaunlimited.com/plugins/sociable
Description: Social Block with several icons set
Version: 1.0.16
Author: Padma Unlimited team
Author URI: https://www.padmaunlimited.com
License: GNU GPL v2
*/

add_action('after_setup_theme', 'register_sociable_block');
function register_sociable_block() {

    if ( !class_exists('Padma') )
		return;
	
	require_once 'block-options.php';

	if (!class_exists('PadmaBlockAPI') )
		return false;

	$class = 'PadmaSociableBlock';
	$block_type_url = substr(WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), '', plugin_basename(__FILE__)), 0, -1);		
	$class_file = __DIR__ . '/block.php';
	$icons = array(
			'path' => __DIR__,
			'url' => $block_type_url
		);

	padma_register_block(
		$class,
		$block_type_url,
		$class_file,
		$icons
	);
	

	/**
	 *
	 * Check if there is the Padma Loader
	 *
	 */		
	if ( version_compare(PADMA_VERSION, '1.1.70', '<=') ){			
		include_once $class_file;
	}

}
