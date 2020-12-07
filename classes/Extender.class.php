<?php


namespace FavExtender;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * The Extender class
 */
class Extender {

	/**
	 * The class constructor.
	 */
	public function __construct() {
		add_filter( 'site_icon_meta_tags', [ $this, 'add_icons' ] );
	}

	/**
	 * Add custom icons
	 *
	 * @param array $meta_tags The default meta tags.
	 *
	 * @return array
	 */
	public static function add_icons( $meta_tags ) {
		$is_enabled = get_theme_mod( 'override_icon' );
		$android    = wp_get_attachment_image_src( absint( get_theme_mod( 'android_icon' ) ) );
		$ios        = wp_get_attachment_image_src( absint( get_theme_mod( 'ios_icon' ) ) );
		$windows    = wp_get_attachment_image_src( absint( get_theme_mod( 'windows_icon' ) ) );
		if ( $is_enabled ) {
			foreach ( $meta_tags as $key => $value ) {
				if ( strpos( $value, '192x192' ) && isset( $android[0] ) && $android[0] ) {
					unset( $meta_tags[ $key ] );
					$meta_tags[] = sprintf(
						'<link rel="icon" href="%s" sizes="192x192" />',
						esc_url( $android[0] )
					);
				}
				if ( strpos( $value, 'apple-touch-icon-precomposed' ) && isset( $ios[0] ) && $ios[0] ) {
					unset( $meta_tags[ $key ] );
					$meta_tags[] = sprintf(
						'<link rel="apple-touch-icon-precomposed" href="%s" />',
						esc_url( $ios[0] )
					);
				}
				if ( strpos( $value, 'msapplication-TileImage' ) && isset( $windows[0] ) && $windows[0] ) {
					unset( $meta_tags[ $key ] );
					$meta_tags[] = sprintf(
						'<meta name="msapplication-config" content="none">
						<meta name="msapplication-TileImage" content="%s" />',
						esc_url( $windows[0] )
					);
				}
			}
		}

		return $meta_tags;
	}
}
