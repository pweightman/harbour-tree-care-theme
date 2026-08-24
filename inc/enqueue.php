<?php
/**
 * Front-end assets: one stylesheet, self-hosted fonts, one deferred script.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue styles and scripts.
 */
function harbour_enqueue(): void {
	wp_enqueue_style(
		'harbour-tree-care',
		get_stylesheet_uri(),
		array(),
		HARBOUR_THEME_VERSION
	);

	wp_enqueue_script(
		'harbour-site',
		get_template_directory_uri() . '/assets/js/site.js',
		array(),
		HARBOUR_THEME_VERSION,
		array( 'strategy' => 'defer', 'in_footer' => true )
	);
}
add_action( 'wp_enqueue_scripts', 'harbour_enqueue' );

/**
 * Preload the self-hosted Inter woff2 used above the fold.
 * (Preload/weight tuning is revisited in Phase 7.)
 */
function harbour_preload_fonts(): void {
	$dir = get_template_directory_uri() . '/assets/fonts/';
	foreach ( array( 'inter-var-latin.woff2' ) as $file ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( $dir . $file )
		);
	}
}
add_action( 'wp_head', 'harbour_preload_fonts', 1 );
