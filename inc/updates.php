<?php
/**
 * Self-updating from GitHub Releases via Plugin Update Checker.
 *
 * @package HarbourTreeCare
 * @see RELEASE-SETUP.md
 */

defined( 'ABSPATH' ) || exit;

require_once get_template_directory() . '/inc/vendor/plugin-update-checker/plugin-update-checker.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;

/**
 * Wire the theme up to its GitHub releases.
 */
function harbour_theme_updates(): void {
	$updater = PucFactory::buildUpdateChecker(
		'https://github.com/pweightman/harbour-tree-care-theme/',
		get_template_directory() . '/style.css',
		'harbour-tree-care' // Must match the theme directory name exactly.
	);

	// Use the zip attached to the release, not GitHub's source archive.
	$updater->getVcsApi()->enableReleaseAssets( '/harbour-tree-care\.zip$/i' );
}
add_action( 'after_setup_theme', 'harbour_theme_updates' );
