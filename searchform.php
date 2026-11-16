<?php
/**
 * Search form.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="search-field" class="screen-reader-text"><?php esc_html_e( 'Search for:', 'harbour-tree-care' ); ?></label>
	<input type="search" id="search-field" class="search-field" placeholder="<?php esc_attr_e( 'Search the site…', 'harbour-tree-care' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s">
	<button type="submit" class="btn btn-primary"><?php esc_html_e( 'Search', 'harbour-tree-care' ); ?></button>
</form>
