<?php
/**
 * Fallback template. Replaced in Phase 2.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<main id="main" class="site-main">
	<h1><?php bloginfo( 'name' ); ?></h1>
	<p><?php esc_html_e( 'Theme skeleton — templates land in Phase 2.', 'harbour-tree-care' ); ?></p>
</main>
<?php
get_footer();
