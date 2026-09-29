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

	// Optional: authenticate GitHub API calls to avoid the unauthenticated
	// 60-requests/hour-per-IP limit (which returns HTTP 403 on shared hosting).
	// Define HARBOUR_GITHUB_TOKEN in wp-config.php with a fine-grained,
	// read-only "Contents" token to raise the limit to 5,000/hour.
	if ( defined( 'HARBOUR_GITHUB_TOKEN' ) && HARBOUR_GITHUB_TOKEN ) {
		$updater->setAuthentication( HARBOUR_GITHUB_TOKEN );
	}

	// Use the zip attached to the release, not GitHub's source archive.
	$updater->getVcsApi()->enableReleaseAssets( '/harbour-tree-care\.zip$/i' );
}
add_action( 'after_setup_theme', 'harbour_theme_updates' );
