<?php
/**
 * Harbour Tree Care theme bootstrap.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

// Derive the asset cache-busting version from the theme header so style.css and
// site.js always bust cache on a theme update (previously hardcoded and stale).
define( 'HARBOUR_THEME_VERSION', wp_get_theme( get_template() )->get( 'Version' ) ?: '0.6.1' );

$harbour_inc = get_template_directory() . '/inc/';

require_once $harbour_inc . 'setup.php';
require_once $harbour_inc . 'enqueue.php';
require_once $harbour_inc . 'performance.php';
require_once $harbour_inc . 'template-tags.php';
require_once $harbour_inc . 'nav-walker.php';
require_once $harbour_inc . 'updates.php';
