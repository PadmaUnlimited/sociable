<?php

/*
Plugin Name: Padma Sociable
Plugin URI: https://www.padmaunlimited.com/plugins/sociable
Description: Social Block with several icons set
Version: 1.0.0
Author: Padma Unlimited team
Author URI: https://www.padmaunlimited.com
License: GNU GPL v2
*/

//padma_register_block('PadmaSociableBlock', padma_url() . '/library/blocks/Sociable');


add_action('after_setup_theme', 'register_sociable_block');
function register_sociable_block() {

    if ( !class_exists('Padma') )
		return;

	require_once 'block.php';
	require_once 'block-options.php';

	if (!class_exists('PadmaBlockAPI') )
		return false;
	
	return padma_register_block('PadmaSociableBlock', substr(WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), '', plugin_basename(__FILE__)), 0, -1));

}