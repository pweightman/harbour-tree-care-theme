<?php
/**
 * Job gallery archive (/our-work/). Before/after grid.
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
			array( 'label' => __( 'Our work', 'harbour-tree-care' ) ),
		),
		'eyebrow' => __( 'Our work', 'harbour-tree-care' ),
		'heading' => __( 'Before and after, across the county.', 'harbour-tree-care' ),
		'lead'    => __( 'A few of the jobs we\'ve done recently — pruning, felling, stump grinding and clearance around Leicestershire. Photos are our own work, not stock.', 'harbour-tree-care' ),
		'buttons' => null,
	)
);
?>
<section class="section">
	<div class="wrap">
		<?php if ( have_posts() ) : ?>
			<div class="job-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					echo harbour_job_card( get_post() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				endwhile;
				?>
			</div>
			<?php the_posts_pagination( array( 'mid_size' => 1 ) ); ?>
		<?php else : ?>
			<p class="lead measure"><?php esc_html_e( "We're adding job photos here shortly. In the meantime, give the yard a ring — we're happy to talk through work we've done nearby.", 'harbour-tree-care' ); ?></p>
		<?php endif; ?>
	</div>
</section>
<?php
harbour_cta_band( array() );
get_footer();
