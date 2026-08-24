<?php
/**
 * Theme setup: supports, menus, editor styles.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

/**
 * Register theme supports and nav menus.
 */
function harbour_setup(): void {
	load_theme_textdomain( 'harbour-tree-care', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script', 'navigation-widgets' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 52,
			'width'       => 200,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary'         => __( 'Primary menu', 'harbour-tree-care' ),
			'footer_services' => __( 'Footer — services', 'harbour-tree-care' ),
			'footer_areas'    => __( 'Footer — areas covered', 'harbour-tree-care' ),
		)
	);
}
add_action( 'after_setup_theme', 'harbour_setup' );
