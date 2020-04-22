<?php
/**
 * Plugin Name: Favicon Extender
 * Plugin URI: https://wordpress.org/plugins/favicon-extender/
 * Description: Extend the native WordPress Site Icon functionality to use different icons for Android, iOS and Windows.
 * Version: 1.0.3
 * Author: Giorgos Sarigiannidis
 * Author URI: https://www.gsarigiannidis.gr
 * License: GPL3
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FAVEXTENDER_VERSION', '1.0' );

add_action( 'init', 'favextender_load_textdomain' );
/**
 * Localize the plugin.
 */
function favextender_load_textdomain() {
	load_plugin_textdomain( 'favicon-extender', false, basename( dirname( __FILE__ ) ) . '/languages' );
}

// Autoload Classes.
require_once dirname( __FILE__ ) . '/includes/autoloader.php';
// Enqueue the scripts.
require_once dirname( __FILE__ ) . '/includes/enqueues.php';

$customizer = new FavExtender\Customizer();
$extender   = new FavExtender\Extender();
