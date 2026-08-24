<?php
/**
 * Harbour Tree Care theme bootstrap.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

define( 'HARBOUR_THEME_VERSION', '0.1.1' );

$harbour_inc = get_template_directory() . '/inc/';

require_once $harbour_inc . 'setup.php';
require_once $harbour_inc . 'enqueue.php';
require_once $harbour_inc . 'performance.php';
require_once $harbour_inc . 'template-tags.php';
require_once $harbour_inc . 'nav-walker.php';
require_once $harbour_inc . 'updates.php';
