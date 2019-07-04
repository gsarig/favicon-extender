<?php


namespace FavExtender;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

class Extender {
	public function __construct() {
		add_filter( 'site_icon_meta_tags', [ $this, 'remove_default_icons' ] );
	}

	public static function removeAppleTouchIconFilter( $string ) {
		return strpos( $string, 'apple-touch-icon' ) === false;
	}

	public static function remove_default_icons( $meta_tags ) {
		$is_enabled = get_theme_mod( 'override_icon' );
		$android    = get_theme_mod( 'android_icon' );
		$ios        = get_theme_mod( 'ios_icon' );
		$windows    = get_theme_mod( 'windows_icon' );
		if ( $is_enabled ) {
			foreach ( $meta_tags as $key => $value ) {
				if ( strpos( $value, '192x192' ) && $android ) {
					unset( $meta_tags[ $key ] );
					$meta_tags[] = sprintf( '<link rel="icon" href="%s" sizes="192x192" />', esc_url( $android ) );
				}
				if ( strpos( $value, 'apple-touch-icon-precomposed' ) && $ios ) {
					unset( $meta_tags[ $key ] );
					$meta_tags[] = sprintf( '<link rel="apple-touch-icon-precomposed" href="%s" />', esc_url( $ios ) );
				}
				if ( strpos( $value, 'msapplication-TileImage' ) && $windows ) {
					unset( $meta_tags[ $key ] );
					$meta_tags[] = sprintf( '<meta name="msapplication-TileImage" content="%s" />',
						esc_url( $windows ) );
				}
			}
		}

		return $meta_tags;
	}
}