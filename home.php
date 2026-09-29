<?php
/**
 * Advice index (the posts page, /advice/).
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
			array( 'label' => __( 'Advice', 'harbour-tree-care' ) ),
		),
		'eyebrow' => __( 'Advice', 'harbour-tree-care' ),
		'heading' => __( 'Tree care and firewood advice', 'harbour-tree-care' ),
		'lead'    => __( 'Straight answers from a Leicestershire family firm, since 1977.', 'harbour-tree-care' ),
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
