<?php
/*
Plugin Name: NGINX Cache Bypass for WooCommerce
Plugin URI: https://github.com/Matt-Welland
Description: Super-lightweight plugin that prevents NGINX caching for WooCommerce pages to ensure stock, cart and checkout functionality is well maintained. 
Version: 1.0.0
Author: Matt Welland
Author URI: https://github.com/Matt-Welland
*/

if ( ! defined( 'ABSPATH' ) ) {
	die( 'Invalid request.' );
}

if( class_exists('WooCommerce') ) {
    add_action('template_redirect', function() {
        if (is_product() || is_cart() || is_checkout() || is_account_page()) {
            if (!defined('DONOTCACHEPAGE')) {
                define('DONOTCACHEPAGE', true);
            }
        }
    });
}