<?php
/**
 * The main functions file
 *
 * @package victor-crespo-net-theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	die();
}

get_header();

if ( function_exists( 'pll_current_language' ) ) {
	$language = pll_current_language();
} else {
	$language = get_bloginfo( 'language' );
}

// Spanish by default.
if ( empty( $language ) ) {
	$language = 'es';
}

get_template_part( 'template-parts/front-page-' . $language );

get_footer();
