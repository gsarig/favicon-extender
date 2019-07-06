<?php
/**
 * Uninstall Favicon Extender
 *
 * @package Favicon Extender
 * @since 1.0
 */

// if uninstall.php is not called by WordPress, die
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

global $wpdb;

// Remove theme_mods
remove_theme_mod( 'override_icon' );
remove_theme_mod( 'android_icon' );
remove_theme_mod( 'ios_icon' );
remove_theme_mod( 'windows_icon' );
