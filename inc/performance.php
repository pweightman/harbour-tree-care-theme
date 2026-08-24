<?php
/**
 * Front-end performance: strip WordPress default bloat this theme doesn't use.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

/**
 * Dequeue block-library and global-styles CSS on the front end. This theme
 * ships its own stylesheet and doesn't render editor blocks on the front.
 */
function harbour_dequeue_block_css(): void {
	if ( is_admin() ) {
		return;
	}
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'wc-blocks-style' );
	wp_dequeue_style( 'classic-theme-styles' );
	wp_dequeue_style( 'global-styles' );
	// Remove the SVG duotone filters block.
	remove_action( 'wp_body_open', 'wp_global_styles_render_svg_filters' );
	remove_action( 'wp_enqueue_scripts', 'wp_enqueue_global_styles' );
	remove_action( 'wp_footer', 'wp_enqueue_global_styles', 1 );
}
add_action( 'wp_enqueue_scripts', 'harbour_dequeue_block_css', 100 );

/**
 * Remove emoji detection script/styles.
 */
function harbour_disable_emojis(): void {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter(
		'tiny_mce_plugins',
		function ( $plugins ) {
			return is_array( $plugins ) ? array_diff( $plugins, array( 'wpemoji' ) ) : array();
		}
	);
	add_filter( 'emoji_svg_url', '__return_false' );
}
add_action( 'init', 'harbour_disable_emojis' );

/**
 * Trim wp_head: generator, shortlinks, RSD/WLW, oEmbed discovery, adjacent
 * post rel links, and the wp-embed script.
 */
function harbour_clean_head(): void {
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
}
add_action( 'init', 'harbour_clean_head' );

/**
 * Drop the front-end wp-embed.js.
 */
function harbour_dequeue_embed(): void {
	if ( ! is_admin() ) {
		wp_deregister_script( 'wp-embed' );
	}
}
add_action( 'wp_footer', 'harbour_dequeue_embed' );

/**
 * Disable XML-RPC.
 */
add_filter( 'xmlrpc_enabled', '__return_false' );

/**
 * Add width/height-friendly lazy loading defaults are already inline in
 * templates; ensure the loading optimisation stays on.
 */
add_filter( 'wp_lazy_loading_enabled', '__return_true' );
