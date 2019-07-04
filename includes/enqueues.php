<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function favextender_customizer_enqueues() {
	wp_enqueue_script( 'favicon-exntender-scripts',
		plugins_url( '/js/custom.customize.js', dirname( __FILE__ ) ),
		array( 'jquery', 'customize-controls' ),
		false,
		true );
}

add_action( 'customize_controls_enqueue_scripts', 'favextender_customizer_enqueues' );