<?php
/**
 * Blog archives (category, tag, date). Same grid as the Advice index, with the
 * archive title as the heading.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

harbour_page_hero(
	array(
		'crumbs'  => array(
			array(
				'label' => __( 'Home', 'harbour-tree-care' ),
				'url'   => home_url( '/' ),
			),
			array(
				'label' => __( 'Advice', 'harbour-tree-care' ),
				'url'   => get_permalink( (int) get_option( 'page_for_posts' ) ),
			),
			array( 'label' => wp_strip_all_tags( get_the_archive_title() ) ),
		),
		'eyebrow' => __( 'Advice', 'harbour-tree-care' ),
		'heading' => wp_strip_all_tags( get_the_archive_title() ),
		'lead'    => wp_strip_all_tags( get_the_archive_description() ),
		'buttons' => array(),
	)
);
?>
<section class="section">
	<div class="wrap">
		<?php harbour_advice_grid(); ?>
	</div>
</section>
<?php
harbour_cta_band( array() );
get_footer();
