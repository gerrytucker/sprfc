<?php

/**
 * Enqueue styles & scripts
 */
function enqueue_theme_scripts() {

  wp_register_script( 'modernizr', get_template_directory_uri() . '/scripts/modernizr.min.js', false, null, false );
  wp_enqueue_script( 'modernizr' );

	wp_enqueue_style( 'sprfc-style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_scripts' );

/**
 * Remove query strings from static resources
 */
function remove_query_strings( $src ) {

	$parts = explode( '?ver', $src );
	return $parts[0];

}
add_filter( 'script_loader_src', 'remove_query_strings', 15, 1 );
add_filter( 'style_loader_src', 'remove_query_strings', 15, 1 );

