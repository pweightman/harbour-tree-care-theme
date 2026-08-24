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
	<div class="field-row" style="align-items:flex-end">
		<div class="field" style="flex:1">
			<input type="search" id="search-field" class="search-field" placeholder="<?php esc_attr_e( 'Search the site…', 'harbour-tree-care' ); ?>" value="<?php echo get_search_query(); ?>" name="s">
		</div>
		<button type="submit" class="btn btn-primary"><?php esc_html_e( 'Search', 'harbour-tree-care' ); ?></button>
	</div>
</form>
