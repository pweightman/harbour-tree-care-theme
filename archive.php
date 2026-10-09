<?php
/**
 * Blog archives (category, tag, date). Same grid as the Advice index, with the
 * archive title as the heading.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

// Clean heading/intro: tag archives drop the "Tag:" prefix and get a sensible
// lead when the term has no description.
$harbour_arch_title = wp_strip_all_tags( get_the_archive_title() );
$harbour_arch_lead  = wp_strip_all_tags( get_the_archive_description() );
if ( is_tag() ) {
	$harbour_arch_title = ucfirst( single_tag_title( '', false ) );
	if ( '' === $harbour_arch_lead ) {
		$harbour_arch_lead = sprintf(
			/* translators: %s: tag name. */
			__( 'Practical tree care and firewood advice tagged “%s”, from a Leicestershire family firm since 1977.', 'harbour-tree-care' ),
			$harbour_arch_title
		);
	}
}

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
			array( 'label' => $harbour_arch_title ),
		),
		'eyebrow' => __( 'Advice', 'harbour-tree-care' ),
		'heading' => $harbour_arch_title,
		'lead'    => $harbour_arch_lead,
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
