<?php
/**
 * Harbour Tree Care theme bootstrap.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

define( 'HARBOUR_THEME_VERSION', '0.1.0' );

/**
 * Register theme supports.
 */
function harbour_setup(): void {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'editor-styles' );
	register_nav_menus(
		array(
			'primary' => __( 'Primary menu', 'harbour-tree-care' ),
			'footer'  => __( 'Footer menu', 'harbour-tree-care' ),
		)
	);
}
add_action( 'after_setup_theme', 'harbour_setup' );

/**
 * Enqueue the single stylesheet.
 */
function harbour_enqueue(): void {
	wp_enqueue_style( 'harbour-tree-care', get_stylesheet_uri(), array(), HARBOUR_THEME_VERSION );
}
add_action( 'wp_enqueue_scripts', 'harbour_enqueue' );

require_once get_template_directory() . '/inc/updates.php';
