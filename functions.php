<?php
/**
 * The main functions file
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

// Get theme directory path.
if ( ! defined( 'VCNT_DIR' ) ) {
	define( 'VCNT_DIR', get_template_directory() );
}

// Get theme directory uri.
if ( ! defined( 'VCNT_URI' ) ) {
	define( 'VCNT_URI', get_template_directory_uri() );
}

// Define version.
if ( ! defined( 'VCNT_VER' ) ) {
	define( 'VCNT_VER', '1.0.0' );
}

// Title tag support.
add_theme_support( 'title-tag' );

add_action( 'wp_enqueue_scripts', 'vcnt_load_assets' );

/**
 * Load the theme's css and scripts
 */
function vcnt_load_assets() {
	wp_enqueue_style(
		'vcnt-bootstrap-reboot',
		VCNT_URI . '/css/bootstrap.css',
		array(),
		VCNT_VER
	);

	wp_enqueue_style(
		'vcnt-style',
		VCNT_URI . '/style.css',
		array(),
		VCNT_VER
	);

	if ( is_front_page() ) {
		wp_enqueue_style(
			'vcnt-home',
			VCNT_URI . '/css/home.css',
			array( 'vcnt-style' ),
			VCNT_VER
		);
	}

	if ( is_single() ) {
		wp_enqueue_style(
			'vcnt-post',
			VCNT_URI . '/css/post.css',
			array( 'vcnt-style' ),
			VCNT_VER
		);
	}
}
