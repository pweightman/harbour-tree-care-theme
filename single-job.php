<?php
/**
 * Single job page: large before/after, description, related work.
 *
 * @package HarbourTreeCare
 */

defined( 'ABSPATH' ) || exit;

get_header();

while ( have_posts() ) :
	the_post();
	$pid    = get_the_ID();
	$before = (int) get_post_meta( $pid, '_harbour_before', true );
	$after  = (int) get_post_meta( $pid, '_harbour_after', true );

	harbour_page_hero(
		array(
			'crumbs'  => array(
				array(
					'label' => __( 'Home', 'harbour-tree-care' ),
					'url'   => home_url( '/' ),
				),
				array(
					'label' => __( 'Our work', 'harbour-tree-care' ),
					'url'   => get_post_type_archive_link( 'job' ),
				),
				array( 'label' => get_the_title() ),
			),
			'eyebrow' => __( 'Our work', 'harbour-tree-care' ),
			'heading' => get_the_title(),
			'lead'    => '',
			'buttons' => null,
		)
	);
	?>
	<section class="section">
		<div class="wrap">
			<div class="job-pair job-pair-lg" style="margin-bottom:var(--s-6)">
				<?php
				if ( $before ) {
					echo '<figure class="job-shot"><span class="job-tag">' . esc_html__( 'Before', 'harbour-tree-care' ) . '</span>' . wp_get_attachment_image( $before, 'large', false, array( 'loading' => 'eager' ) ) . '</figure>';
				}
				if ( $after ) {
					echo '<figure class="job-shot"><span class="job-tag">' . esc_html__( 'After', 'harbour-tree-care' ) . '</span>' . wp_get_attachment_image( $after, 'large', false, array( 'loading' => 'eager' ) ) . '</figure>';
				}
				if ( ! $before && ! $after && has_post_thumbnail() ) {
					the_post_thumbnail( 'large' );
				}
				?>
			</div>
			<?php if ( trim( get_the_content() ) ) : ?>
				<div class="prose measure"><?php the_content(); ?></div>
			<?php endif; ?>
		</div>
	</section>
	<?php
	harbour_cta_band(
		array(
			'heading' => __( 'Something similar in your garden?', 'harbour-tree-care' ),
			'text'    => __( 'Free site visit, written quote, everything cleared away.', 'harbour-tree-care' ),
		)
	);
endwhile;
get_footer();
