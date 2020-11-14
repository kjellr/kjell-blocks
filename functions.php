<?php

if ( ! function_exists( 'kjellr_support' ) ) :
	function kjellr_support()  {

		// Alignwide and alignfull classes in the block editor
		add_theme_support( 'align-wide' );

		// Adding support for core block visual styles.
		add_theme_support( 'wp-block-styles' );

		// Adding support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( array(
			'style.css',
			'assets/alignments-editor.css'
		) );
    }
    add_action( 'after_setup_theme', 'kjellr_support' );
endif;

/**
 * Enqueue scripts and styles.
 */
function kjellr_scripts() {

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'kjellr-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

	// Enqueue alignments stylesheet.
	wp_enqueue_style( 'kjellr-alignments-style', get_template_directory_uri() . '/assets/alignments-front.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'kjellr_scripts' );
